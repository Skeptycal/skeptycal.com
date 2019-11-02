# project version 0.0.1

[![Netlify Status](https://api.netlify.com/api/v1/badges/416b8ca3-82db-470f-9adf-a6d06264ca75/deploy-status)](https://app.netlify.com/sites/mystifying-keller-ab5658/deploys)

---

## portfolio project for macOS

```bash


###############################################################################
# project : portfolio project for macOS (version 0.0.1)

# author    - Michael Treanor  <skeptycal@gmail.com>
# copyright - 2019 (c) Michael Treanor
# license   - MIT <https://opensource.org/licenses/MIT>
# github    - https://www.github.com/skeptycal

# Usage: project {init|reset|version|help}
###############################################################################


# Pre-commit Sample yaml template
default_language_version:
    python: python3.7
default_stages: [commit, push]
exclude: "^$"
fail_fast: false
# @see http://pre-commit.com/
repos:
    - repo: git://github.com/pre-commit/pre-commit-hooks
      sha: master
      hooks:
          - id: check-yaml
            files: \.(yaml|yml)$
          - id: check-added-large-files
          - id: check-byte-order-marker
          - id: check-docstring-first
          - id: check-case-conflict
          - id: check-json
          - id: check-merge-conflict
          - id: check-symlinks
          #   -   id: detect-aws-credentials
          - id: detect-private-key
          - id: end-of-file-fixer
          - id: flake8
            args: [--max-line-length=79]
          - id: pretty-format-json
          - id: requirements-txt-fixer
          - id: trailing-whitespace
    # Python settings ... replace as needed
    - repo: git://github.com/pre-commit/mirrors-pylint
      sha: master
      hooks:
          - id: pylint


```

---
