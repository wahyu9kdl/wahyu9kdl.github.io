"""Setup Awdev - @wahyu9kdl"""

import os

from setuptools import find_packages, setup

# get the version (don't import autoreject here to avoid dependency)
version = None
with open(os.path.join('autoreject', '__init__.py'), 'r') as fid:
    for line in (line.strip() for line in fid):
        if line.startswith('__version__'):
            version = line.split('=')[1].strip().strip('\'')
            break
if version is None:
    raise RuntimeError('Could not determine version')

DISTNAME = 'AWDEV'
DESCRIPTION = 'Automated rejection and repair of epochs in M/EEG.'
MAINTAINER = 'AWDEV CORPORATION'
MAINTAINER_EMAIL = 'cs@awdev.eu.org'
LICENSE = 'MIT License'
URL = 'http://wahyu9kdl.github.io/'
DOWNLOAD_URL = 'https://github.com/wahyu9kdl/wahyu9kdl.github.io.git'
VERSION = version

if __name__ == "__main__":
    setup(name=DISTNAME,
          maintainer=MAINTAINER,
          maintainer_email=MAINTAINER_EMAIL,
          description=DESCRIPTION,
          license=LICENSE,
          version=VERSION,
          url=URL,
          download_url=DOWNLOAD_URL,
          long_description=open('README.rst').read(),
          long_description_content_type='text/x-rst',
          classifiers=[
              'Intended Audience :: Science/Research',
              'Intended Audience :: Developers',
              'License :: OSI Approved',
              'Programming Language :: Python',
              'Topic :: Software Development',
              'Topic :: Scientific/Engineering',
              'Operating System :: Microsoft :: Windows',
              'Operating System :: POSIX',
              'Operating System :: Unix',
              'Operating System :: MacOS',
              'Programming Language :: Python :: 3',
          ],
          platforms='any',
          keywords=('electroencephalography eeg magnetoencephalography '
                    'meg preprocessing analysis'),
          python_requires='~=3.7',
          install_requires=[
              'numpy >= 1.20',
              'scipy >= 1.6',
              'mne[hdf5] >= 1.0',
              'scikit-learn >= 0.24',
              'joblib',
              'matplotlib >= 3.3',
          ],
          extras_require={
              'test': [
                  'pytest',
                  'pytest-cov',
                  'pytest-sugar',
                  'check-manifest',
                  'flake8',
              ],
              'doc': [
                  'sphinx',
                  'sphinx-gallery',
                  'sphinx_bootstrap_theme',
                  'sphinx-copybutton',
                  'sphinx-github-role',
                  'numpydoc',
                  'cython',
                  'pillow',
                  'openneuro-py >= 2022.2.2',
              ]
          },
          packages=find_packages(),
          project_urls={
              'Documentation': 'http://wahyu9kdl.github.io/',
              'Code Sandbox': 'https://wahyu9kdl.github.io/DASHBOARD/TOOLS/CodeSandbox.html',
              'HTML': 'https://wahyu9kdl.github.io/HTML/htmltemplategenerator-gh-pages/index.html',
              'Bootstrap': 'https://wahyu9kdl.github.io/Bootstrap.html',
              'Markdown': 'https://wahyu9kdl.github.io/HTML/TOOLS/Markdown/index.html',
              'Readme Generator': 'https://wahyu9kdl.github.io/ReadME-Generator/index.html',
              'NOTE': 'https://wahyu9kdl.github.io/DASHBOARD/TOOLS/Notepad.html',
              'Quran Digital': 'https://wahyu9kdl.github.io/quran-digital/react-quran/',
              'FUNDING': 'https://wahyu9kdl.github.io/FUNDING.yml',
              'faq' :'https://wahyu9kdl.github.io/faq.html';
              'Bug Reports': 'https://github.com/wahyu9kdl/wahyu9kdl.github.io/issues',
              'Source': 'https://github.com/wahyu9kdl/wahyu9kdl.github.io',
          }
          )
