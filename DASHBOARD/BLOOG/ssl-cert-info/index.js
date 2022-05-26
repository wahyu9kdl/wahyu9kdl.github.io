const tls = require('tls');
const pem = require('pem')
const promisify = require('util').promisify
const createCertificate = promisify(pem.createCertificate);

/**
 * @param {string} ip
 * @param {int} port
 * @param {string|null} host
 * @param {int} timeout
 * @returns {Promise<{fingerprint_sha1: string, subject: *, valid_to: *, bits, subject_alt_name: *[], valid_from: *, serial_number: string, ip_address, authority_info_access: NodeJS.Dict<string[]> | string, ext_key_usage: *, issuer: *, fingerprint_sha256: string}>}
 */
module.exports = async function (ip, port, host = null, timeout = 10000) {
    const keys = await createCertificate({days: 1, selfSigned: true});

    const options = {
        key: keys.clientKey,
        cert: keys.certificate,
        host: ip,
        port: port,
        servername: host || undefined,
        rejectUnauthorized: false,
        requestCert: true,
    };

    const promise = new Promise((resolve, reject) => {
        const timer_id = setTimeout(() => {
            reject(new Error('Timeout reached'))
        }, timeout)

        const socket = tls.connect(options, () => {
            socket.end();

            clearTimeout(timer_id)

            resolve(socket.getPeerCertificate(true));
        });

        socket.on('error', reject);
    })

    const r = await promise;

    let sans = [];
    (r.subjectaltname?.split(',') || []).forEach(v => {
        const tmp = v.split(':');
        sans.push({
            type: tmp[0].trim(),
            name: tmp.slice(1).join(':').trim(),
        });
    })

    return {
        ip_address: ip,
        subject: r.subject,
        issuer: r.issuer,
        subject_alt_name: sans,
        authority_info_access: r.infoAccess,
        bits: r.bits,
        valid_from: r.valid_from,
        valid_to: r.valid_to,
        fingerprint_sha1: r.fingerprint,
        fingerprint_sha256: r.fingerprint256,
        serial_number: r.serialNumber,
        ext_key_usage: r.ext_key_usage,
    }
}