# Log Deploy

[Download](https://github.com/wahyu9kdl/wahyu9kdl.github.io/suites/6695385341/logs?attempt=1)

# Set up job

Current runner version: '2.291.1'
- Operating System
   Ubuntu
  20.04.4
  LTS
- Virtual Environment
  Environment: ubuntu-20.04
  Version: 20220515.1
  - Included Software: https://github.com/actions/virtual-environments/blob/ubuntu20/20220515.1/images/linux/Ubuntu2004-Readme.md
  - Image Release: https://github.com/actions/virtual-environments/releases/tag/ubuntu20%2F20220515.1
- Virtual Environment Provisioner
  1.0.0.0-main-20220516-1
- GITHUB_TOKEN Permissions
  Contents: read
  Metadata: read
  Pages: write
- Secret source: Actions
Prepare workflow directory
Prepare all required actions
Getting action download info
- Download action repository 'actions/deploy-pages@v1' 
```
(SHA:eaf36f48c9dc4e0985be499e83eb0696d19916ac)
```


# Deploy to Github Pages

- Run actions/deploy-pages@v1
  with:
   - emit_telemetry: false
   - token: ***
   - timeout: 600000
   - error_count: 10
   - reporting_interval: 5000
- Actor: github-pages[bot]
- Action ID: 2400331251
- Artifact URL: https://pipelines.actions.githubusercontent.com/wbV2TAkFDQa3zKNet79EZvMryiQaSUm9vXwiAmUYAts71ickqL/_apis/pipelines/workflows/2400331251/artifacts?api-version=6.0-preview
```
{"count":1,"value":[{"containerId":9418760,"size":29593600,"signedContent":null,"fileContainerResourceUrl":"https://pipelines.actions.githubusercontent.com/wbV2TAkFDQa3zKNet79EZvMryiQaSUm9vXwiAmUYAts71ickqL/_apis/resources/Containers/9418760","type":"actions_storage","name":"github-pages","url":"https://pipelines.actions.githubusercontent.com/wbV2TAkFDQa3zKNet79EZvMryiQaSUm9vXwiAmUYAts71ickqL/_apis/pipelines/1/runs/568/artifacts?artifactName=github-pages","expiresOn":"2022-05-29T07:27:30.1696127Z","items":null}]}
Creating deployment with payload:
{
	"artifact_url": "https://pipelines.actions.githubusercontent.com/wbV2TAkFDQa3zKNet79EZvMryiQaSUm9vXwiAmUYAts71ickqL/_apis/pipelines/1/runs/568/artifacts?artifactName=github-pages&%24expand=SignedContent",
	"pages_build_version": "5539ec663b37a315360ff3f30dcff7c16c56a8d2",
	"oidc_token": "***"
}
Created deployment for 5539ec663b37a315360ff3f30dcff7c16c56a8d2
{"page_url":"https://wahyu9kdl.github.io/","status_url":"https://api.github.com/repos/wahyu9kdl/wahyu9kdl.github.io/pages/deployment/status/5539ec663b37a315360ff3f30dcff7c16c56a8d2","preview_url":""}
```

Reported success!

# Comolate job

Evaluate and set environment url
Evaluated environment url: https://wahyu9kdl.github.io/
Cleaning up orphan processes
