# project version 0.0.1

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

#   Parameters:
#       init, -i, --init        -- install and initialize
#       reset, -r, --reset      -- reset initial repo files (with backup)
#       version, -v, --version  -- display version information
#       help, -h, --help        -- display usage and information

#   .pre-commit-template.yaml must be in current directory
#       If not, a generic template will be created
#   .pre-commit-bak.yaml will be created (if possible)
#       from .pre-commit-config.yaml as backup
#   .pre-commit-config.yaml will be *overwritten*
#       and updated to current master sha from GitHub
###############################################################################


# Run this script if changes to the pre-commit or yaml configuration are added.

# Please make changes directly to the 'template' file:
#     <.pre\-commit-template.yaml>
# and run the script 'pc' to update the yaml to current versioning.

# Please do not make changes directly to the 'config' file. The 'config' file:
#     <.pre-commit-config.yaml>
#   is created and updated by the 'pc' script automatically in order to maintain
#   the correct, current versioning from git (master sha) so changes to the
#   commit file will be overwritten when updating.
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
# PHP settings ... replace as needed
# - repo: git@github.com:hootsuite/pre-commit-php.git
#   sha: 1.1.0
#   hooks:
#   - id: php-lint-all
#   - id: php-unit
#   - id: php-cs
#     files: \.(php)$
#     args: [--standard=PSR1 -p]
#   - id: php-cbf
#     files: \.(php)$
#     args: [--standard=PSR1 -p]
# The tool will fail a build when it has made changes to the staged files. This allows a developer to do a git diff and examine the changes that it has made. Remember that you may omit this if needed with a SKIP=php-cs-fixer git commit.
#   - id: php-cs-fixer
#     files: \.(php)$
#     args: [--level=PSR2]

```


---

```bash

.
├── 404.shtml
├── LICENSE
├── Pipfile
├── Pipfile.lock
├── README.md
├── bak
│   ├── README.bak.md
│   └── codecov.yml.bak
├── codecov.yml
├── composer.json
├── composer.lock
├── css
│   └── index.css
├── images
│   ├── 629319main_PIA13959_full.jpg
│   ├── GitHub-Mark-120px-plus.png
│   ├── GitHub-Mark-Light-120px-plus.png
│   ├── In-2C-54px-R.png
│   ├── facebook.jpg
│   ├── flickr-logo-png-2.png
│   ├── flickr-logo.png
│   ├── instagram.jpg
│   ├── orion_rainbow.jpg
│   ├── phone.jpg
│   └── twitter.jpg
├── index.php
├── js
│   ├── hotjar.js
│   └── index.js
├── node_modules
│   ├── @babel
│   │   ├── code-frame
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── lib
│   │   │   │   └── index.js
│   │   │   └── package.json
│   │   └── highlight
│   │       ├── LICENSE
│   │       ├── README.md
│   │       ├── lib
│   │       │   └── index.js
│   │       └── package.json
│   ├── acorn
│   │   ├── CHANGELOG.md
│   │   ├── LICENSE
│   │   ├── README.md
│   │   ├── bin
│   │   │   └── acorn
│   │   ├── dist
│   │   │   ├── acorn.d.ts
│   │   │   ├── acorn.js
│   │   │   ├── acorn.js.map
│   │   │   ├── acorn.mjs
│   │   │   ├── acorn.mjs.map
│   │   │   └── bin.js
│   │   └── package.json
│   ├── acorn-jsx
│   │   ├── LICENSE
│   │   ├── README.md
│   │   ├── index.js
│   │   ├── package.json
│   │   └── xhtml.js
│   ├── ajv
│   │   ├── LICENSE
│   │   ├── README.md
│   │   ├── dist
│   │   │   ├── ajv.bundle.js
│   │   │   ├── ajv.min.js
│   │   │   └── ajv.min.js.map
│   │   ├── lib
│   │   │   ├── ajv.d.ts
│   │   │   ├── ajv.js
│   │   │   ├── cache.js
│   │   │   ├── compile
│   │   │   │   ├── async.js
│   │   │   │   ├── equal.js
│   │   │   │   ├── error_classes.js
│   │   │   │   ├── formats.js
│   │   │   │   ├── index.js
│   │   │   │   ├── resolve.js
│   │   │   │   ├── rules.js
│   │   │   │   ├── schema_obj.js
│   │   │   │   ├── ucs2length.js
│   │   │   │   └── util.js
│   │   │   ├── data.js
│   │   │   ├── dot
│   │   │   │   ├── _limit.jst
│   │   │   │   ├── _limitItems.jst
│   │   │   │   ├── _limitLength.jst
│   │   │   │   ├── _limitProperties.jst
│   │   │   │   ├── allOf.jst
│   │   │   │   ├── anyOf.jst
│   │   │   │   ├── coerce.def
│   │   │   │   ├── comment.jst
│   │   │   │   ├── const.jst
│   │   │   │   ├── contains.jst
│   │   │   │   ├── custom.jst
│   │   │   │   ├── defaults.def
│   │   │   │   ├── definitions.def
│   │   │   │   ├── dependencies.jst
│   │   │   │   ├── enum.jst
│   │   │   │   ├── errors.def
│   │   │   │   ├── format.jst
│   │   │   │   ├── if.jst
│   │   │   │   ├── items.jst
│   │   │   │   ├── missing.def
│   │   │   │   ├── multipleOf.jst
│   │   │   │   ├── not.jst
│   │   │   │   ├── oneOf.jst
│   │   │   │   ├── pattern.jst
│   │   │   │   ├── properties.jst
│   │   │   │   ├── propertyNames.jst
│   │   │   │   ├── ref.jst
│   │   │   │   ├── required.jst
│   │   │   │   ├── uniqueItems.jst
│   │   │   │   └── validate.jst
│   │   │   ├── dotjs
│   │   │   │   ├── README.md
│   │   │   │   ├── _limit.js
│   │   │   │   ├── _limitItems.js
│   │   │   │   ├── _limitLength.js
│   │   │   │   ├── _limitProperties.js
│   │   │   │   ├── allOf.js
│   │   │   │   ├── anyOf.js
│   │   │   │   ├── comment.js
│   │   │   │   ├── const.js
│   │   │   │   ├── contains.js
│   │   │   │   ├── custom.js
│   │   │   │   ├── dependencies.js
│   │   │   │   ├── enum.js
│   │   │   │   ├── format.js
│   │   │   │   ├── if.js
│   │   │   │   ├── index.js
│   │   │   │   ├── items.js
│   │   │   │   ├── multipleOf.js
│   │   │   │   ├── not.js
│   │   │   │   ├── oneOf.js
│   │   │   │   ├── pattern.js
│   │   │   │   ├── properties.js
│   │   │   │   ├── propertyNames.js
│   │   │   │   ├── ref.js
│   │   │   │   ├── required.js
│   │   │   │   ├── uniqueItems.js
│   │   │   │   └── validate.js
│   │   │   ├── keyword.js
│   │   │   └── refs
│   │   │       ├── data.json
│   │   │       ├── json-schema-draft-04.json
│   │   │       ├── json-schema-draft-06.json
│   │   │       └── json-schema-draft-07.json
│   │   ├── package.json
│   │   └── scripts
│   │       ├── bundle.js
│   │       ├── compile-dots.js
│   │       ├── info
│   │       ├── prepare-tests
│   │       ├── publish-built-version
│   │       └── travis-gh-pages
│   ├── ansi-escapes
│   │   ├── index.js
│   │   ├── license
│   │   ├── package.json
│   │   └── readme.md
│   ├── ansi-regex
│   │   ├── index.js
│   │   ├── license
│   │   ├── package.json
│   │   └── readme.md
│   ├── ansi-styles
│   │   ├── index.js
│   │   ├── license
│   │   ├── package.json
│   │   └── readme.md
│   ├── argparse
│   │   ├── CHANGELOG.md
│   │   ├── LICENSE
│   │   ├── README.md
│   │   ├── index.js
│   │   ├── lib
│   │   │   ├── action
│   │   │   │   ├── append
│   │   │   │   │   └── constant.js
│   │   │   │   ├── append.js
│   │   │   │   ├── count.js
│   │   │   │   ├── help.js
│   │   │   │   ├── store
│   │   │   │   │   ├── constant.js
│   │   │   │   │   ├── false.js
│   │   │   │   │   └── true.js
│   │   │   │   ├── store.js
│   │   │   │   ├── subparsers.js
│   │   │   │   └── version.js
│   │   │   ├── action.js
│   │   │   ├── action_container.js
│   │   │   ├── argparse.js
│   │   │   ├── argument
│   │   │   │   ├── error.js
│   │   │   │   ├── exclusive.js
│   │   │   │   └── group.js
│   │   │   ├── argument_parser.js
│   │   │   ├── const.js
│   │   │   ├── help
│   │   │   │   ├── added_formatters.js
│   │   │   │   └── formatter.js
│   │   │   ├── namespace.js
│   │   │   └── utils.js
│   │   └── package.json
│   ├── astral-regex
│   │   ├── index.js
│   │   ├── license
│   │   ├── package.json
│   │   └── readme.md
│   ├── balanced-match
│   │   ├── LICENSE.md
│   │   ├── README.md
│   │   ├── index.js
│   │   └── package.json
│   ├── brace-expansion
│   │   ├── LICENSE
│   │   ├── README.md
│   │   ├── index.js
│   │   └── package.json
│   ├── callsites
│   │   ├── index.d.ts
│   │   ├── index.js
│   │   ├── license
│   │   ├── package.json
│   │   └── readme.md
│   ├── chalk
│   │   ├── index.js
│   │   ├── index.js.flow
│   │   ├── license
│   │   ├── package.json
│   │   ├── readme.md
│   │   ├── templates.js
│   │   └── types
│   │       └── index.d.ts
│   ├── chardet
│   │   ├── LICENSE
│   │   ├── README.md
│   │   ├── encoding
│   │   │   ├── iso2022.js
│   │   │   ├── mbcs.js
│   │   │   ├── sbcs.js
│   │   │   ├── unicode.js
│   │   │   └── utf8.js
│   │   ├── index.js
│   │   ├── match.js
│   │   └── package.json
│   ├── circular-json
│   │   ├── LICENSE.txt
│   │   ├── README.md
│   │   ├── build
│   │   │   ├── circular-json.js
│   │   │   ├── circular-json.max.js
│   │   │   └── circular-json.node.js
│   │   ├── package.json
│   │   └── template
│   │       ├── license.after
│   │       └── license.before
│   ├── cli-cursor
│   │   ├── index.js
│   │   ├── license
│   │   ├── package.json
│   │   └── readme.md
│   ├── cli-width
│   │   ├── CHANGELOG.md
│   │   ├── LICENSE
│   │   ├── README.md
│   │   ├── index.js
│   │   └── package.json
│   ├── color-convert
│   │   ├── CHANGELOG.md
│   │   ├── LICENSE
│   │   ├── README.md
│   │   ├── conversions.js
│   │   ├── index.js
│   │   ├── package.json
│   │   └── route.js
│   ├── color-name
│   │   ├── LICENSE
│   │   ├── README.md
│   │   ├── index.js
│   │   ├── package.json
│   │   └── test.js
│   ├── concat-map
│   │   ├── LICENSE
│   │   ├── README.markdown
│   │   ├── example
│   │   │   └── map.js
│   │   ├── index.js
│   │   ├── package.json
│   │   └── test
│   │       └── map.js
│   ├── cross-spawn
│   │   ├── CHANGELOG.md
│   │   ├── LICENSE
│   │   ├── README.md
│   │   ├── index.js
│   │   ├── lib
│   │   │   ├── enoent.js
│   │   │   ├── parse.js
│   │   │   └── util
│   │   │       ├── escape.js
│   │   │       ├── readShebang.js
│   │   │       └── resolveCommand.js
│   │   └── package.json
│   ├── debug
│   │   ├── CHANGELOG.md
│   │   ├── LICENSE
│   │   ├── README.md
│   │   ├── dist
│   │   │   └── debug.js
│   │   ├── package.json
│   │   └── src
│   │       ├── browser.js
│   │       ├── common.js
│   │       ├── index.js
│   │       └── node.js
│   ├── deep-is
│   │   ├── LICENSE
│   │   ├── README.markdown
│   │   ├── example
│   │   │   └── cmp.js
│   │   ├── index.js
│   │   ├── package.json
│   │   └── test
│   │       ├── NaN.js
│   │       ├── cmp.js
│   │       └── neg-vs-pos-0.js
│   ├── doctrine
│   │   ├── CHANGELOG.md
│   │   ├── LICENSE
│   │   ├── LICENSE.closure-compiler
│   │   ├── LICENSE.esprima
│   │   ├── README.md
│   │   ├── lib
│   │   │   ├── doctrine.js
│   │   │   ├── typed.js
│   │   │   └── utility.js
│   │   └── package.json
│   ├── escape-string-regexp
│   │   ├── index.js
│   │   ├── license
│   │   ├── package.json
│   │   └── readme.md
│   ├── eslint
│   │   ├── CHANGELOG.md
│   │   ├── LICENSE
│   │   ├── README.md
│   │   ├── bin
│   │   │   └── eslint.js
│   │   ├── conf
│   │   │   ├── category-list.json
│   │   │   ├── config-schema.js
│   │   │   ├── default-cli-options.js
│   │   │   ├── environments.js
│   │   │   ├── eslint-all.js
│   │   │   ├── eslint-recommended.js
│   │   │   └── replacements.json
│   │   ├── lib
│   │   │   ├── api.js
│   │   │   ├── cli-engine.js
│   │   │   ├── cli.js
│   │   │   ├── code-path-analysis
│   │   │   │   ├── code-path-analyzer.js
│   │   │   │   ├── code-path-segment.js
│   │   │   │   ├── code-path-state.js
│   │   │   │   ├── code-path.js
│   │   │   │   ├── debug-helpers.js
│   │   │   │   ├── fork-context.js
│   │   │   │   └── id-generator.js
│   │   │   ├── config
│   │   │   │   ├── autoconfig.js
│   │   │   │   ├── config-cache.js
│   │   │   │   ├── config-file.js
│   │   │   │   ├── config-initializer.js
│   │   │   │   ├── config-ops.js
│   │   │   │   ├── config-rule.js
│   │   │   │   ├── config-validator.js
│   │   │   │   ├── environments.js
│   │   │   │   └── plugins.js
│   │   │   ├── config.js
│   │   │   ├── formatters
│   │   │   │   ├── checkstyle.js
│   │   │   │   ├── codeframe.js
│   │   │   │   ├── compact.js
│   │   │   │   ├── html-template-message.html
│   │   │   │   ├── html-template-page.html
│   │   │   │   ├── html-template-result.html
│   │   │   │   ├── html.js
│   │   │   │   ├── jslint-xml.js
│   │   │   │   ├── json.js
│   │   │   │   ├── junit.js
│   │   │   │   ├── stylish.js
│   │   │   │   ├── table.js
│   │   │   │   ├── tap.js
│   │   │   │   ├── unix.js
│   │   │   │   └── visualstudio.js
│   │   │   ├── linter.js
│   │   │   ├── load-rules.js
│   │   │   ├── options.js
│   │   │   ├── rules
│   │   │   │   ├── accessor-pairs.js
│   │   │   │   ├── array-bracket-newline.js
│   │   │   │   ├── array-bracket-spacing.js
│   │   │   │   ├── array-callback-return.js
│   │   │   │   ├── array-element-newline.js
│   │   │   │   ├── arrow-body-style.js
│   │   │   │   ├── arrow-parens.js
│   │   │   │   ├── arrow-spacing.js
│   │   │   │   ├── block-scoped-var.js
│   │   │   │   ├── block-spacing.js
│   │   │   │   ├── brace-style.js
│   │   │   │   ├── callback-return.js
│   │   │   │   ├── camelcase.js
│   │   │   │   ├── capitalized-comments.js
│   │   │   │   ├── class-methods-use-this.js
│   │   │   │   ├── comma-dangle.js
│   │   │   │   ├── comma-spacing.js
│   │   │   │   ├── comma-style.js
│   │   │   │   ├── complexity.js
│   │   │   │   ├── computed-property-spacing.js
│   │   │   │   ├── consistent-return.js
│   │   │   │   ├── consistent-this.js
│   │   │   │   ├── constructor-super.js
│   │   │   │   ├── curly.js
│   │   │   │   ├── default-case.js
│   │   │   │   ├── dot-location.js
│   │   │   │   ├── dot-notation.js
│   │   │   │   ├── eol-last.js
│   │   │   │   ├── eqeqeq.js
│   │   │   │   ├── for-direction.js
│   │   │   │   ├── func-call-spacing.js
│   │   │   │   ├── func-name-matching.js
│   │   │   │   ├── func-names.js
│   │   │   │   ├── func-style.js
│   │   │   │   ├── function-paren-newline.js
│   │   │   │   ├── generator-star-spacing.js
│   │   │   │   ├── getter-return.js
│   │   │   │   ├── global-require.js
│   │   │   │   ├── guard-for-in.js
│   │   │   │   ├── handle-callback-err.js
│   │   │   │   ├── id-blacklist.js
│   │   │   │   ├── id-length.js
│   │   │   │   ├── id-match.js
│   │   │   │   ├── implicit-arrow-linebreak.js
│   │   │   │   ├── indent-legacy.js
│   │   │   │   ├── indent.js
│   │   │   │   ├── init-declarations.js
│   │   │   │   ├── jsx-quotes.js
│   │   │   │   ├── key-spacing.js
│   │   │   │   ├── keyword-spacing.js
│   │   │   │   ├── line-comment-position.js
│   │   │   │   ├── linebreak-style.js
│   │   │   │   ├── lines-around-comment.js
│   │   │   │   ├── lines-around-directive.js
│   │   │   │   ├── lines-between-class-members.js
│   │   │   │   ├── max-classes-per-file.js
│   │   │   │   ├── max-depth.js
│   │   │   │   ├── max-len.js
│   │   │   │   ├── max-lines-per-function.js
│   │   │   │   ├── max-lines.js
│   │   │   │   ├── max-nested-callbacks.js
│   │   │   │   ├── max-params.js
│   │   │   │   ├── max-statements-per-line.js
│   │   │   │   ├── max-statements.js
│   │   │   │   ├── multiline-comment-style.js
│   │   │   │   ├── multiline-ternary.js
│   │   │   │   ├── new-cap.js
│   │   │   │   ├── new-parens.js
│   │   │   │   ├── newline-after-var.js
│   │   │   │   ├── newline-before-return.js
│   │   │   │   ├── newline-per-chained-call.js
│   │   │   │   ├── no-alert.js
│   │   │   │   ├── no-array-constructor.js
│   │   │   │   ├── no-async-promise-executor.js
│   │   │   │   ├── no-await-in-loop.js
│   │   │   │   ├── no-bitwise.js
│   │   │   │   ├── no-buffer-constructor.js
│   │   │   │   ├── no-caller.js
│   │   │   │   ├── no-case-declarations.js
│   │   │   │   ├── no-catch-shadow.js
│   │   │   │   ├── no-class-assign.js
│   │   │   │   ├── no-compare-neg-zero.js
│   │   │   │   ├── no-cond-assign.js
│   │   │   │   ├── no-confusing-arrow.js
│   │   │   │   ├── no-console.js
│   │   │   │   ├── no-const-assign.js
│   │   │   │   ├── no-constant-condition.js
│   │   │   │   ├── no-continue.js
│   │   │   │   ├── no-control-regex.js
│   │   │   │   ├── no-debugger.js
│   │   │   │   ├── no-delete-var.js
│   │   │   │   ├── no-div-regex.js
│   │   │   │   ├── no-dupe-args.js
│   │   │   │   ├── no-dupe-class-members.js
│   │   │   │   ├── no-dupe-keys.js
│   │   │   │   ├── no-duplicate-case.js
│   │   │   │   ├── no-duplicate-imports.js
│   │   │   │   ├── no-else-return.js
│   │   │   │   ├── no-empty-character-class.js
│   │   │   │   ├── no-empty-function.js
│   │   │   │   ├── no-empty-pattern.js
│   │   │   │   ├── no-empty.js
│   │   │   │   ├── no-eq-null.js
│   │   │   │   ├── no-eval.js
│   │   │   │   ├── no-ex-assign.js
│   │   │   │   ├── no-extend-native.js
│   │   │   │   ├── no-extra-bind.js
│   │   │   │   ├── no-extra-boolean-cast.js
│   │   │   │   ├── no-extra-label.js
│   │   │   │   ├── no-extra-parens.js
│   │   │   │   ├── no-extra-semi.js
│   │   │   │   ├── no-fallthrough.js
│   │   │   │   ├── no-floating-decimal.js
│   │   │   │   ├── no-func-assign.js
│   │   │   │   ├── no-global-assign.js
│   │   │   │   ├── no-implicit-coercion.js
│   │   │   │   ├── no-implicit-globals.js
│   │   │   │   ├── no-implied-eval.js
│   │   │   │   ├── no-inline-comments.js
│   │   │   │   ├── no-inner-declarations.js
│   │   │   │   ├── no-invalid-regexp.js
│   │   │   │   ├── no-invalid-this.js
│   │   │   │   ├── no-irregular-whitespace.js
│   │   │   │   ├── no-iterator.js
│   │   │   │   ├── no-label-var.js
│   │   │   │   ├── no-labels.js
│   │   │   │   ├── no-lone-blocks.js
│   │   │   │   ├── no-lonely-if.js
│   │   │   │   ├── no-loop-func.js
│   │   │   │   ├── no-magic-numbers.js
│   │   │   │   ├── no-misleading-character-class.js
│   │   │   │   ├── no-mixed-operators.js
│   │   │   │   ├── no-mixed-requires.js
│   │   │   │   ├── no-mixed-spaces-and-tabs.js
│   │   │   │   ├── no-multi-assign.js
│   │   │   │   ├── no-multi-spaces.js
│   │   │   │   ├── no-multi-str.js
│   │   │   │   ├── no-multiple-empty-lines.js
│   │   │   │   ├── no-native-reassign.js
│   │   │   │   ├── no-negated-condition.js
│   │   │   │   ├── no-negated-in-lhs.js
│   │   │   │   ├── no-nested-ternary.js
│   │   │   │   ├── no-new-func.js
│   │   │   │   ├── no-new-object.js
│   │   │   │   ├── no-new-require.js
│   │   │   │   ├── no-new-symbol.js
│   │   │   │   ├── no-new-wrappers.js
│   │   │   │   ├── no-new.js
│   │   │   │   ├── no-obj-calls.js
│   │   │   │   ├── no-octal-escape.js
│   │   │   │   ├── no-octal.js
│   │   │   │   ├── no-param-reassign.js
│   │   │   │   ├── no-path-concat.js
│   │   │   │   ├── no-plusplus.js
│   │   │   │   ├── no-process-env.js
│   │   │   │   ├── no-process-exit.js
│   │   │   │   ├── no-proto.js
│   │   │   │   ├── no-prototype-builtins.js
│   │   │   │   ├── no-redeclare.js
│   │   │   │   ├── no-regex-spaces.js
│   │   │   │   ├── no-restricted-globals.js
│   │   │   │   ├── no-restricted-imports.js
│   │   │   │   ├── no-restricted-modules.js
│   │   │   │   ├── no-restricted-properties.js
│   │   │   │   ├── no-restricted-syntax.js
│   │   │   │   ├── no-return-assign.js
│   │   │   │   ├── no-return-await.js
│   │   │   │   ├── no-script-url.js
│   │   │   │   ├── no-self-assign.js
│   │   │   │   ├── no-self-compare.js
│   │   │   │   ├── no-sequences.js
│   │   │   │   ├── no-shadow-restricted-names.js
│   │   │   │   ├── no-shadow.js
│   │   │   │   ├── no-spaced-func.js
│   │   │   │   ├── no-sparse-arrays.js
│   │   │   │   ├── no-sync.js
│   │   │   │   ├── no-tabs.js
│   │   │   │   ├── no-template-curly-in-string.js
│   │   │   │   ├── no-ternary.js
│   │   │   │   ├── no-this-before-super.js
│   │   │   │   ├── no-throw-literal.js
│   │   │   │   ├── no-trailing-spaces.js
│   │   │   │   ├── no-undef-init.js
│   │   │   │   ├── no-undef.js
│   │   │   │   ├── no-undefined.js
│   │   │   │   ├── no-underscore-dangle.js
│   │   │   │   ├── no-unexpected-multiline.js
│   │   │   │   ├── no-unmodified-loop-condition.js
│   │   │   │   ├── no-unneeded-ternary.js
│   │   │   │   ├── no-unreachable.js
│   │   │   │   ├── no-unsafe-finally.js
│   │   │   │   ├── no-unsafe-negation.js
│   │   │   │   ├── no-unused-expressions.js
│   │   │   │   ├── no-unused-labels.js
│   │   │   │   ├── no-unused-vars.js
│   │   │   │   ├── no-use-before-define.js
│   │   │   │   ├── no-useless-call.js
│   │   │   │   ├── no-useless-catch.js
│   │   │   │   ├── no-useless-computed-key.js
│   │   │   │   ├── no-useless-concat.js
│   │   │   │   ├── no-useless-constructor.js
│   │   │   │   ├── no-useless-escape.js
│   │   │   │   ├── no-useless-rename.js
│   │   │   │   ├── no-useless-return.js
│   │   │   │   ├── no-var.js
│   │   │   │   ├── no-void.js
│   │   │   │   ├── no-warning-comments.js
│   │   │   │   ├── no-whitespace-before-property.js
│   │   │   │   ├── no-with.js
│   │   │   │   ├── nonblock-statement-body-position.js
│   │   │   │   ├── object-curly-newline.js
│   │   │   │   ├── object-curly-spacing.js
│   │   │   │   ├── object-property-newline.js
│   │   │   │   ├── object-shorthand.js
│   │   │   │   ├── one-var-declaration-per-line.js
│   │   │   │   ├── one-var.js
│   │   │   │   ├── operator-assignment.js
│   │   │   │   ├── operator-linebreak.js
│   │   │   │   ├── padded-blocks.js
│   │   │   │   ├── padding-line-between-statements.js
│   │   │   │   ├── prefer-arrow-callback.js
│   │   │   │   ├── prefer-const.js
│   │   │   │   ├── prefer-destructuring.js
│   │   │   │   ├── prefer-numeric-literals.js
│   │   │   │   ├── prefer-object-spread.js
│   │   │   │   ├── prefer-promise-reject-errors.js
│   │   │   │   ├── prefer-reflect.js
│   │   │   │   ├── prefer-rest-params.js
│   │   │   │   ├── prefer-spread.js
│   │   │   │   ├── prefer-template.js
│   │   │   │   ├── quote-props.js
│   │   │   │   ├── quotes.js
│   │   │   │   ├── radix.js
│   │   │   │   ├── require-atomic-updates.js
│   │   │   │   ├── require-await.js
│   │   │   │   ├── require-jsdoc.js
│   │   │   │   ├── require-unicode-regexp.js
│   │   │   │   ├── require-yield.js
│   │   │   │   ├── rest-spread-spacing.js
│   │   │   │   ├── semi-spacing.js
│   │   │   │   ├── semi-style.js
│   │   │   │   ├── semi.js
│   │   │   │   ├── sort-imports.js
│   │   │   │   ├── sort-keys.js
│   │   │   │   ├── sort-vars.js
│   │   │   │   ├── space-before-blocks.js
│   │   │   │   ├── space-before-function-paren.js
│   │   │   │   ├── space-in-parens.js
│   │   │   │   ├── space-infix-ops.js
│   │   │   │   ├── space-unary-ops.js
│   │   │   │   ├── spaced-comment.js
│   │   │   │   ├── strict.js
│   │   │   │   ├── switch-colon-spacing.js
│   │   │   │   ├── symbol-description.js
│   │   │   │   ├── template-curly-spacing.js
│   │   │   │   ├── template-tag-spacing.js
│   │   │   │   ├── unicode-bom.js
│   │   │   │   ├── use-isnan.js
│   │   │   │   ├── valid-jsdoc.js
│   │   │   │   ├── valid-typeof.js
│   │   │   │   ├── vars-on-top.js
│   │   │   │   ├── wrap-iife.js
│   │   │   │   ├── wrap-regex.js
│   │   │   │   ├── yield-star-spacing.js
│   │   │   │   └── yoda.js
│   │   │   ├── rules.js
│   │   │   ├── testers
│   │   │   │   └── rule-tester.js
│   │   │   ├── token-store
│   │   │   │   ├── backward-token-comment-cursor.js
│   │   │   │   ├── backward-token-cursor.js
│   │   │   │   ├── cursor.js
│   │   │   │   ├── cursors.js
│   │   │   │   ├── decorative-cursor.js
│   │   │   │   ├── filter-cursor.js
│   │   │   │   ├── forward-token-comment-cursor.js
│   │   │   │   ├── forward-token-cursor.js
│   │   │   │   ├── index.js
│   │   │   │   ├── limit-cursor.js
│   │   │   │   ├── padded-token-cursor.js
│   │   │   │   ├── skip-cursor.js
│   │   │   │   └── utils.js
│   │   │   └── util
│   │   │       ├── ajv.js
│   │   │       ├── apply-disable-directives.js
│   │   │       ├── ast-utils.js
│   │   │       ├── config-comment-parser.js
│   │   │       ├── file-finder.js
│   │   │       ├── fix-tracker.js
│   │   │       ├── glob-utils.js
│   │   │       ├── glob.js
│   │   │       ├── hash.js
│   │   │       ├── ignored-paths.js
│   │   │       ├── interpolate.js
│   │   │       ├── keywords.js
│   │   │       ├── lint-result-cache.js
│   │   │       ├── logging.js
│   │   │       ├── module-resolver.js
│   │   │       ├── naming.js
│   │   │       ├── node-event-generator.js
│   │   │       ├── npm-utils.js
│   │   │       ├── path-utils.js
│   │   │       ├── patterns
│   │   │       │   └── letters.js
│   │   │       ├── report-translator.js
│   │   │       ├── rule-fixer.js
│   │   │       ├── safe-emitter.js
│   │   │       ├── source-code-fixer.js
│   │   │       ├── source-code-utils.js
│   │   │       ├── source-code.js
│   │   │       ├── timing.js
│   │   │       ├── traverser.js
│   │   │       ├── unicode
│   │   │       │   ├── index.js
│   │   │       │   ├── is-combining-character.js
│   │   │       │   ├── is-emoji-modifier.js
│   │   │       │   ├── is-regional-indicator-symbol.js
│   │   │       │   └── is-surrogate-pair.js
│   │   │       └── xml-escape.js
│   │   ├── messages
│   │   │   ├── all-files-ignored.txt
│   │   │   ├── extend-config-missing.txt
│   │   │   ├── failed-to-read-json.txt
│   │   │   ├── file-not-found.txt
│   │   │   ├── no-config-found.txt
│   │   │   ├── plugin-missing.txt
│   │   │   └── whitespace-found.txt
│   │   └── package.json
│   ├── eslint-config-google
│   │   ├── LICENSE
│   │   ├── README.md
│   │   ├── index.js
│   │   └── package.json
│   ├── eslint-scope
│   │   ├── CHANGELOG.md
│   │   ├── LICENSE
│   │   ├── README.md
│   │   ├── lib
│   │   │   ├── definition.js
│   │   │   ├── index.js
│   │   │   ├── pattern-visitor.js
│   │   │   ├── reference.js
│   │   │   ├── referencer.js
│   │   │   ├── scope-manager.js
│   │   │   ├── scope.js
│   │   │   └── variable.js
│   │   └── package.json
│   ├── eslint-utils
│   │   ├── LICENSE
│   │   ├── README.md
│   │   ├── index.js
│   │   ├── index.js.map
│   │   ├── index.mjs
│   │   ├── index.mjs.map
│   │   └── package.json
│   ├── eslint-visitor-keys
│   │   ├── CHANGELOG.md
│   │   ├── LICENSE
│   │   ├── README.md
│   │   ├── lib
│   │   │   ├── index.js
│   │   │   └── visitor-keys.json
│   │   └── package.json
│   ├── espree
│   │   ├── CHANGELOG.md
│   │   ├── LICENSE
│   │   ├── README.md
│   │   ├── espree.js
│   │   ├── lib
│   │   │   ├── ast-node-types.js
│   │   │   ├── espree.js
│   │   │   ├── features.js
│   │   │   ├── token-translator.js
│   │   │   └── visitor-keys.js
│   │   └── package.json
│   ├── esprima
│   │   ├── ChangeLog
│   │   ├── LICENSE.BSD
│   │   ├── README.md
│   │   ├── bin
│   │   │   ├── esparse.js
│   │   │   └── esvalidate.js
│   │   ├── dist
│   │   │   └── esprima.js
│   │   └── package.json
│   ├── esquery
│   │   ├── README.md
│   │   ├── esquery.js
│   │   ├── license.txt
│   │   ├── package.json
│   │   └── parser.js
│   ├── esrecurse
│   │   ├── README.md
│   │   ├── esrecurse.js
│   │   ├── gulpfile.babel.js
│   │   └── package.json
│   ├── estraverse
│   │   ├── LICENSE.BSD
│   │   ├── estraverse.js
│   │   ├── gulpfile.js
│   │   └── package.json
│   ├── esutils
│   │   ├── LICENSE.BSD
│   │   ├── README.md
│   │   ├── lib
│   │   │   ├── ast.js
│   │   │   ├── code.js
│   │   │   ├── keyword.js
│   │   │   └── utils.js
│   │   └── package.json
│   ├── external-editor
│   │   ├── LICENSE
│   │   ├── README.md
│   │   ├── example_async.js
│   │   ├── example_sync.js
│   │   ├── main
│   │   │   ├── errors
│   │   │   │   ├── CreateFileError.d.ts
│   │   │   │   ├── CreateFileError.js
│   │   │   │   ├── LaunchEditorError.d.ts
│   │   │   │   ├── LaunchEditorError.js
│   │   │   │   ├── ReadFileError.d.ts
│   │   │   │   ├── ReadFileError.js
│   │   │   │   ├── RemoveFileError.d.ts
│   │   │   │   └── RemoveFileError.js
│   │   │   ├── index.d.ts
│   │   │   └── index.js
│   │   └── package.json
│   ├── fast-deep-equal
│   │   ├── LICENSE
│   │   ├── README.md
│   │   ├── index.d.ts
│   │   ├── index.js
│   │   └── package.json
│   ├── fast-json-stable-stringify
│   │   ├── LICENSE
│   │   ├── README.md
│   │   ├── benchmark
│   │   │   ├── index.js
│   │   │   └── test.json
│   │   ├── example
│   │   │   ├── key_cmp.js
│   │   │   ├── nested.js
│   │   │   ├── str.js
│   │   │   └── value_cmp.js
│   │   ├── index.js
│   │   ├── package.json
│   │   └── test
│   │       ├── cmp.js
│   │       ├── nested.js
│   │       ├── str.js
│   │       └── to-json.js
│   ├── fast-levenshtein
│   │   ├── LICENSE.md
│   │   ├── README.md
│   │   ├── levenshtein.js
│   │   └── package.json
│   ├── figures
│   │   ├── index.js
│   │   ├── license
│   │   ├── package.json
│   │   └── readme.md
│   ├── file-entry-cache
│   │   ├── LICENSE
│   │   ├── README.md
│   │   ├── cache.js
│   │   ├── changelog.md
│   │   └── package.json
│   ├── flat-cache
│   │   ├── LICENSE
│   │   ├── README.md
│   │   ├── cache.js
│   │   ├── changelog.md
│   │   ├── del.js
│   │   ├── package.json
│   │   └── utils.js
│   ├── fs.realpath
│   │   ├── LICENSE
│   │   ├── README.md
│   │   ├── index.js
│   │   ├── old.js
│   │   └── package.json
│   ├── functional-red-black-tree
│   │   ├── LICENSE
│   │   ├── README.md
│   │   ├── bench
│   │   │   └── test.js
│   │   ├── package.json
│   │   ├── rbtree.js
│   │   └── test
│   │       └── test.js
│   ├── glob
│   │   ├── LICENSE
│   │   ├── README.md
│   │   ├── changelog.md
│   │   ├── common.js
│   │   ├── glob.js
│   │   ├── package.json
│   │   └── sync.js
│   ├── globals
│   │   ├── globals.json
│   │   ├── index.js
│   │   ├── license
│   │   ├── package.json
│   │   └── readme.md
│   ├── graceful-fs
│   │   ├── LICENSE
│   │   ├── README.md
│   │   ├── clone.js
│   │   ├── graceful-fs.js
│   │   ├── legacy-streams.js
│   │   ├── package.json
│   │   └── polyfills.js
│   ├── has-flag
│   │   ├── index.js
│   │   ├── license
│   │   ├── package.json
│   │   └── readme.md
│   ├── iconv-lite
│   │   ├── Changelog.md
│   │   ├── LICENSE
│   │   ├── README.md
│   │   ├── encodings
│   │   │   ├── dbcs-codec.js
│   │   │   ├── dbcs-data.js
│   │   │   ├── index.js
│   │   │   ├── internal.js
│   │   │   ├── sbcs-codec.js
│   │   │   ├── sbcs-data-generated.js
│   │   │   ├── sbcs-data.js
│   │   │   ├── tables
│   │   │   │   ├── big5-added.json
│   │   │   │   ├── cp936.json
│   │   │   │   ├── cp949.json
│   │   │   │   ├── cp950.json
│   │   │   │   ├── eucjp.json
│   │   │   │   ├── gb18030-ranges.json
│   │   │   │   ├── gbk-added.json
│   │   │   │   └── shiftjis.json
│   │   │   ├── utf16.js
│   │   │   └── utf7.js
│   │   ├── lib
│   │   │   ├── bom-handling.js
│   │   │   ├── extend-node.js
│   │   │   ├── index.d.ts
│   │   │   ├── index.js
│   │   │   └── streams.js
│   │   └── package.json
│   ├── ignore
│   │   ├── CHANGELOG.md
│   │   ├── LICENSE-MIT
│   │   ├── README.md
│   │   ├── index.d.ts
│   │   ├── index.js
│   │   ├── legacy.js
│   │   └── package.json
│   ├── import-fresh
│   │   ├── index.js
│   │   ├── license
│   │   ├── package.json
│   │   └── readme.md
│   ├── imurmurhash
│   │   ├── README.md
│   │   ├── imurmurhash.js
│   │   ├── imurmurhash.min.js
│   │   └── package.json
│   ├── inflight
│   │   ├── LICENSE
│   │   ├── README.md
│   │   ├── inflight.js
│   │   └── package.json
│   ├── inherits
│   │   ├── LICENSE
│   │   ├── README.md
│   │   ├── inherits.js
│   │   ├── inherits_browser.js
│   │   └── package.json
│   ├── inquirer
│   │   ├── README.md
│   │   ├── lib
│   │   │   ├── inquirer.js
│   │   │   ├── objects
│   │   │   │   ├── choice.js
│   │   │   │   ├── choices.js
│   │   │   │   └── separator.js
│   │   │   ├── prompts
│   │   │   │   ├── base.js
│   │   │   │   ├── checkbox.js
│   │   │   │   ├── confirm.js
│   │   │   │   ├── editor.js
│   │   │   │   ├── expand.js
│   │   │   │   ├── input.js
│   │   │   │   ├── list.js
│   │   │   │   ├── number.js
│   │   │   │   ├── password.js
│   │   │   │   └── rawlist.js
│   │   │   ├── ui
│   │   │   │   ├── baseUI.js
│   │   │   │   ├── bottom-bar.js
│   │   │   │   └── prompt.js
│   │   │   └── utils
│   │   │       ├── events.js
│   │   │       ├── paginator.js
│   │   │       ├── readline.js
│   │   │       ├── screen-manager.js
│   │   │       └── utils.js
│   │   ├── node_modules
│   │   │   ├── ansi-regex
│   │   │   │   ├── index.js
│   │   │   │   ├── license
│   │   │   │   ├── package.json
│   │   │   │   └── readme.md
│   │   │   └── strip-ansi
│   │   │       ├── index.js
│   │   │       ├── license
│   │   │       ├── package.json
│   │   │       └── readme.md
│   │   └── package.json
│   ├── is-fullwidth-code-point
│   │   ├── index.js
│   │   ├── license
│   │   ├── package.json
│   │   └── readme.md
│   ├── is-promise
│   │   ├── LICENSE
│   │   ├── index.js
│   │   ├── package.json
│   │   └── readme.md
│   ├── isexe
│   │   ├── LICENSE
│   │   ├── README.md
│   │   ├── index.js
│   │   ├── mode.js
│   │   ├── package.json
│   │   ├── test
│   │   │   └── basic.js
│   │   └── windows.js
│   ├── jquery
│   │   ├── AUTHORS.txt
│   │   ├── LICENSE.txt
│   │   ├── README.md
│   │   ├── bower.json
│   │   ├── dist
│   │   │   ├── core.js
│   │   │   ├── jquery.js
│   │   │   ├── jquery.min.js
│   │   │   ├── jquery.min.map
│   │   │   ├── jquery.slim.js
│   │   │   ├── jquery.slim.min.js
│   │   │   └── jquery.slim.min.map
│   │   ├── external
│   │   │   └── sizzle
│   │   │       ├── LICENSE.txt
│   │   │       └── dist
│   │   │           ├── sizzle.js
│   │   │           ├── sizzle.min.js
│   │   │           └── sizzle.min.map
│   │   ├── package.json
│   │   └── src
│   │       ├── ajax
│   │       │   ├── jsonp.js
│   │       │   ├── load.js
│   │       │   ├── parseXML.js
│   │       │   ├── script.js
│   │       │   ├── var
│   │       │   │   ├── location.js
│   │       │   │   ├── nonce.js
│   │       │   │   └── rquery.js
│   │       │   └── xhr.js
│   │       ├── ajax.js
│   │       ├── attributes
│   │       │   ├── attr.js
│   │       │   ├── classes.js
│   │       │   ├── prop.js
│   │       │   ├── support.js
│   │       │   └── val.js
│   │       ├── attributes.js
│   │       ├── callbacks.js
│   │       ├── core
│   │       │   ├── DOMEval.js
│   │       │   ├── access.js
│   │       │   ├── camelCase.js
│   │       │   ├── init.js
│   │       │   ├── isAttached.js
│   │       │   ├── nodeName.js
│   │       │   ├── parseHTML.js
│   │       │   ├── ready-no-deferred.js
│   │       │   ├── ready.js
│   │       │   ├── readyException.js
│   │       │   ├── stripAndCollapse.js
│   │       │   ├── support.js
│   │       │   ├── toType.js
│   │       │   └── var
│   │       │       └── rsingleTag.js
│   │       ├── core.js
│   │       ├── css
│   │       │   ├── addGetHookIf.js
│   │       │   ├── adjustCSS.js
│   │       │   ├── curCSS.js
│   │       │   ├── finalPropName.js
│   │       │   ├── hiddenVisibleSelectors.js
│   │       │   ├── showHide.js
│   │       │   ├── support.js
│   │       │   └── var
│   │       │       ├── cssExpand.js
│   │       │       ├── getStyles.js
│   │       │       ├── isHiddenWithinTree.js
│   │       │       ├── rboxStyle.js
│   │       │       ├── rnumnonpx.js
│   │       │       └── swap.js
│   │       ├── css.js
│   │       ├── data
│   │       │   ├── Data.js
│   │       │   └── var
│   │       │       ├── acceptData.js
│   │       │       ├── dataPriv.js
│   │       │       └── dataUser.js
│   │       ├── data.js
│   │       ├── deferred
│   │       │   └── exceptionHook.js
│   │       ├── deferred.js
│   │       ├── deprecated.js
│   │       ├── dimensions.js
│   │       ├── effects
│   │       │   ├── Tween.js
│   │       │   └── animatedSelector.js
│   │       ├── effects.js
│   │       ├── event
│   │       │   ├── ajax.js
│   │       │   ├── alias.js
│   │       │   ├── focusin.js
│   │       │   ├── support.js
│   │       │   └── trigger.js
│   │       ├── event.js
│   │       ├── exports
│   │       │   ├── amd.js
│   │       │   └── global.js
│   │       ├── jquery.js
│   │       ├── manipulation
│   │       │   ├── _evalUrl.js
│   │       │   ├── buildFragment.js
│   │       │   ├── getAll.js
│   │       │   ├── setGlobalEval.js
│   │       │   ├── support.js
│   │       │   ├── var
│   │       │   │   ├── rscriptType.js
│   │       │   │   └── rtagName.js
│   │       │   └── wrapMap.js
│   │       ├── manipulation.js
│   │       ├── offset.js
│   │       ├── queue
│   │       │   └── delay.js
│   │       ├── queue.js
│   │       ├── selector-native.js
│   │       ├── selector-sizzle.js
│   │       ├── selector.js
│   │       ├── serialize.js
│   │       ├── traversing
│   │       │   ├── findFilter.js
│   │       │   └── var
│   │       │       ├── dir.js
│   │       │       ├── rneedsContext.js
│   │       │       └── siblings.js
│   │       ├── traversing.js
│   │       ├── var
│   │       │   ├── ObjectFunctionString.js
│   │       │   ├── arr.js
│   │       │   ├── class2type.js
│   │       │   ├── concat.js
│   │       │   ├── document.js
│   │       │   ├── documentElement.js
│   │       │   ├── fnToString.js
│   │       │   ├── getProto.js
│   │       │   ├── hasOwn.js
│   │       │   ├── indexOf.js
│   │       │   ├── isFunction.js
│   │       │   ├── isWindow.js
│   │       │   ├── pnum.js
│   │       │   ├── push.js
│   │       │   ├── rcheckableType.js
│   │       │   ├── rcssNum.js
│   │       │   ├── rnothtmlwhite.js
│   │       │   ├── slice.js
│   │       │   ├── support.js
│   │       │   └── toString.js
│   │       └── wrap.js
│   ├── js-tokens
│   │   ├── CHANGELOG.md
│   │   ├── LICENSE
│   │   ├── README.md
│   │   ├── index.js
│   │   └── package.json
│   ├── js-yaml
│   │   ├── CHANGELOG.md
│   │   ├── LICENSE
│   │   ├── README.md
│   │   ├── bin
│   │   │   └── js-yaml.js
│   │   ├── dist
│   │   │   ├── js-yaml.js
│   │   │   └── js-yaml.min.js
│   │   ├── index.js
│   │   ├── lib
│   │   │   ├── js-yaml
│   │   │   │   ├── common.js
│   │   │   │   ├── dumper.js
│   │   │   │   ├── exception.js
│   │   │   │   ├── loader.js
│   │   │   │   ├── mark.js
│   │   │   │   ├── schema
│   │   │   │   │   ├── core.js
│   │   │   │   │   ├── default_full.js
│   │   │   │   │   ├── default_safe.js
│   │   │   │   │   ├── failsafe.js
│   │   │   │   │   └── json.js
│   │   │   │   ├── schema.js
│   │   │   │   ├── type
│   │   │   │   │   ├── binary.js
│   │   │   │   │   ├── bool.js
│   │   │   │   │   ├── float.js
│   │   │   │   │   ├── int.js
│   │   │   │   │   ├── js
│   │   │   │   │   │   ├── function.js
│   │   │   │   │   │   ├── regexp.js
│   │   │   │   │   │   └── undefined.js
│   │   │   │   │   ├── map.js
│   │   │   │   │   ├── merge.js
│   │   │   │   │   ├── null.js
│   │   │   │   │   ├── omap.js
│   │   │   │   │   ├── pairs.js
│   │   │   │   │   ├── seq.js
│   │   │   │   │   ├── set.js
│   │   │   │   │   ├── str.js
│   │   │   │   │   └── timestamp.js
│   │   │   │   └── type.js
│   │   │   └── js-yaml.js
│   │   └── package.json
│   ├── json-schema-traverse
│   │   ├── LICENSE
│   │   ├── README.md
│   │   ├── index.js
│   │   ├── package.json
│   │   └── spec
│   │       ├── fixtures
│   │       │   └── schema.js
│   │       └── index.spec.js
│   ├── json-stable-stringify-without-jsonify
│   │   ├── LICENSE
│   │   ├── example
│   │   │   ├── key_cmp.js
│   │   │   ├── nested.js
│   │   │   ├── str.js
│   │   │   └── value_cmp.js
│   │   ├── index.js
│   │   ├── package.json
│   │   ├── readme.markdown
│   │   └── test
│   │       ├── cmp.js
│   │       ├── nested.js
│   │       ├── replacer.js
│   │       ├── space.js
│   │       ├── str.js
│   │       └── to-json.js
│   ├── levn
│   │   ├── LICENSE
│   │   ├── README.md
│   │   ├── lib
│   │   │   ├── cast.js
│   │   │   ├── coerce.js
│   │   │   ├── index.js
│   │   │   ├── parse-string.js
│   │   │   └── parse.js
│   │   └── package.json
│   ├── lodash
│   │   ├── LICENSE
│   │   ├── README.md
│   │   ├── _DataView.js
│   │   ├── _Hash.js
│   │   ├── _LazyWrapper.js
│   │   ├── _ListCache.js
│   │   ├── _LodashWrapper.js
│   │   ├── _Map.js
│   │   ├── _MapCache.js
│   │   ├── _Promise.js
│   │   ├── _Set.js
│   │   ├── _SetCache.js
│   │   ├── _Stack.js
│   │   ├── _Symbol.js
│   │   ├── _Uint8Array.js
│   │   ├── _WeakMap.js
│   │   ├── _apply.js
│   │   ├── _arrayAggregator.js
│   │   ├── _arrayEach.js
│   │   ├── _arrayEachRight.js
│   │   ├── _arrayEvery.js
│   │   ├── _arrayFilter.js
│   │   ├── _arrayIncludes.js
│   │   ├── _arrayIncludesWith.js
│   │   ├── _arrayLikeKeys.js
│   │   ├── _arrayMap.js
│   │   ├── _arrayPush.js
│   │   ├── _arrayReduce.js
│   │   ├── _arrayReduceRight.js
│   │   ├── _arraySample.js
│   │   ├── _arraySampleSize.js
│   │   ├── _arrayShuffle.js
│   │   ├── _arraySome.js
│   │   ├── _asciiSize.js
│   │   ├── _asciiToArray.js
│   │   ├── _asciiWords.js
│   │   ├── _assignMergeValue.js
│   │   ├── _assignValue.js
│   │   ├── _assocIndexOf.js
│   │   ├── _baseAggregator.js
│   │   ├── _baseAssign.js
│   │   ├── _baseAssignIn.js
│   │   ├── _baseAssignValue.js
│   │   ├── _baseAt.js
│   │   ├── _baseClamp.js
│   │   ├── _baseClone.js
│   │   ├── _baseConforms.js
│   │   ├── _baseConformsTo.js
│   │   ├── _baseCreate.js
│   │   ├── _baseDelay.js
│   │   ├── _baseDifference.js
│   │   ├── _baseEach.js
│   │   ├── _baseEachRight.js
│   │   ├── _baseEvery.js
│   │   ├── _baseExtremum.js
│   │   ├── _baseFill.js
│   │   ├── _baseFilter.js
│   │   ├── _baseFindIndex.js
│   │   ├── _baseFindKey.js
│   │   ├── _baseFlatten.js
│   │   ├── _baseFor.js
│   │   ├── _baseForOwn.js
│   │   ├── _baseForOwnRight.js
│   │   ├── _baseForRight.js
│   │   ├── _baseFunctions.js
│   │   ├── _baseGet.js
│   │   ├── _baseGetAllKeys.js
│   │   ├── _baseGetTag.js
│   │   ├── _baseGt.js
│   │   ├── _baseHas.js
│   │   ├── _baseHasIn.js
│   │   ├── _baseInRange.js
│   │   ├── _baseIndexOf.js
│   │   ├── _baseIndexOfWith.js
│   │   ├── _baseIntersection.js
│   │   ├── _baseInverter.js
│   │   ├── _baseInvoke.js
│   │   ├── _baseIsArguments.js
│   │   ├── _baseIsArrayBuffer.js
│   │   ├── _baseIsDate.js
│   │   ├── _baseIsEqual.js
│   │   ├── _baseIsEqualDeep.js
│   │   ├── _baseIsMap.js
│   │   ├── _baseIsMatch.js
│   │   ├── _baseIsNaN.js
│   │   ├── _baseIsNative.js
│   │   ├── _baseIsRegExp.js
│   │   ├── _baseIsSet.js
│   │   ├── _baseIsTypedArray.js
│   │   ├── _baseIteratee.js
│   │   ├── _baseKeys.js
│   │   ├── _baseKeysIn.js
│   │   ├── _baseLodash.js
│   │   ├── _baseLt.js
│   │   ├── _baseMap.js
│   │   ├── _baseMatches.js
│   │   ├── _baseMatchesProperty.js
│   │   ├── _baseMean.js
│   │   ├── _baseMerge.js
│   │   ├── _baseMergeDeep.js
│   │   ├── _baseNth.js
│   │   ├── _baseOrderBy.js
│   │   ├── _basePick.js
│   │   ├── _basePickBy.js
│   │   ├── _baseProperty.js
│   │   ├── _basePropertyDeep.js
│   │   ├── _basePropertyOf.js
│   │   ├── _basePullAll.js
│   │   ├── _basePullAt.js
│   │   ├── _baseRandom.js
│   │   ├── _baseRange.js
│   │   ├── _baseReduce.js
│   │   ├── _baseRepeat.js
│   │   ├── _baseRest.js
│   │   ├── _baseSample.js
│   │   ├── _baseSampleSize.js
│   │   ├── _baseSet.js
│   │   ├── _baseSetData.js
│   │   ├── _baseSetToString.js
│   │   ├── _baseShuffle.js
│   │   ├── _baseSlice.js
│   │   ├── _baseSome.js
│   │   ├── _baseSortBy.js
│   │   ├── _baseSortedIndex.js
│   │   ├── _baseSortedIndexBy.js
│   │   ├── _baseSortedUniq.js
│   │   ├── _baseSum.js
│   │   ├── _baseTimes.js
│   │   ├── _baseToNumber.js
│   │   ├── _baseToPairs.js
│   │   ├── _baseToString.js
│   │   ├── _baseUnary.js
│   │   ├── _baseUniq.js
│   │   ├── _baseUnset.js
│   │   ├── _baseUpdate.js
│   │   ├── _baseValues.js
│   │   ├── _baseWhile.js
│   │   ├── _baseWrapperValue.js
│   │   ├── _baseXor.js
│   │   ├── _baseZipObject.js
│   │   ├── _cacheHas.js
│   │   ├── _castArrayLikeObject.js
│   │   ├── _castFunction.js
│   │   ├── _castPath.js
│   │   ├── _castRest.js
│   │   ├── _castSlice.js
│   │   ├── _charsEndIndex.js
│   │   ├── _charsStartIndex.js
│   │   ├── _cloneArrayBuffer.js
│   │   ├── _cloneBuffer.js
│   │   ├── _cloneDataView.js
│   │   ├── _cloneRegExp.js
│   │   ├── _cloneSymbol.js
│   │   ├── _cloneTypedArray.js
│   │   ├── _compareAscending.js
│   │   ├── _compareMultiple.js
│   │   ├── _composeArgs.js
│   │   ├── _composeArgsRight.js
│   │   ├── _copyArray.js
│   │   ├── _copyObject.js
│   │   ├── _copySymbols.js
│   │   ├── _copySymbolsIn.js
│   │   ├── _coreJsData.js
│   │   ├── _countHolders.js
│   │   ├── _createAggregator.js
│   │   ├── _createAssigner.js
│   │   ├── _createBaseEach.js
│   │   ├── _createBaseFor.js
│   │   ├── _createBind.js
│   │   ├── _createCaseFirst.js
│   │   ├── _createCompounder.js
│   │   ├── _createCtor.js
│   │   ├── _createCurry.js
│   │   ├── _createFind.js
│   │   ├── _createFlow.js
│   │   ├── _createHybrid.js
│   │   ├── _createInverter.js
│   │   ├── _createMathOperation.js
│   │   ├── _createOver.js
│   │   ├── _createPadding.js
│   │   ├── _createPartial.js
│   │   ├── _createRange.js
│   │   ├── _createRecurry.js
│   │   ├── _createRelationalOperation.js
│   │   ├── _createRound.js
│   │   ├── _createSet.js
│   │   ├── _createToPairs.js
│   │   ├── _createWrap.js
│   │   ├── _customDefaultsAssignIn.js
│   │   ├── _customDefaultsMerge.js
│   │   ├── _customOmitClone.js
│   │   ├── _deburrLetter.js
│   │   ├── _defineProperty.js
│   │   ├── _equalArrays.js
│   │   ├── _equalByTag.js
│   │   ├── _equalObjects.js
│   │   ├── _escapeHtmlChar.js
│   │   ├── _escapeStringChar.js
│   │   ├── _flatRest.js
│   │   ├── _freeGlobal.js
│   │   ├── _getAllKeys.js
│   │   ├── _getAllKeysIn.js
│   │   ├── _getData.js
│   │   ├── _getFuncName.js
│   │   ├── _getHolder.js
│   │   ├── _getMapData.js
│   │   ├── _getMatchData.js
│   │   ├── _getNative.js
│   │   ├── _getPrototype.js
│   │   ├── _getRawTag.js
│   │   ├── _getSymbols.js
│   │   ├── _getSymbolsIn.js
│   │   ├── _getTag.js
│   │   ├── _getValue.js
│   │   ├── _getView.js
│   │   ├── _getWrapDetails.js
│   │   ├── _hasPath.js
│   │   ├── _hasUnicode.js
│   │   ├── _hasUnicodeWord.js
│   │   ├── _hashClear.js
│   │   ├── _hashDelete.js
│   │   ├── _hashGet.js
│   │   ├── _hashHas.js
│   │   ├── _hashSet.js
│   │   ├── _initCloneArray.js
│   │   ├── _initCloneByTag.js
│   │   ├── _initCloneObject.js
│   │   ├── _insertWrapDetails.js
│   │   ├── _isFlattenable.js
│   │   ├── _isIndex.js
│   │   ├── _isIterateeCall.js
│   │   ├── _isKey.js
│   │   ├── _isKeyable.js
│   │   ├── _isLaziable.js
│   │   ├── _isMaskable.js
│   │   ├── _isMasked.js
│   │   ├── _isPrototype.js
│   │   ├── _isStrictComparable.js
│   │   ├── _iteratorToArray.js
│   │   ├── _lazyClone.js
│   │   ├── _lazyReverse.js
│   │   ├── _lazyValue.js
│   │   ├── _listCacheClear.js
│   │   ├── _listCacheDelete.js
│   │   ├── _listCacheGet.js
│   │   ├── _listCacheHas.js
│   │   ├── _listCacheSet.js
│   │   ├── _mapCacheClear.js
│   │   ├── _mapCacheDelete.js
│   │   ├── _mapCacheGet.js
│   │   ├── _mapCacheHas.js
│   │   ├── _mapCacheSet.js
│   │   ├── _mapToArray.js
│   │   ├── _matchesStrictComparable.js
│   │   ├── _memoizeCapped.js
│   │   ├── _mergeData.js
│   │   ├── _metaMap.js
│   │   ├── _nativeCreate.js
│   │   ├── _nativeKeys.js
│   │   ├── _nativeKeysIn.js
│   │   ├── _nodeUtil.js
│   │   ├── _objectToString.js
│   │   ├── _overArg.js
│   │   ├── _overRest.js
│   │   ├── _parent.js
│   │   ├── _reEscape.js
│   │   ├── _reEvaluate.js
│   │   ├── _reInterpolate.js
│   │   ├── _realNames.js
│   │   ├── _reorder.js
│   │   ├── _replaceHolders.js
│   │   ├── _root.js
│   │   ├── _safeGet.js
│   │   ├── _setCacheAdd.js
│   │   ├── _setCacheHas.js
│   │   ├── _setData.js
│   │   ├── _setToArray.js
│   │   ├── _setToPairs.js
│   │   ├── _setToString.js
│   │   ├── _setWrapToString.js
│   │   ├── _shortOut.js
│   │   ├── _shuffleSelf.js
│   │   ├── _stackClear.js
│   │   ├── _stackDelete.js
│   │   ├── _stackGet.js
│   │   ├── _stackHas.js
│   │   ├── _stackSet.js
│   │   ├── _strictIndexOf.js
│   │   ├── _strictLastIndexOf.js
│   │   ├── _stringSize.js
│   │   ├── _stringToArray.js
│   │   ├── _stringToPath.js
│   │   ├── _toKey.js
│   │   ├── _toSource.js
│   │   ├── _unescapeHtmlChar.js
│   │   ├── _unicodeSize.js
│   │   ├── _unicodeToArray.js
│   │   ├── _unicodeWords.js
│   │   ├── _updateWrapDetails.js
│   │   ├── _wrapperClone.js
│   │   ├── add.js
│   │   ├── after.js
│   │   ├── array.js
│   │   ├── ary.js
│   │   ├── assign.js
│   │   ├── assignIn.js
│   │   ├── assignInWith.js
│   │   ├── assignWith.js
│   │   ├── at.js
│   │   ├── attempt.js
│   │   ├── before.js
│   │   ├── bind.js
│   │   ├── bindAll.js
│   │   ├── bindKey.js
│   │   ├── camelCase.js
│   │   ├── capitalize.js
│   │   ├── castArray.js
│   │   ├── ceil.js
│   │   ├── chain.js
│   │   ├── chunk.js
│   │   ├── clamp.js
│   │   ├── clone.js
│   │   ├── cloneDeep.js
│   │   ├── cloneDeepWith.js
│   │   ├── cloneWith.js
│   │   ├── collection.js
│   │   ├── commit.js
│   │   ├── compact.js
│   │   ├── concat.js
│   │   ├── cond.js
│   │   ├── conforms.js
│   │   ├── conformsTo.js
│   │   ├── constant.js
│   │   ├── core.js
│   │   ├── core.min.js
│   │   ├── countBy.js
│   │   ├── create.js
│   │   ├── curry.js
│   │   ├── curryRight.js
│   │   ├── date.js
│   │   ├── debounce.js
│   │   ├── deburr.js
│   │   ├── defaultTo.js
│   │   ├── defaults.js
│   │   ├── defaultsDeep.js
│   │   ├── defer.js
│   │   ├── delay.js
│   │   ├── difference.js
│   │   ├── differenceBy.js
│   │   ├── differenceWith.js
│   │   ├── divide.js
│   │   ├── drop.js
│   │   ├── dropRight.js
│   │   ├── dropRightWhile.js
│   │   ├── dropWhile.js
│   │   ├── each.js
│   │   ├── eachRight.js
│   │   ├── endsWith.js
│   │   ├── entries.js
│   │   ├── entriesIn.js
│   │   ├── eq.js
│   │   ├── escape.js
│   │   ├── escapeRegExp.js
│   │   ├── every.js
│   │   ├── extend.js
│   │   ├── extendWith.js
│   │   ├── fill.js
│   │   ├── filter.js
│   │   ├── find.js
│   │   ├── findIndex.js
│   │   ├── findKey.js
│   │   ├── findLast.js
│   │   ├── findLastIndex.js
│   │   ├── findLastKey.js
│   │   ├── first.js
│   │   ├── flatMap.js
│   │   ├── flatMapDeep.js
│   │   ├── flatMapDepth.js
│   │   ├── flatten.js
│   │   ├── flattenDeep.js
│   │   ├── flattenDepth.js
│   │   ├── flip.js
│   │   ├── floor.js
│   │   ├── flow.js
│   │   ├── flowRight.js
│   │   ├── forEach.js
│   │   ├── forEachRight.js
│   │   ├── forIn.js
│   │   ├── forInRight.js
│   │   ├── forOwn.js
│   │   ├── forOwnRight.js
│   │   ├── fp
│   │   │   ├── F.js
│   │   │   ├── T.js
│   │   │   ├── __.js
│   │   │   ├── _baseConvert.js
│   │   │   ├── _convertBrowser.js
│   │   │   ├── _falseOptions.js
│   │   │   ├── _mapping.js
│   │   │   ├── _util.js
│   │   │   ├── add.js
│   │   │   ├── after.js
│   │   │   ├── all.js
│   │   │   ├── allPass.js
│   │   │   ├── always.js
│   │   │   ├── any.js
│   │   │   ├── anyPass.js
│   │   │   ├── apply.js
│   │   │   ├── array.js
│   │   │   ├── ary.js
│   │   │   ├── assign.js
│   │   │   ├── assignAll.js
│   │   │   ├── assignAllWith.js
│   │   │   ├── assignIn.js
│   │   │   ├── assignInAll.js
│   │   │   ├── assignInAllWith.js
│   │   │   ├── assignInWith.js
│   │   │   ├── assignWith.js
│   │   │   ├── assoc.js
│   │   │   ├── assocPath.js
│   │   │   ├── at.js
│   │   │   ├── attempt.js
│   │   │   ├── before.js
│   │   │   ├── bind.js
│   │   │   ├── bindAll.js
│   │   │   ├── bindKey.js
│   │   │   ├── camelCase.js
│   │   │   ├── capitalize.js
│   │   │   ├── castArray.js
│   │   │   ├── ceil.js
│   │   │   ├── chain.js
│   │   │   ├── chunk.js
│   │   │   ├── clamp.js
│   │   │   ├── clone.js
│   │   │   ├── cloneDeep.js
│   │   │   ├── cloneDeepWith.js
│   │   │   ├── cloneWith.js
│   │   │   ├── collection.js
│   │   │   ├── commit.js
│   │   │   ├── compact.js
│   │   │   ├── complement.js
│   │   │   ├── compose.js
│   │   │   ├── concat.js
│   │   │   ├── cond.js
│   │   │   ├── conforms.js
│   │   │   ├── conformsTo.js
│   │   │   ├── constant.js
│   │   │   ├── contains.js
│   │   │   ├── convert.js
│   │   │   ├── countBy.js
│   │   │   ├── create.js
│   │   │   ├── curry.js
│   │   │   ├── curryN.js
│   │   │   ├── curryRight.js
│   │   │   ├── curryRightN.js
│   │   │   ├── date.js
│   │   │   ├── debounce.js
│   │   │   ├── deburr.js
│   │   │   ├── defaultTo.js
│   │   │   ├── defaults.js
│   │   │   ├── defaultsAll.js
│   │   │   ├── defaultsDeep.js
│   │   │   ├── defaultsDeepAll.js
│   │   │   ├── defer.js
│   │   │   ├── delay.js
│   │   │   ├── difference.js
│   │   │   ├── differenceBy.js
│   │   │   ├── differenceWith.js
│   │   │   ├── dissoc.js
│   │   │   ├── dissocPath.js
│   │   │   ├── divide.js
│   │   │   ├── drop.js
│   │   │   ├── dropLast.js
│   │   │   ├── dropLastWhile.js
│   │   │   ├── dropRight.js
│   │   │   ├── dropRightWhile.js
│   │   │   ├── dropWhile.js
│   │   │   ├── each.js
│   │   │   ├── eachRight.js
│   │   │   ├── endsWith.js
│   │   │   ├── entries.js
│   │   │   ├── entriesIn.js
│   │   │   ├── eq.js
│   │   │   ├── equals.js
│   │   │   ├── escape.js
│   │   │   ├── escapeRegExp.js
│   │   │   ├── every.js
│   │   │   ├── extend.js
│   │   │   ├── extendAll.js
│   │   │   ├── extendAllWith.js
│   │   │   ├── extendWith.js
│   │   │   ├── fill.js
│   │   │   ├── filter.js
│   │   │   ├── find.js
│   │   │   ├── findFrom.js
│   │   │   ├── findIndex.js
│   │   │   ├── findIndexFrom.js
│   │   │   ├── findKey.js
│   │   │   ├── findLast.js
│   │   │   ├── findLastFrom.js
│   │   │   ├── findLastIndex.js
│   │   │   ├── findLastIndexFrom.js
│   │   │   ├── findLastKey.js
│   │   │   ├── first.js
│   │   │   ├── flatMap.js
│   │   │   ├── flatMapDeep.js
│   │   │   ├── flatMapDepth.js
│   │   │   ├── flatten.js
│   │   │   ├── flattenDeep.js
│   │   │   ├── flattenDepth.js
│   │   │   ├── flip.js
│   │   │   ├── floor.js
│   │   │   ├── flow.js
│   │   │   ├── flowRight.js
│   │   │   ├── forEach.js
│   │   │   ├── forEachRight.js
│   │   │   ├── forIn.js
│   │   │   ├── forInRight.js
│   │   │   ├── forOwn.js
│   │   │   ├── forOwnRight.js
│   │   │   ├── fromPairs.js
│   │   │   ├── function.js
│   │   │   ├── functions.js
│   │   │   ├── functionsIn.js
│   │   │   ├── get.js
│   │   │   ├── getOr.js
│   │   │   ├── groupBy.js
│   │   │   ├── gt.js
│   │   │   ├── gte.js
│   │   │   ├── has.js
│   │   │   ├── hasIn.js
│   │   │   ├── head.js
│   │   │   ├── identical.js
│   │   │   ├── identity.js
│   │   │   ├── inRange.js
│   │   │   ├── includes.js
│   │   │   ├── includesFrom.js
│   │   │   ├── indexBy.js
│   │   │   ├── indexOf.js
│   │   │   ├── indexOfFrom.js
│   │   │   ├── init.js
│   │   │   ├── initial.js
│   │   │   ├── intersection.js
│   │   │   ├── intersectionBy.js
│   │   │   ├── intersectionWith.js
│   │   │   ├── invert.js
│   │   │   ├── invertBy.js
│   │   │   ├── invertObj.js
│   │   │   ├── invoke.js
│   │   │   ├── invokeArgs.js
│   │   │   ├── invokeArgsMap.js
│   │   │   ├── invokeMap.js
│   │   │   ├── isArguments.js
│   │   │   ├── isArray.js
│   │   │   ├── isArrayBuffer.js
│   │   │   ├── isArrayLike.js
│   │   │   ├── isArrayLikeObject.js
│   │   │   ├── isBoolean.js
│   │   │   ├── isBuffer.js
│   │   │   ├── isDate.js
│   │   │   ├── isElement.js
│   │   │   ├── isEmpty.js
│   │   │   ├── isEqual.js
│   │   │   ├── isEqualWith.js
│   │   │   ├── isError.js
│   │   │   ├── isFinite.js
│   │   │   ├── isFunction.js
│   │   │   ├── isInteger.js
│   │   │   ├── isLength.js
│   │   │   ├── isMap.js
│   │   │   ├── isMatch.js
│   │   │   ├── isMatchWith.js
│   │   │   ├── isNaN.js
│   │   │   ├── isNative.js
│   │   │   ├── isNil.js
│   │   │   ├── isNull.js
│   │   │   ├── isNumber.js
│   │   │   ├── isObject.js
│   │   │   ├── isObjectLike.js
│   │   │   ├── isPlainObject.js
│   │   │   ├── isRegExp.js
│   │   │   ├── isSafeInteger.js
│   │   │   ├── isSet.js
│   │   │   ├── isString.js
│   │   │   ├── isSymbol.js
│   │   │   ├── isTypedArray.js
│   │   │   ├── isUndefined.js
│   │   │   ├── isWeakMap.js
│   │   │   ├── isWeakSet.js
│   │   │   ├── iteratee.js
│   │   │   ├── join.js
│   │   │   ├── juxt.js
│   │   │   ├── kebabCase.js
│   │   │   ├── keyBy.js
│   │   │   ├── keys.js
│   │   │   ├── keysIn.js
│   │   │   ├── lang.js
│   │   │   ├── last.js
│   │   │   ├── lastIndexOf.js
│   │   │   ├── lastIndexOfFrom.js
│   │   │   ├── lowerCase.js
│   │   │   ├── lowerFirst.js
│   │   │   ├── lt.js
│   │   │   ├── lte.js
│   │   │   ├── map.js
│   │   │   ├── mapKeys.js
│   │   │   ├── mapValues.js
│   │   │   ├── matches.js
│   │   │   ├── matchesProperty.js
│   │   │   ├── math.js
│   │   │   ├── max.js
│   │   │   ├── maxBy.js
│   │   │   ├── mean.js
│   │   │   ├── meanBy.js
│   │   │   ├── memoize.js
│   │   │   ├── merge.js
│   │   │   ├── mergeAll.js
│   │   │   ├── mergeAllWith.js
│   │   │   ├── mergeWith.js
│   │   │   ├── method.js
│   │   │   ├── methodOf.js
│   │   │   ├── min.js
│   │   │   ├── minBy.js
│   │   │   ├── mixin.js
│   │   │   ├── multiply.js
│   │   │   ├── nAry.js
│   │   │   ├── negate.js
│   │   │   ├── next.js
│   │   │   ├── noop.js
│   │   │   ├── now.js
│   │   │   ├── nth.js
│   │   │   ├── nthArg.js
│   │   │   ├── number.js
│   │   │   ├── object.js
│   │   │   ├── omit.js
│   │   │   ├── omitAll.js
│   │   │   ├── omitBy.js
│   │   │   ├── once.js
│   │   │   ├── orderBy.js
│   │   │   ├── over.js
│   │   │   ├── overArgs.js
│   │   │   ├── overEvery.js
│   │   │   ├── overSome.js
│   │   │   ├── pad.js
│   │   │   ├── padChars.js
│   │   │   ├── padCharsEnd.js
│   │   │   ├── padCharsStart.js
│   │   │   ├── padEnd.js
│   │   │   ├── padStart.js
│   │   │   ├── parseInt.js
│   │   │   ├── partial.js
│   │   │   ├── partialRight.js
│   │   │   ├── partition.js
│   │   │   ├── path.js
│   │   │   ├── pathEq.js
│   │   │   ├── pathOr.js
│   │   │   ├── paths.js
│   │   │   ├── pick.js
│   │   │   ├── pickAll.js
│   │   │   ├── pickBy.js
│   │   │   ├── pipe.js
│   │   │   ├── placeholder.js
│   │   │   ├── plant.js
│   │   │   ├── pluck.js
│   │   │   ├── prop.js
│   │   │   ├── propEq.js
│   │   │   ├── propOr.js
│   │   │   ├── property.js
│   │   │   ├── propertyOf.js
│   │   │   ├── props.js
│   │   │   ├── pull.js
│   │   │   ├── pullAll.js
│   │   │   ├── pullAllBy.js
│   │   │   ├── pullAllWith.js
│   │   │   ├── pullAt.js
│   │   │   ├── random.js
│   │   │   ├── range.js
│   │   │   ├── rangeRight.js
│   │   │   ├── rangeStep.js
│   │   │   ├── rangeStepRight.js
│   │   │   ├── rearg.js
│   │   │   ├── reduce.js
│   │   │   ├── reduceRight.js
│   │   │   ├── reject.js
│   │   │   ├── remove.js
│   │   │   ├── repeat.js
│   │   │   ├── replace.js
│   │   │   ├── rest.js
│   │   │   ├── restFrom.js
│   │   │   ├── result.js
│   │   │   ├── reverse.js
│   │   │   ├── round.js
│   │   │   ├── sample.js
│   │   │   ├── sampleSize.js
│   │   │   ├── seq.js
│   │   │   ├── set.js
│   │   │   ├── setWith.js
│   │   │   ├── shuffle.js
│   │   │   ├── size.js
│   │   │   ├── slice.js
│   │   │   ├── snakeCase.js
│   │   │   ├── some.js
│   │   │   ├── sortBy.js
│   │   │   ├── sortedIndex.js
│   │   │   ├── sortedIndexBy.js
│   │   │   ├── sortedIndexOf.js
│   │   │   ├── sortedLastIndex.js
│   │   │   ├── sortedLastIndexBy.js
│   │   │   ├── sortedLastIndexOf.js
│   │   │   ├── sortedUniq.js
│   │   │   ├── sortedUniqBy.js
│   │   │   ├── split.js
│   │   │   ├── spread.js
│   │   │   ├── spreadFrom.js
│   │   │   ├── startCase.js
│   │   │   ├── startsWith.js
│   │   │   ├── string.js
│   │   │   ├── stubArray.js
│   │   │   ├── stubFalse.js
│   │   │   ├── stubObject.js
│   │   │   ├── stubString.js
│   │   │   ├── stubTrue.js
│   │   │   ├── subtract.js
│   │   │   ├── sum.js
│   │   │   ├── sumBy.js
│   │   │   ├── symmetricDifference.js
│   │   │   ├── symmetricDifferenceBy.js
│   │   │   ├── symmetricDifferenceWith.js
│   │   │   ├── tail.js
│   │   │   ├── take.js
│   │   │   ├── takeLast.js
│   │   │   ├── takeLastWhile.js
│   │   │   ├── takeRight.js
│   │   │   ├── takeRightWhile.js
│   │   │   ├── takeWhile.js
│   │   │   ├── tap.js
│   │   │   ├── template.js
│   │   │   ├── templateSettings.js
│   │   │   ├── throttle.js
│   │   │   ├── thru.js
│   │   │   ├── times.js
│   │   │   ├── toArray.js
│   │   │   ├── toFinite.js
│   │   │   ├── toInteger.js
│   │   │   ├── toIterator.js
│   │   │   ├── toJSON.js
│   │   │   ├── toLength.js
│   │   │   ├── toLower.js
│   │   │   ├── toNumber.js
│   │   │   ├── toPairs.js
│   │   │   ├── toPairsIn.js
│   │   │   ├── toPath.js
│   │   │   ├── toPlainObject.js
│   │   │   ├── toSafeInteger.js
│   │   │   ├── toString.js
│   │   │   ├── toUpper.js
│   │   │   ├── transform.js
│   │   │   ├── trim.js
│   │   │   ├── trimChars.js
│   │   │   ├── trimCharsEnd.js
│   │   │   ├── trimCharsStart.js
│   │   │   ├── trimEnd.js
│   │   │   ├── trimStart.js
│   │   │   ├── truncate.js
│   │   │   ├── unapply.js
│   │   │   ├── unary.js
│   │   │   ├── unescape.js
│   │   │   ├── union.js
│   │   │   ├── unionBy.js
│   │   │   ├── unionWith.js
│   │   │   ├── uniq.js
│   │   │   ├── uniqBy.js
│   │   │   ├── uniqWith.js
│   │   │   ├── uniqueId.js
│   │   │   ├── unnest.js
│   │   │   ├── unset.js
│   │   │   ├── unzip.js
│   │   │   ├── unzipWith.js
│   │   │   ├── update.js
│   │   │   ├── updateWith.js
│   │   │   ├── upperCase.js
│   │   │   ├── upperFirst.js
│   │   │   ├── useWith.js
│   │   │   ├── util.js
│   │   │   ├── value.js
│   │   │   ├── valueOf.js
│   │   │   ├── values.js
│   │   │   ├── valuesIn.js
│   │   │   ├── where.js
│   │   │   ├── whereEq.js
│   │   │   ├── without.js
│   │   │   ├── words.js
│   │   │   ├── wrap.js
│   │   │   ├── wrapperAt.js
│   │   │   ├── wrapperChain.js
│   │   │   ├── wrapperLodash.js
│   │   │   ├── wrapperReverse.js
│   │   │   ├── wrapperValue.js
│   │   │   ├── xor.js
│   │   │   ├── xorBy.js
│   │   │   ├── xorWith.js
│   │   │   ├── zip.js
│   │   │   ├── zipAll.js
│   │   │   ├── zipObj.js
│   │   │   ├── zipObject.js
│   │   │   ├── zipObjectDeep.js
│   │   │   └── zipWith.js
│   │   ├── fp.js
│   │   ├── fromPairs.js
│   │   ├── function.js
│   │   ├── functions.js
│   │   ├── functionsIn.js
│   │   ├── get.js
│   │   ├── groupBy.js
│   │   ├── gt.js
│   │   ├── gte.js
│   │   ├── has.js
│   │   ├── hasIn.js
│   │   ├── head.js
│   │   ├── identity.js
│   │   ├── inRange.js
│   │   ├── includes.js
│   │   ├── index.js
│   │   ├── indexOf.js
│   │   ├── initial.js
│   │   ├── intersection.js
│   │   ├── intersectionBy.js
│   │   ├── intersectionWith.js
│   │   ├── invert.js
│   │   ├── invertBy.js
│   │   ├── invoke.js
│   │   ├── invokeMap.js
│   │   ├── isArguments.js
│   │   ├── isArray.js
│   │   ├── isArrayBuffer.js
│   │   ├── isArrayLike.js
│   │   ├── isArrayLikeObject.js
│   │   ├── isBoolean.js
│   │   ├── isBuffer.js
│   │   ├── isDate.js
│   │   ├── isElement.js
│   │   ├── isEmpty.js
│   │   ├── isEqual.js
│   │   ├── isEqualWith.js
│   │   ├── isError.js
│   │   ├── isFinite.js
│   │   ├── isFunction.js
│   │   ├── isInteger.js
│   │   ├── isLength.js
│   │   ├── isMap.js
│   │   ├── isMatch.js
│   │   ├── isMatchWith.js
│   │   ├── isNaN.js
│   │   ├── isNative.js
│   │   ├── isNil.js
│   │   ├── isNull.js
│   │   ├── isNumber.js
│   │   ├── isObject.js
│   │   ├── isObjectLike.js
│   │   ├── isPlainObject.js
│   │   ├── isRegExp.js
│   │   ├── isSafeInteger.js
│   │   ├── isSet.js
│   │   ├── isString.js
│   │   ├── isSymbol.js
│   │   ├── isTypedArray.js
│   │   ├── isUndefined.js
│   │   ├── isWeakMap.js
│   │   ├── isWeakSet.js
│   │   ├── iteratee.js
│   │   ├── join.js
│   │   ├── kebabCase.js
│   │   ├── keyBy.js
│   │   ├── keys.js
│   │   ├── keysIn.js
│   │   ├── lang.js
│   │   ├── last.js
│   │   ├── lastIndexOf.js
│   │   ├── lodash.js
│   │   ├── lodash.min.js
│   │   ├── lowerCase.js
│   │   ├── lowerFirst.js
│   │   ├── lt.js
│   │   ├── lte.js
│   │   ├── map.js
│   │   ├── mapKeys.js
│   │   ├── mapValues.js
│   │   ├── matches.js
│   │   ├── matchesProperty.js
│   │   ├── math.js
│   │   ├── max.js
│   │   ├── maxBy.js
│   │   ├── mean.js
│   │   ├── meanBy.js
│   │   ├── memoize.js
│   │   ├── merge.js
│   │   ├── mergeWith.js
│   │   ├── method.js
│   │   ├── methodOf.js
│   │   ├── min.js
│   │   ├── minBy.js
│   │   ├── mixin.js
│   │   ├── multiply.js
│   │   ├── negate.js
│   │   ├── next.js
│   │   ├── noop.js
│   │   ├── now.js
│   │   ├── nth.js
│   │   ├── nthArg.js
│   │   ├── number.js
│   │   ├── object.js
│   │   ├── omit.js
│   │   ├── omitBy.js
│   │   ├── once.js
│   │   ├── orderBy.js
│   │   ├── over.js
│   │   ├── overArgs.js
│   │   ├── overEvery.js
│   │   ├── overSome.js
│   │   ├── package.json
│   │   ├── pad.js
│   │   ├── padEnd.js
│   │   ├── padStart.js
│   │   ├── parseInt.js
│   │   ├── partial.js
│   │   ├── partialRight.js
│   │   ├── partition.js
│   │   ├── pick.js
│   │   ├── pickBy.js
│   │   ├── plant.js
│   │   ├── property.js
│   │   ├── propertyOf.js
│   │   ├── pull.js
│   │   ├── pullAll.js
│   │   ├── pullAllBy.js
│   │   ├── pullAllWith.js
│   │   ├── pullAt.js
│   │   ├── random.js
│   │   ├── range.js
│   │   ├── rangeRight.js
│   │   ├── rearg.js
│   │   ├── reduce.js
│   │   ├── reduceRight.js
│   │   ├── reject.js
│   │   ├── remove.js
│   │   ├── repeat.js
│   │   ├── replace.js
│   │   ├── rest.js
│   │   ├── result.js
│   │   ├── reverse.js
│   │   ├── round.js
│   │   ├── sample.js
│   │   ├── sampleSize.js
│   │   ├── seq.js
│   │   ├── set.js
│   │   ├── setWith.js
│   │   ├── shuffle.js
│   │   ├── size.js
│   │   ├── slice.js
│   │   ├── snakeCase.js
│   │   ├── some.js
│   │   ├── sortBy.js
│   │   ├── sortedIndex.js
│   │   ├── sortedIndexBy.js
│   │   ├── sortedIndexOf.js
│   │   ├── sortedLastIndex.js
│   │   ├── sortedLastIndexBy.js
│   │   ├── sortedLastIndexOf.js
│   │   ├── sortedUniq.js
│   │   ├── sortedUniqBy.js
│   │   ├── split.js
│   │   ├── spread.js
│   │   ├── startCase.js
│   │   ├── startsWith.js
│   │   ├── string.js
│   │   ├── stubArray.js
│   │   ├── stubFalse.js
│   │   ├── stubObject.js
│   │   ├── stubString.js
│   │   ├── stubTrue.js
│   │   ├── subtract.js
│   │   ├── sum.js
│   │   ├── sumBy.js
│   │   ├── tail.js
│   │   ├── take.js
│   │   ├── takeRight.js
│   │   ├── takeRightWhile.js
│   │   ├── takeWhile.js
│   │   ├── tap.js
│   │   ├── template.js
│   │   ├── templateSettings.js
│   │   ├── throttle.js
│   │   ├── thru.js
│   │   ├── times.js
│   │   ├── toArray.js
│   │   ├── toFinite.js
│   │   ├── toInteger.js
│   │   ├── toIterator.js
│   │   ├── toJSON.js
│   │   ├── toLength.js
│   │   ├── toLower.js
│   │   ├── toNumber.js
│   │   ├── toPairs.js
│   │   ├── toPairsIn.js
│   │   ├── toPath.js
│   │   ├── toPlainObject.js
│   │   ├── toSafeInteger.js
│   │   ├── toString.js
│   │   ├── toUpper.js
│   │   ├── transform.js
│   │   ├── trim.js
│   │   ├── trimEnd.js
│   │   ├── trimStart.js
│   │   ├── truncate.js
│   │   ├── unary.js
│   │   ├── unescape.js
│   │   ├── union.js
│   │   ├── unionBy.js
│   │   ├── unionWith.js
│   │   ├── uniq.js
│   │   ├── uniqBy.js
│   │   ├── uniqWith.js
│   │   ├── uniqueId.js
│   │   ├── unset.js
│   │   ├── unzip.js
│   │   ├── unzipWith.js
│   │   ├── update.js
│   │   ├── updateWith.js
│   │   ├── upperCase.js
│   │   ├── upperFirst.js
│   │   ├── util.js
│   │   ├── value.js
│   │   ├── valueOf.js
│   │   ├── values.js
│   │   ├── valuesIn.js
│   │   ├── without.js
│   │   ├── words.js
│   │   ├── wrap.js
│   │   ├── wrapperAt.js
│   │   ├── wrapperChain.js
│   │   ├── wrapperLodash.js
│   │   ├── wrapperReverse.js
│   │   ├── wrapperValue.js
│   │   ├── xor.js
│   │   ├── xorBy.js
│   │   ├── xorWith.js
│   │   ├── zip.js
│   │   ├── zipObject.js
│   │   ├── zipObjectDeep.js
│   │   └── zipWith.js
│   ├── mimic-fn
│   │   ├── index.js
│   │   ├── license
│   │   ├── package.json
│   │   └── readme.md
│   ├── minimatch
│   │   ├── LICENSE
│   │   ├── README.md
│   │   ├── minimatch.js
│   │   └── package.json
│   ├── minimist
│   │   ├── LICENSE
│   │   ├── example
│   │   │   └── parse.js
│   │   ├── index.js
│   │   ├── package.json
│   │   ├── readme.markdown
│   │   └── test
│   │       ├── dash.js
│   │       ├── default_bool.js
│   │       ├── dotted.js
│   │       ├── long.js
│   │       ├── parse.js
│   │       ├── parse_modified.js
│   │       ├── short.js
│   │       └── whitespace.js
│   ├── mkdirp
│   │   ├── LICENSE
│   │   ├── bin
│   │   │   ├── cmd.js
│   │   │   └── usage.txt
│   │   ├── examples
│   │   │   └── pow.js
│   │   ├── index.js
│   │   ├── package.json
│   │   ├── readme.markdown
│   │   └── test
│   │       ├── chmod.js
│   │       ├── clobber.js
│   │       ├── mkdirp.js
│   │       ├── opts_fs.js
│   │       ├── opts_fs_sync.js
│   │       ├── perm.js
│   │       ├── perm_sync.js
│   │       ├── race.js
│   │       ├── rel.js
│   │       ├── return.js
│   │       ├── return_sync.js
│   │       ├── root.js
│   │       ├── sync.js
│   │       ├── umask.js
│   │       └── umask_sync.js
│   ├── ms
│   │   ├── index.js
│   │   ├── license.md
│   │   ├── package.json
│   │   └── readme.md
│   ├── mute-stream
│   │   ├── LICENSE
│   │   ├── README.md
│   │   ├── coverage
│   │   │   ├── lcov-report
│   │   │   │   ├── __root__
│   │   │   │   │   ├── index.html
│   │   │   │   │   └── mute.js.html
│   │   │   │   ├── base.css
│   │   │   │   ├── index.html
│   │   │   │   ├── prettify.css
│   │   │   │   ├── prettify.js
│   │   │   │   ├── sort-arrow-sprite.png
│   │   │   │   └── sorter.js
│   │   │   └── lcov.info
│   │   ├── mute.js
│   │   ├── package.json
│   │   └── test
│   │       └── basic.js
│   ├── natural-compare
│   │   ├── README.md
│   │   ├── index.js
│   │   └── package.json
│   ├── nice-try
│   │   ├── CHANGELOG.md
│   │   ├── LICENSE
│   │   ├── README.md
│   │   ├── package.json
│   │   └── src
│   │       └── index.js
│   ├── normalize.css
│   │   ├── CHANGELOG.md
│   │   ├── LICENSE.md
│   │   ├── README.md
│   │   ├── normalize.css
│   │   └── package.json
│   ├── object-assign
│   │   ├── index.js
│   │   ├── license
│   │   ├── package.json
│   │   └── readme.md
│   ├── once
│   │   ├── LICENSE
│   │   ├── README.md
│   │   ├── once.js
│   │   └── package.json
│   ├── onetime
│   │   ├── index.js
│   │   ├── license
│   │   ├── package.json
│   │   └── readme.md
│   ├── optionator
│   │   ├── CHANGELOG.md
│   │   ├── LICENSE
│   │   ├── README.md
│   │   ├── lib
│   │   │   ├── help.js
│   │   │   ├── index.js
│   │   │   └── util.js
│   │   └── package.json
│   ├── os-tmpdir
│   │   ├── index.js
│   │   ├── license
│   │   ├── package.json
│   │   └── readme.md
│   ├── parent-module
│   │   ├── index.js
│   │   ├── license
│   │   ├── package.json
│   │   └── readme.md
│   ├── path-is-absolute
│   │   ├── index.js
│   │   ├── license
│   │   ├── package.json
│   │   └── readme.md
│   ├── path-is-inside
│   │   ├── LICENSE.txt
│   │   ├── lib
│   │   │   └── path-is-inside.js
│   │   └── package.json
│   ├── path-key
│   │   ├── index.js
│   │   ├── license
│   │   ├── package.json
│   │   └── readme.md
│   ├── pluralize
│   │   ├── LICENSE
│   │   ├── Readme.md
│   │   ├── package.json
│   │   └── pluralize.js
│   ├── prelude-ls
│   │   ├── CHANGELOG.md
│   │   ├── LICENSE
│   │   ├── README.md
│   │   ├── lib
│   │   │   ├── Func.js
│   │   │   ├── List.js
│   │   │   ├── Num.js
│   │   │   ├── Obj.js
│   │   │   ├── Str.js
│   │   │   └── index.js
│   │   └── package.json
│   ├── progress
│   │   ├── CHANGELOG.md
│   │   ├── LICENSE
│   │   ├── Makefile
│   │   ├── Readme.md
│   │   ├── index.js
│   │   ├── lib
│   │   │   └── node-progress.js
│   │   └── package.json
│   ├── punycode
│   │   ├── LICENSE-MIT.txt
│   │   ├── README.md
│   │   ├── package.json
│   │   ├── punycode.es6.js
│   │   └── punycode.js
│   ├── regexpp
│   │   ├── LICENSE
│   │   ├── README.md
│   │   ├── index.d.ts
│   │   ├── index.js
│   │   ├── index.js.map
│   │   ├── index.mjs
│   │   ├── index.mjs.map
│   │   └── package.json
│   ├── resolve-from
│   │   ├── index.js
│   │   ├── license
│   │   ├── package.json
│   │   └── readme.md
│   ├── restore-cursor
│   │   ├── index.js
│   │   ├── license
│   │   ├── package.json
│   │   └── readme.md
│   ├── rimraf
│   │   ├── LICENSE
│   │   ├── README.md
│   │   ├── bin.js
│   │   ├── package.json
│   │   └── rimraf.js
│   ├── run-async
│   │   ├── LICENSE
│   │   ├── README.md
│   │   ├── index.js
│   │   └── package.json
│   ├── rxjs
│   │   ├── AsyncSubject.d.ts
│   │   ├── AsyncSubject.js
│   │   ├── AsyncSubject.js.map
│   │   ├── BehaviorSubject.d.ts
│   │   ├── BehaviorSubject.js
│   │   ├── BehaviorSubject.js.map
│   │   ├── InnerSubscriber.d.ts
│   │   ├── InnerSubscriber.js
│   │   ├── InnerSubscriber.js.map
│   │   ├── LICENSE.txt
│   │   ├── Notification.d.ts
│   │   ├── Notification.js
│   │   ├── Notification.js.map
│   │   ├── Observable.d.ts
│   │   ├── Observable.js
│   │   ├── Observable.js.map
│   │   ├── Observer.d.ts
│   │   ├── Observer.js
│   │   ├── Observer.js.map
│   │   ├── Operator.d.ts
│   │   ├── Operator.js
│   │   ├── Operator.js.map
│   │   ├── OuterSubscriber.d.ts
│   │   ├── OuterSubscriber.js
│   │   ├── OuterSubscriber.js.map
│   │   ├── README.md
│   │   ├── ReplaySubject.d.ts
│   │   ├── ReplaySubject.js
│   │   ├── ReplaySubject.js.map
│   │   ├── Rx.d.ts
│   │   ├── Rx.js
│   │   ├── Rx.js.map
│   │   ├── Scheduler.d.ts
│   │   ├── Scheduler.js
│   │   ├── Scheduler.js.map
│   │   ├── Subject.d.ts
│   │   ├── Subject.js
│   │   ├── Subject.js.map
│   │   ├── SubjectSubscription.d.ts
│   │   ├── SubjectSubscription.js
│   │   ├── SubjectSubscription.js.map
│   │   ├── Subscriber.d.ts
│   │   ├── Subscriber.js
│   │   ├── Subscriber.js.map
│   │   ├── Subscription.d.ts
│   │   ├── Subscription.js
│   │   ├── Subscription.js.map
│   │   ├── _esm2015
│   │   │   ├── LICENSE.txt
│   │   │   ├── README.md
│   │   │   ├── ajax
│   │   │   │   ├── index.js
│   │   │   │   └── index.js.map
│   │   │   ├── index.js
│   │   │   ├── index.js.map
│   │   │   ├── internal
│   │   │   │   ├── AsyncSubject.js
│   │   │   │   ├── AsyncSubject.js.map
│   │   │   │   ├── BehaviorSubject.js
│   │   │   │   ├── BehaviorSubject.js.map
│   │   │   │   ├── InnerSubscriber.js
│   │   │   │   ├── InnerSubscriber.js.map
│   │   │   │   ├── Notification.js
│   │   │   │   ├── Notification.js.map
│   │   │   │   ├── Observable.js
│   │   │   │   ├── Observable.js.map
│   │   │   │   ├── Observer.js
│   │   │   │   ├── Observer.js.map
│   │   │   │   ├── Operator.js
│   │   │   │   ├── Operator.js.map
│   │   │   │   ├── OuterSubscriber.js
│   │   │   │   ├── OuterSubscriber.js.map
│   │   │   │   ├── ReplaySubject.js
│   │   │   │   ├── ReplaySubject.js.map
│   │   │   │   ├── Rx.js
│   │   │   │   ├── Rx.js.map
│   │   │   │   ├── Scheduler.js
│   │   │   │   ├── Scheduler.js.map
│   │   │   │   ├── Subject.js
│   │   │   │   ├── Subject.js.map
│   │   │   │   ├── SubjectSubscription.js
│   │   │   │   ├── SubjectSubscription.js.map
│   │   │   │   ├── Subscriber.js
│   │   │   │   ├── Subscriber.js.map
│   │   │   │   ├── Subscription.js
│   │   │   │   ├── Subscription.js.map
│   │   │   │   ├── config.js
│   │   │   │   ├── config.js.map
│   │   │   │   ├── observable
│   │   │   │   │   ├── ConnectableObservable.js
│   │   │   │   │   ├── ConnectableObservable.js.map
│   │   │   │   │   ├── SubscribeOnObservable.js
│   │   │   │   │   ├── SubscribeOnObservable.js.map
│   │   │   │   │   ├── bindCallback.js
│   │   │   │   │   ├── bindCallback.js.map
│   │   │   │   │   ├── bindNodeCallback.js
│   │   │   │   │   ├── bindNodeCallback.js.map
│   │   │   │   │   ├── combineLatest.js
│   │   │   │   │   ├── combineLatest.js.map
│   │   │   │   │   ├── concat.js
│   │   │   │   │   ├── concat.js.map
│   │   │   │   │   ├── defer.js
│   │   │   │   │   ├── defer.js.map
│   │   │   │   │   ├── dom
│   │   │   │   │   │   ├── AjaxObservable.js
│   │   │   │   │   │   ├── AjaxObservable.js.map
│   │   │   │   │   │   ├── WebSocketSubject.js
│   │   │   │   │   │   ├── WebSocketSubject.js.map
│   │   │   │   │   │   ├── ajax.js
│   │   │   │   │   │   ├── ajax.js.map
│   │   │   │   │   │   ├── webSocket.js
│   │   │   │   │   │   └── webSocket.js.map
│   │   │   │   │   ├── empty.js
│   │   │   │   │   ├── empty.js.map
│   │   │   │   │   ├── forkJoin.js
│   │   │   │   │   ├── forkJoin.js.map
│   │   │   │   │   ├── from.js
│   │   │   │   │   ├── from.js.map
│   │   │   │   │   ├── fromArray.js
│   │   │   │   │   ├── fromArray.js.map
│   │   │   │   │   ├── fromEvent.js
│   │   │   │   │   ├── fromEvent.js.map
│   │   │   │   │   ├── fromEventPattern.js
│   │   │   │   │   ├── fromEventPattern.js.map
│   │   │   │   │   ├── fromIterable.js
│   │   │   │   │   ├── fromIterable.js.map
│   │   │   │   │   ├── fromObservable.js
│   │   │   │   │   ├── fromObservable.js.map
│   │   │   │   │   ├── fromPromise.js
│   │   │   │   │   ├── fromPromise.js.map
│   │   │   │   │   ├── generate.js
│   │   │   │   │   ├── generate.js.map
│   │   │   │   │   ├── iif.js
│   │   │   │   │   ├── iif.js.map
│   │   │   │   │   ├── interval.js
│   │   │   │   │   ├── interval.js.map
│   │   │   │   │   ├── merge.js
│   │   │   │   │   ├── merge.js.map
│   │   │   │   │   ├── never.js
│   │   │   │   │   ├── never.js.map
│   │   │   │   │   ├── of.js
│   │   │   │   │   ├── of.js.map
│   │   │   │   │   ├── onErrorResumeNext.js
│   │   │   │   │   ├── onErrorResumeNext.js.map
│   │   │   │   │   ├── pairs.js
│   │   │   │   │   ├── pairs.js.map
│   │   │   │   │   ├── race.js
│   │   │   │   │   ├── race.js.map
│   │   │   │   │   ├── range.js
│   │   │   │   │   ├── range.js.map
│   │   │   │   │   ├── scalar.js
│   │   │   │   │   ├── scalar.js.map
│   │   │   │   │   ├── throwError.js
│   │   │   │   │   ├── throwError.js.map
│   │   │   │   │   ├── timer.js
│   │   │   │   │   ├── timer.js.map
│   │   │   │   │   ├── using.js
│   │   │   │   │   ├── using.js.map
│   │   │   │   │   ├── zip.js
│   │   │   │   │   └── zip.js.map
│   │   │   │   ├── operators
│   │   │   │   │   ├── audit.js
│   │   │   │   │   ├── audit.js.map
│   │   │   │   │   ├── auditTime.js
│   │   │   │   │   ├── auditTime.js.map
│   │   │   │   │   ├── buffer.js
│   │   │   │   │   ├── buffer.js.map
│   │   │   │   │   ├── bufferCount.js
│   │   │   │   │   ├── bufferCount.js.map
│   │   │   │   │   ├── bufferTime.js
│   │   │   │   │   ├── bufferTime.js.map
│   │   │   │   │   ├── bufferToggle.js
│   │   │   │   │   ├── bufferToggle.js.map
│   │   │   │   │   ├── bufferWhen.js
│   │   │   │   │   ├── bufferWhen.js.map
│   │   │   │   │   ├── catchError.js
│   │   │   │   │   ├── catchError.js.map
│   │   │   │   │   ├── combineAll.js
│   │   │   │   │   ├── combineAll.js.map
│   │   │   │   │   ├── combineLatest.js
│   │   │   │   │   ├── combineLatest.js.map
│   │   │   │   │   ├── concat.js
│   │   │   │   │   ├── concat.js.map
│   │   │   │   │   ├── concatAll.js
│   │   │   │   │   ├── concatAll.js.map
│   │   │   │   │   ├── concatMap.js
│   │   │   │   │   ├── concatMap.js.map
│   │   │   │   │   ├── concatMapTo.js
│   │   │   │   │   ├── concatMapTo.js.map
│   │   │   │   │   ├── count.js
│   │   │   │   │   ├── count.js.map
│   │   │   │   │   ├── debounce.js
│   │   │   │   │   ├── debounce.js.map
│   │   │   │   │   ├── debounceTime.js
│   │   │   │   │   ├── debounceTime.js.map
│   │   │   │   │   ├── defaultIfEmpty.js
│   │   │   │   │   ├── defaultIfEmpty.js.map
│   │   │   │   │   ├── delay.js
│   │   │   │   │   ├── delay.js.map
│   │   │   │   │   ├── delayWhen.js
│   │   │   │   │   ├── delayWhen.js.map
│   │   │   │   │   ├── dematerialize.js
│   │   │   │   │   ├── dematerialize.js.map
│   │   │   │   │   ├── distinct.js
│   │   │   │   │   ├── distinct.js.map
│   │   │   │   │   ├── distinctUntilChanged.js
│   │   │   │   │   ├── distinctUntilChanged.js.map
│   │   │   │   │   ├── distinctUntilKeyChanged.js
│   │   │   │   │   ├── distinctUntilKeyChanged.js.map
│   │   │   │   │   ├── elementAt.js
│   │   │   │   │   ├── elementAt.js.map
│   │   │   │   │   ├── endWith.js
│   │   │   │   │   ├── endWith.js.map
│   │   │   │   │   ├── every.js
│   │   │   │   │   ├── every.js.map
│   │   │   │   │   ├── exhaust.js
│   │   │   │   │   ├── exhaust.js.map
│   │   │   │   │   ├── exhaustMap.js
│   │   │   │   │   ├── exhaustMap.js.map
│   │   │   │   │   ├── expand.js
│   │   │   │   │   ├── expand.js.map
│   │   │   │   │   ├── filter.js
│   │   │   │   │   ├── filter.js.map
│   │   │   │   │   ├── finalize.js
│   │   │   │   │   ├── finalize.js.map
│   │   │   │   │   ├── find.js
│   │   │   │   │   ├── find.js.map
│   │   │   │   │   ├── findIndex.js
│   │   │   │   │   ├── findIndex.js.map
│   │   │   │   │   ├── first.js
│   │   │   │   │   ├── first.js.map
│   │   │   │   │   ├── groupBy.js
│   │   │   │   │   ├── groupBy.js.map
│   │   │   │   │   ├── ignoreElements.js
│   │   │   │   │   ├── ignoreElements.js.map
│   │   │   │   │   ├── index.js
│   │   │   │   │   ├── index.js.map
│   │   │   │   │   ├── isEmpty.js
│   │   │   │   │   ├── isEmpty.js.map
│   │   │   │   │   ├── last.js
│   │   │   │   │   ├── last.js.map
│   │   │   │   │   ├── map.js
│   │   │   │   │   ├── map.js.map
│   │   │   │   │   ├── mapTo.js
│   │   │   │   │   ├── mapTo.js.map
│   │   │   │   │   ├── materialize.js
│   │   │   │   │   ├── materialize.js.map
│   │   │   │   │   ├── max.js
│   │   │   │   │   ├── max.js.map
│   │   │   │   │   ├── merge.js
│   │   │   │   │   ├── merge.js.map
│   │   │   │   │   ├── mergeAll.js
│   │   │   │   │   ├── mergeAll.js.map
│   │   │   │   │   ├── mergeMap.js
│   │   │   │   │   ├── mergeMap.js.map
│   │   │   │   │   ├── mergeMapTo.js
│   │   │   │   │   ├── mergeMapTo.js.map
│   │   │   │   │   ├── mergeScan.js
│   │   │   │   │   ├── mergeScan.js.map
│   │   │   │   │   ├── min.js
│   │   │   │   │   ├── min.js.map
│   │   │   │   │   ├── multicast.js
│   │   │   │   │   ├── multicast.js.map
│   │   │   │   │   ├── observeOn.js
│   │   │   │   │   ├── observeOn.js.map
│   │   │   │   │   ├── onErrorResumeNext.js
│   │   │   │   │   ├── onErrorResumeNext.js.map
│   │   │   │   │   ├── pairwise.js
│   │   │   │   │   ├── pairwise.js.map
│   │   │   │   │   ├── partition.js
│   │   │   │   │   ├── partition.js.map
│   │   │   │   │   ├── pluck.js
│   │   │   │   │   ├── pluck.js.map
│   │   │   │   │   ├── publish.js
│   │   │   │   │   ├── publish.js.map
│   │   │   │   │   ├── publishBehavior.js
│   │   │   │   │   ├── publishBehavior.js.map
│   │   │   │   │   ├── publishLast.js
│   │   │   │   │   ├── publishLast.js.map
│   │   │   │   │   ├── publishReplay.js
│   │   │   │   │   ├── publishReplay.js.map
│   │   │   │   │   ├── race.js
│   │   │   │   │   ├── race.js.map
│   │   │   │   │   ├── reduce.js
│   │   │   │   │   ├── reduce.js.map
│   │   │   │   │   ├── refCount.js
│   │   │   │   │   ├── refCount.js.map
│   │   │   │   │   ├── repeat.js
│   │   │   │   │   ├── repeat.js.map
│   │   │   │   │   ├── repeatWhen.js
│   │   │   │   │   ├── repeatWhen.js.map
│   │   │   │   │   ├── retry.js
│   │   │   │   │   ├── retry.js.map
│   │   │   │   │   ├── retryWhen.js
│   │   │   │   │   ├── retryWhen.js.map
│   │   │   │   │   ├── sample.js
│   │   │   │   │   ├── sample.js.map
│   │   │   │   │   ├── sampleTime.js
│   │   │   │   │   ├── sampleTime.js.map
│   │   │   │   │   ├── scan.js
│   │   │   │   │   ├── scan.js.map
│   │   │   │   │   ├── sequenceEqual.js
│   │   │   │   │   ├── sequenceEqual.js.map
│   │   │   │   │   ├── share.js
│   │   │   │   │   ├── share.js.map
│   │   │   │   │   ├── shareReplay.js
│   │   │   │   │   ├── shareReplay.js.map
│   │   │   │   │   ├── single.js
│   │   │   │   │   ├── single.js.map
│   │   │   │   │   ├── skip.js
│   │   │   │   │   ├── skip.js.map
│   │   │   │   │   ├── skipLast.js
│   │   │   │   │   ├── skipLast.js.map
│   │   │   │   │   ├── skipUntil.js
│   │   │   │   │   ├── skipUntil.js.map
│   │   │   │   │   ├── skipWhile.js
│   │   │   │   │   ├── skipWhile.js.map
│   │   │   │   │   ├── startWith.js
│   │   │   │   │   ├── startWith.js.map
│   │   │   │   │   ├── subscribeOn.js
│   │   │   │   │   ├── subscribeOn.js.map
│   │   │   │   │   ├── switchAll.js
│   │   │   │   │   ├── switchAll.js.map
│   │   │   │   │   ├── switchMap.js
│   │   │   │   │   ├── switchMap.js.map
│   │   │   │   │   ├── switchMapTo.js
│   │   │   │   │   ├── switchMapTo.js.map
│   │   │   │   │   ├── take.js
│   │   │   │   │   ├── take.js.map
│   │   │   │   │   ├── takeLast.js
│   │   │   │   │   ├── takeLast.js.map
│   │   │   │   │   ├── takeUntil.js
│   │   │   │   │   ├── takeUntil.js.map
│   │   │   │   │   ├── takeWhile.js
│   │   │   │   │   ├── takeWhile.js.map
│   │   │   │   │   ├── tap.js
│   │   │   │   │   ├── tap.js.map
│   │   │   │   │   ├── throttle.js
│   │   │   │   │   ├── throttle.js.map
│   │   │   │   │   ├── throttleTime.js
│   │   │   │   │   ├── throttleTime.js.map
│   │   │   │   │   ├── throwIfEmpty.js
│   │   │   │   │   ├── throwIfEmpty.js.map
│   │   │   │   │   ├── timeInterval.js
│   │   │   │   │   ├── timeInterval.js.map
│   │   │   │   │   ├── timeout.js
│   │   │   │   │   ├── timeout.js.map
│   │   │   │   │   ├── timeoutWith.js
│   │   │   │   │   ├── timeoutWith.js.map
│   │   │   │   │   ├── timestamp.js
│   │   │   │   │   ├── timestamp.js.map
│   │   │   │   │   ├── toArray.js
│   │   │   │   │   ├── toArray.js.map
│   │   │   │   │   ├── window.js
│   │   │   │   │   ├── window.js.map
│   │   │   │   │   ├── windowCount.js
│   │   │   │   │   ├── windowCount.js.map
│   │   │   │   │   ├── windowTime.js
│   │   │   │   │   ├── windowTime.js.map
│   │   │   │   │   ├── windowToggle.js
│   │   │   │   │   ├── windowToggle.js.map
│   │   │   │   │   ├── windowWhen.js
│   │   │   │   │   ├── windowWhen.js.map
│   │   │   │   │   ├── withLatestFrom.js
│   │   │   │   │   ├── withLatestFrom.js.map
│   │   │   │   │   ├── zip.js
│   │   │   │   │   ├── zip.js.map
│   │   │   │   │   ├── zipAll.js
│   │   │   │   │   └── zipAll.js.map
│   │   │   │   ├── scheduler
│   │   │   │   │   ├── Action.js
│   │   │   │   │   ├── Action.js.map
│   │   │   │   │   ├── AnimationFrameAction.js
│   │   │   │   │   ├── AnimationFrameAction.js.map
│   │   │   │   │   ├── AnimationFrameScheduler.js
│   │   │   │   │   ├── AnimationFrameScheduler.js.map
│   │   │   │   │   ├── AsapAction.js
│   │   │   │   │   ├── AsapAction.js.map
│   │   │   │   │   ├── AsapScheduler.js
│   │   │   │   │   ├── AsapScheduler.js.map
│   │   │   │   │   ├── AsyncAction.js
│   │   │   │   │   ├── AsyncAction.js.map
│   │   │   │   │   ├── AsyncScheduler.js
│   │   │   │   │   ├── AsyncScheduler.js.map
│   │   │   │   │   ├── QueueAction.js
│   │   │   │   │   ├── QueueAction.js.map
│   │   │   │   │   ├── QueueScheduler.js
│   │   │   │   │   ├── QueueScheduler.js.map
│   │   │   │   │   ├── VirtualTimeScheduler.js
│   │   │   │   │   ├── VirtualTimeScheduler.js.map
│   │   │   │   │   ├── animationFrame.js
│   │   │   │   │   ├── animationFrame.js.map
│   │   │   │   │   ├── asap.js
│   │   │   │   │   ├── asap.js.map
│   │   │   │   │   ├── async.js
│   │   │   │   │   ├── async.js.map
│   │   │   │   │   ├── queue.js
│   │   │   │   │   └── queue.js.map
│   │   │   │   ├── symbol
│   │   │   │   │   ├── iterator.js
│   │   │   │   │   ├── iterator.js.map
│   │   │   │   │   ├── observable.js
│   │   │   │   │   ├── observable.js.map
│   │   │   │   │   ├── rxSubscriber.js
│   │   │   │   │   └── rxSubscriber.js.map
│   │   │   │   ├── testing
│   │   │   │   │   ├── ColdObservable.js
│   │   │   │   │   ├── ColdObservable.js.map
│   │   │   │   │   ├── HotObservable.js
│   │   │   │   │   ├── HotObservable.js.map
│   │   │   │   │   ├── SubscriptionLog.js
│   │   │   │   │   ├── SubscriptionLog.js.map
│   │   │   │   │   ├── SubscriptionLoggable.js
│   │   │   │   │   ├── SubscriptionLoggable.js.map
│   │   │   │   │   ├── TestMessage.js
│   │   │   │   │   ├── TestMessage.js.map
│   │   │   │   │   ├── TestScheduler.js
│   │   │   │   │   └── TestScheduler.js.map
│   │   │   │   ├── types.js
│   │   │   │   ├── types.js.map
│   │   │   │   └── util
│   │   │   │       ├── ArgumentOutOfRangeError.js
│   │   │   │       ├── ArgumentOutOfRangeError.js.map
│   │   │   │       ├── EmptyError.js
│   │   │   │       ├── EmptyError.js.map
│   │   │   │       ├── Immediate.js
│   │   │   │       ├── Immediate.js.map
│   │   │   │       ├── ObjectUnsubscribedError.js
│   │   │   │       ├── ObjectUnsubscribedError.js.map
│   │   │   │       ├── TimeoutError.js
│   │   │   │       ├── TimeoutError.js.map
│   │   │   │       ├── UnsubscriptionError.js
│   │   │   │       ├── UnsubscriptionError.js.map
│   │   │   │       ├── applyMixins.js
│   │   │   │       ├── applyMixins.js.map
│   │   │   │       ├── canReportError.js
│   │   │   │       ├── canReportError.js.map
│   │   │   │       ├── errorObject.js
│   │   │   │       ├── errorObject.js.map
│   │   │   │       ├── hostReportError.js
│   │   │   │       ├── hostReportError.js.map
│   │   │   │       ├── identity.js
│   │   │   │       ├── identity.js.map
│   │   │   │       ├── isArray.js
│   │   │   │       ├── isArray.js.map
│   │   │   │       ├── isArrayLike.js
│   │   │   │       ├── isArrayLike.js.map
│   │   │   │       ├── isDate.js
│   │   │   │       ├── isDate.js.map
│   │   │   │       ├── isFunction.js
│   │   │   │       ├── isFunction.js.map
│   │   │   │       ├── isInteropObservable.js
│   │   │   │       ├── isInteropObservable.js.map
│   │   │   │       ├── isIterable.js
│   │   │   │       ├── isIterable.js.map
│   │   │   │       ├── isNumeric.js
│   │   │   │       ├── isNumeric.js.map
│   │   │   │       ├── isObject.js
│   │   │   │       ├── isObject.js.map
│   │   │   │       ├── isObservable.js
│   │   │   │       ├── isObservable.js.map
│   │   │   │       ├── isPromise.js
│   │   │   │       ├── isPromise.js.map
│   │   │   │       ├── isScheduler.js
│   │   │   │       ├── isScheduler.js.map
│   │   │   │       ├── noop.js
│   │   │   │       ├── noop.js.map
│   │   │   │       ├── not.js
│   │   │   │       ├── not.js.map
│   │   │   │       ├── pipe.js
│   │   │   │       ├── pipe.js.map
│   │   │   │       ├── root.js
│   │   │   │       ├── root.js.map
│   │   │   │       ├── subscribeTo.js
│   │   │   │       ├── subscribeTo.js.map
│   │   │   │       ├── subscribeToArray.js
│   │   │   │       ├── subscribeToArray.js.map
│   │   │   │       ├── subscribeToIterable.js
│   │   │   │       ├── subscribeToIterable.js.map
│   │   │   │       ├── subscribeToObservable.js
│   │   │   │       ├── subscribeToObservable.js.map
│   │   │   │       ├── subscribeToPromise.js
│   │   │   │       ├── subscribeToPromise.js.map
│   │   │   │       ├── subscribeToResult.js
│   │   │   │       ├── subscribeToResult.js.map
│   │   │   │       ├── toSubscriber.js
│   │   │   │       ├── toSubscriber.js.map
│   │   │   │       ├── tryCatch.js
│   │   │   │       └── tryCatch.js.map
│   │   │   ├── internal-compatibility
│   │   │   │   ├── index.js
│   │   │   │   └── index.js.map
│   │   │   ├── operators
│   │   │   │   ├── index.js
│   │   │   │   └── index.js.map
│   │   │   ├── path-mapping.js
│   │   │   ├── testing
│   │   │   │   ├── index.js
│   │   │   │   └── index.js.map
│   │   │   └── webSocket
│   │   │       ├── index.js
│   │   │       └── index.js.map
│   │   ├── _esm5
│   │   │   ├── LICENSE.txt
│   │   │   ├── README.md
│   │   │   ├── ajax
│   │   │   │   ├── index.js
│   │   │   │   └── index.js.map
│   │   │   ├── index.js
│   │   │   ├── index.js.map
│   │   │   ├── internal
│   │   │   │   ├── AsyncSubject.js
│   │   │   │   ├── AsyncSubject.js.map
│   │   │   │   ├── BehaviorSubject.js
│   │   │   │   ├── BehaviorSubject.js.map
│   │   │   │   ├── InnerSubscriber.js
│   │   │   │   ├── InnerSubscriber.js.map
│   │   │   │   ├── Notification.js
│   │   │   │   ├── Notification.js.map
│   │   │   │   ├── Observable.js
│   │   │   │   ├── Observable.js.map
│   │   │   │   ├── Observer.js
│   │   │   │   ├── Observer.js.map
│   │   │   │   ├── Operator.js
│   │   │   │   ├── Operator.js.map
│   │   │   │   ├── OuterSubscriber.js
│   │   │   │   ├── OuterSubscriber.js.map
│   │   │   │   ├── ReplaySubject.js
│   │   │   │   ├── ReplaySubject.js.map
│   │   │   │   ├── Rx.js
│   │   │   │   ├── Rx.js.map
│   │   │   │   ├── Scheduler.js
│   │   │   │   ├── Scheduler.js.map
│   │   │   │   ├── Subject.js
│   │   │   │   ├── Subject.js.map
│   │   │   │   ├── SubjectSubscription.js
│   │   │   │   ├── SubjectSubscription.js.map
│   │   │   │   ├── Subscriber.js
│   │   │   │   ├── Subscriber.js.map
│   │   │   │   ├── Subscription.js
│   │   │   │   ├── Subscription.js.map
│   │   │   │   ├── config.js
│   │   │   │   ├── config.js.map
│   │   │   │   ├── observable
│   │   │   │   │   ├── ConnectableObservable.js
│   │   │   │   │   ├── ConnectableObservable.js.map
│   │   │   │   │   ├── SubscribeOnObservable.js
│   │   │   │   │   ├── SubscribeOnObservable.js.map
│   │   │   │   │   ├── bindCallback.js
│   │   │   │   │   ├── bindCallback.js.map
│   │   │   │   │   ├── bindNodeCallback.js
│   │   │   │   │   ├── bindNodeCallback.js.map
│   │   │   │   │   ├── combineLatest.js
│   │   │   │   │   ├── combineLatest.js.map
│   │   │   │   │   ├── concat.js
│   │   │   │   │   ├── concat.js.map
│   │   │   │   │   ├── defer.js
│   │   │   │   │   ├── defer.js.map
│   │   │   │   │   ├── dom
│   │   │   │   │   │   ├── AjaxObservable.js
│   │   │   │   │   │   ├── AjaxObservable.js.map
│   │   │   │   │   │   ├── WebSocketSubject.js
│   │   │   │   │   │   ├── WebSocketSubject.js.map
│   │   │   │   │   │   ├── ajax.js
│   │   │   │   │   │   ├── ajax.js.map
│   │   │   │   │   │   ├── webSocket.js
│   │   │   │   │   │   └── webSocket.js.map
│   │   │   │   │   ├── empty.js
│   │   │   │   │   ├── empty.js.map
│   │   │   │   │   ├── forkJoin.js
│   │   │   │   │   ├── forkJoin.js.map
│   │   │   │   │   ├── from.js
│   │   │   │   │   ├── from.js.map
│   │   │   │   │   ├── fromArray.js
│   │   │   │   │   ├── fromArray.js.map
│   │   │   │   │   ├── fromEvent.js
│   │   │   │   │   ├── fromEvent.js.map
│   │   │   │   │   ├── fromEventPattern.js
│   │   │   │   │   ├── fromEventPattern.js.map
│   │   │   │   │   ├── fromIterable.js
│   │   │   │   │   ├── fromIterable.js.map
│   │   │   │   │   ├── fromObservable.js
│   │   │   │   │   ├── fromObservable.js.map
│   │   │   │   │   ├── fromPromise.js
│   │   │   │   │   ├── fromPromise.js.map
│   │   │   │   │   ├── generate.js
│   │   │   │   │   ├── generate.js.map
│   │   │   │   │   ├── iif.js
│   │   │   │   │   ├── iif.js.map
│   │   │   │   │   ├── interval.js
│   │   │   │   │   ├── interval.js.map
│   │   │   │   │   ├── merge.js
│   │   │   │   │   ├── merge.js.map
│   │   │   │   │   ├── never.js
│   │   │   │   │   ├── never.js.map
│   │   │   │   │   ├── of.js
│   │   │   │   │   ├── of.js.map
│   │   │   │   │   ├── onErrorResumeNext.js
│   │   │   │   │   ├── onErrorResumeNext.js.map
│   │   │   │   │   ├── pairs.js
│   │   │   │   │   ├── pairs.js.map
│   │   │   │   │   ├── race.js
│   │   │   │   │   ├── race.js.map
│   │   │   │   │   ├── range.js
│   │   │   │   │   ├── range.js.map
│   │   │   │   │   ├── scalar.js
│   │   │   │   │   ├── scalar.js.map
│   │   │   │   │   ├── throwError.js
│   │   │   │   │   ├── throwError.js.map
│   │   │   │   │   ├── timer.js
│   │   │   │   │   ├── timer.js.map
│   │   │   │   │   ├── using.js
│   │   │   │   │   ├── using.js.map
│   │   │   │   │   ├── zip.js
│   │   │   │   │   └── zip.js.map
│   │   │   │   ├── operators
│   │   │   │   │   ├── audit.js
│   │   │   │   │   ├── audit.js.map
│   │   │   │   │   ├── auditTime.js
│   │   │   │   │   ├── auditTime.js.map
│   │   │   │   │   ├── buffer.js
│   │   │   │   │   ├── buffer.js.map
│   │   │   │   │   ├── bufferCount.js
│   │   │   │   │   ├── bufferCount.js.map
│   │   │   │   │   ├── bufferTime.js
│   │   │   │   │   ├── bufferTime.js.map
│   │   │   │   │   ├── bufferToggle.js
│   │   │   │   │   ├── bufferToggle.js.map
│   │   │   │   │   ├── bufferWhen.js
│   │   │   │   │   ├── bufferWhen.js.map
│   │   │   │   │   ├── catchError.js
│   │   │   │   │   ├── catchError.js.map
│   │   │   │   │   ├── combineAll.js
│   │   │   │   │   ├── combineAll.js.map
│   │   │   │   │   ├── combineLatest.js
│   │   │   │   │   ├── combineLatest.js.map
│   │   │   │   │   ├── concat.js
│   │   │   │   │   ├── concat.js.map
│   │   │   │   │   ├── concatAll.js
│   │   │   │   │   ├── concatAll.js.map
│   │   │   │   │   ├── concatMap.js
│   │   │   │   │   ├── concatMap.js.map
│   │   │   │   │   ├── concatMapTo.js
│   │   │   │   │   ├── concatMapTo.js.map
│   │   │   │   │   ├── count.js
│   │   │   │   │   ├── count.js.map
│   │   │   │   │   ├── debounce.js
│   │   │   │   │   ├── debounce.js.map
│   │   │   │   │   ├── debounceTime.js
│   │   │   │   │   ├── debounceTime.js.map
│   │   │   │   │   ├── defaultIfEmpty.js
│   │   │   │   │   ├── defaultIfEmpty.js.map
│   │   │   │   │   ├── delay.js
│   │   │   │   │   ├── delay.js.map
│   │   │   │   │   ├── delayWhen.js
│   │   │   │   │   ├── delayWhen.js.map
│   │   │   │   │   ├── dematerialize.js
│   │   │   │   │   ├── dematerialize.js.map
│   │   │   │   │   ├── distinct.js
│   │   │   │   │   ├── distinct.js.map
│   │   │   │   │   ├── distinctUntilChanged.js
│   │   │   │   │   ├── distinctUntilChanged.js.map
│   │   │   │   │   ├── distinctUntilKeyChanged.js
│   │   │   │   │   ├── distinctUntilKeyChanged.js.map
│   │   │   │   │   ├── elementAt.js
│   │   │   │   │   ├── elementAt.js.map
│   │   │   │   │   ├── endWith.js
│   │   │   │   │   ├── endWith.js.map
│   │   │   │   │   ├── every.js
│   │   │   │   │   ├── every.js.map
│   │   │   │   │   ├── exhaust.js
│   │   │   │   │   ├── exhaust.js.map
│   │   │   │   │   ├── exhaustMap.js
│   │   │   │   │   ├── exhaustMap.js.map
│   │   │   │   │   ├── expand.js
│   │   │   │   │   ├── expand.js.map
│   │   │   │   │   ├── filter.js
│   │   │   │   │   ├── filter.js.map
│   │   │   │   │   ├── finalize.js
│   │   │   │   │   ├── finalize.js.map
│   │   │   │   │   ├── find.js
│   │   │   │   │   ├── find.js.map
│   │   │   │   │   ├── findIndex.js
│   │   │   │   │   ├── findIndex.js.map
│   │   │   │   │   ├── first.js
│   │   │   │   │   ├── first.js.map
│   │   │   │   │   ├── groupBy.js
│   │   │   │   │   ├── groupBy.js.map
│   │   │   │   │   ├── ignoreElements.js
│   │   │   │   │   ├── ignoreElements.js.map
│   │   │   │   │   ├── index.js
│   │   │   │   │   ├── index.js.map
│   │   │   │   │   ├── isEmpty.js
│   │   │   │   │   ├── isEmpty.js.map
│   │   │   │   │   ├── last.js
│   │   │   │   │   ├── last.js.map
│   │   │   │   │   ├── map.js
│   │   │   │   │   ├── map.js.map
│   │   │   │   │   ├── mapTo.js
│   │   │   │   │   ├── mapTo.js.map
│   │   │   │   │   ├── materialize.js
│   │   │   │   │   ├── materialize.js.map
│   │   │   │   │   ├── max.js
│   │   │   │   │   ├── max.js.map
│   │   │   │   │   ├── merge.js
│   │   │   │   │   ├── merge.js.map
│   │   │   │   │   ├── mergeAll.js
│   │   │   │   │   ├── mergeAll.js.map
│   │   │   │   │   ├── mergeMap.js
│   │   │   │   │   ├── mergeMap.js.map
│   │   │   │   │   ├── mergeMapTo.js
│   │   │   │   │   ├── mergeMapTo.js.map
│   │   │   │   │   ├── mergeScan.js
│   │   │   │   │   ├── mergeScan.js.map
│   │   │   │   │   ├── min.js
│   │   │   │   │   ├── min.js.map
│   │   │   │   │   ├── multicast.js
│   │   │   │   │   ├── multicast.js.map
│   │   │   │   │   ├── observeOn.js
│   │   │   │   │   ├── observeOn.js.map
│   │   │   │   │   ├── onErrorResumeNext.js
│   │   │   │   │   ├── onErrorResumeNext.js.map
│   │   │   │   │   ├── pairwise.js
│   │   │   │   │   ├── pairwise.js.map
│   │   │   │   │   ├── partition.js
│   │   │   │   │   ├── partition.js.map
│   │   │   │   │   ├── pluck.js
│   │   │   │   │   ├── pluck.js.map
│   │   │   │   │   ├── publish.js
│   │   │   │   │   ├── publish.js.map
│   │   │   │   │   ├── publishBehavior.js
│   │   │   │   │   ├── publishBehavior.js.map
│   │   │   │   │   ├── publishLast.js
│   │   │   │   │   ├── publishLast.js.map
│   │   │   │   │   ├── publishReplay.js
│   │   │   │   │   ├── publishReplay.js.map
│   │   │   │   │   ├── race.js
│   │   │   │   │   ├── race.js.map
│   │   │   │   │   ├── reduce.js
│   │   │   │   │   ├── reduce.js.map
│   │   │   │   │   ├── refCount.js
│   │   │   │   │   ├── refCount.js.map
│   │   │   │   │   ├── repeat.js
│   │   │   │   │   ├── repeat.js.map
│   │   │   │   │   ├── repeatWhen.js
│   │   │   │   │   ├── repeatWhen.js.map
│   │   │   │   │   ├── retry.js
│   │   │   │   │   ├── retry.js.map
│   │   │   │   │   ├── retryWhen.js
│   │   │   │   │   ├── retryWhen.js.map
│   │   │   │   │   ├── sample.js
│   │   │   │   │   ├── sample.js.map
│   │   │   │   │   ├── sampleTime.js
│   │   │   │   │   ├── sampleTime.js.map
│   │   │   │   │   ├── scan.js
│   │   │   │   │   ├── scan.js.map
│   │   │   │   │   ├── sequenceEqual.js
│   │   │   │   │   ├── sequenceEqual.js.map
│   │   │   │   │   ├── share.js
│   │   │   │   │   ├── share.js.map
│   │   │   │   │   ├── shareReplay.js
│   │   │   │   │   ├── shareReplay.js.map
│   │   │   │   │   ├── single.js
│   │   │   │   │   ├── single.js.map
│   │   │   │   │   ├── skip.js
│   │   │   │   │   ├── skip.js.map
│   │   │   │   │   ├── skipLast.js
│   │   │   │   │   ├── skipLast.js.map
│   │   │   │   │   ├── skipUntil.js
│   │   │   │   │   ├── skipUntil.js.map
│   │   │   │   │   ├── skipWhile.js
│   │   │   │   │   ├── skipWhile.js.map
│   │   │   │   │   ├── startWith.js
│   │   │   │   │   ├── startWith.js.map
│   │   │   │   │   ├── subscribeOn.js
│   │   │   │   │   ├── subscribeOn.js.map
│   │   │   │   │   ├── switchAll.js
│   │   │   │   │   ├── switchAll.js.map
│   │   │   │   │   ├── switchMap.js
│   │   │   │   │   ├── switchMap.js.map
│   │   │   │   │   ├── switchMapTo.js
│   │   │   │   │   ├── switchMapTo.js.map
│   │   │   │   │   ├── take.js
│   │   │   │   │   ├── take.js.map
│   │   │   │   │   ├── takeLast.js
│   │   │   │   │   ├── takeLast.js.map
│   │   │   │   │   ├── takeUntil.js
│   │   │   │   │   ├── takeUntil.js.map
│   │   │   │   │   ├── takeWhile.js
│   │   │   │   │   ├── takeWhile.js.map
│   │   │   │   │   ├── tap.js
│   │   │   │   │   ├── tap.js.map
│   │   │   │   │   ├── throttle.js
│   │   │   │   │   ├── throttle.js.map
│   │   │   │   │   ├── throttleTime.js
│   │   │   │   │   ├── throttleTime.js.map
│   │   │   │   │   ├── throwIfEmpty.js
│   │   │   │   │   ├── throwIfEmpty.js.map
│   │   │   │   │   ├── timeInterval.js
│   │   │   │   │   ├── timeInterval.js.map
│   │   │   │   │   ├── timeout.js
│   │   │   │   │   ├── timeout.js.map
│   │   │   │   │   ├── timeoutWith.js
│   │   │   │   │   ├── timeoutWith.js.map
│   │   │   │   │   ├── timestamp.js
│   │   │   │   │   ├── timestamp.js.map
│   │   │   │   │   ├── toArray.js
│   │   │   │   │   ├── toArray.js.map
│   │   │   │   │   ├── window.js
│   │   │   │   │   ├── window.js.map
│   │   │   │   │   ├── windowCount.js
│   │   │   │   │   ├── windowCount.js.map
│   │   │   │   │   ├── windowTime.js
│   │   │   │   │   ├── windowTime.js.map
│   │   │   │   │   ├── windowToggle.js
│   │   │   │   │   ├── windowToggle.js.map
│   │   │   │   │   ├── windowWhen.js
│   │   │   │   │   ├── windowWhen.js.map
│   │   │   │   │   ├── withLatestFrom.js
│   │   │   │   │   ├── withLatestFrom.js.map
│   │   │   │   │   ├── zip.js
│   │   │   │   │   ├── zip.js.map
│   │   │   │   │   ├── zipAll.js
│   │   │   │   │   └── zipAll.js.map
│   │   │   │   ├── scheduler
│   │   │   │   │   ├── Action.js
│   │   │   │   │   ├── Action.js.map
│   │   │   │   │   ├── AnimationFrameAction.js
│   │   │   │   │   ├── AnimationFrameAction.js.map
│   │   │   │   │   ├── AnimationFrameScheduler.js
│   │   │   │   │   ├── AnimationFrameScheduler.js.map
│   │   │   │   │   ├── AsapAction.js
│   │   │   │   │   ├── AsapAction.js.map
│   │   │   │   │   ├── AsapScheduler.js
│   │   │   │   │   ├── AsapScheduler.js.map
│   │   │   │   │   ├── AsyncAction.js
│   │   │   │   │   ├── AsyncAction.js.map
│   │   │   │   │   ├── AsyncScheduler.js
│   │   │   │   │   ├── AsyncScheduler.js.map
│   │   │   │   │   ├── QueueAction.js
│   │   │   │   │   ├── QueueAction.js.map
│   │   │   │   │   ├── QueueScheduler.js
│   │   │   │   │   ├── QueueScheduler.js.map
│   │   │   │   │   ├── VirtualTimeScheduler.js
│   │   │   │   │   ├── VirtualTimeScheduler.js.map
│   │   │   │   │   ├── animationFrame.js
│   │   │   │   │   ├── animationFrame.js.map
│   │   │   │   │   ├── asap.js
│   │   │   │   │   ├── asap.js.map
│   │   │   │   │   ├── async.js
│   │   │   │   │   ├── async.js.map
│   │   │   │   │   ├── queue.js
│   │   │   │   │   └── queue.js.map
│   │   │   │   ├── symbol
│   │   │   │   │   ├── iterator.js
│   │   │   │   │   ├── iterator.js.map
│   │   │   │   │   ├── observable.js
│   │   │   │   │   ├── observable.js.map
│   │   │   │   │   ├── rxSubscriber.js
│   │   │   │   │   └── rxSubscriber.js.map
│   │   │   │   ├── testing
│   │   │   │   │   ├── ColdObservable.js
│   │   │   │   │   ├── ColdObservable.js.map
│   │   │   │   │   ├── HotObservable.js
│   │   │   │   │   ├── HotObservable.js.map
│   │   │   │   │   ├── SubscriptionLog.js
│   │   │   │   │   ├── SubscriptionLog.js.map
│   │   │   │   │   ├── SubscriptionLoggable.js
│   │   │   │   │   ├── SubscriptionLoggable.js.map
│   │   │   │   │   ├── TestMessage.js
│   │   │   │   │   ├── TestMessage.js.map
│   │   │   │   │   ├── TestScheduler.js
│   │   │   │   │   └── TestScheduler.js.map
│   │   │   │   ├── types.js
│   │   │   │   ├── types.js.map
│   │   │   │   └── util
│   │   │   │       ├── ArgumentOutOfRangeError.js
│   │   │   │       ├── ArgumentOutOfRangeError.js.map
│   │   │   │       ├── EmptyError.js
│   │   │   │       ├── EmptyError.js.map
│   │   │   │       ├── Immediate.js
│   │   │   │       ├── Immediate.js.map
│   │   │   │       ├── ObjectUnsubscribedError.js
│   │   │   │       ├── ObjectUnsubscribedError.js.map
│   │   │   │       ├── TimeoutError.js
│   │   │   │       ├── TimeoutError.js.map
│   │   │   │       ├── UnsubscriptionError.js
│   │   │   │       ├── UnsubscriptionError.js.map
│   │   │   │       ├── applyMixins.js
│   │   │   │       ├── applyMixins.js.map
│   │   │   │       ├── canReportError.js
│   │   │   │       ├── canReportError.js.map
│   │   │   │       ├── errorObject.js
│   │   │   │       ├── errorObject.js.map
│   │   │   │       ├── hostReportError.js
│   │   │   │       ├── hostReportError.js.map
│   │   │   │       ├── identity.js
│   │   │   │       ├── identity.js.map
│   │   │   │       ├── isArray.js
│   │   │   │       ├── isArray.js.map
│   │   │   │       ├── isArrayLike.js
│   │   │   │       ├── isArrayLike.js.map
│   │   │   │       ├── isDate.js
│   │   │   │       ├── isDate.js.map
│   │   │   │       ├── isFunction.js
│   │   │   │       ├── isFunction.js.map
│   │   │   │       ├── isInteropObservable.js
│   │   │   │       ├── isInteropObservable.js.map
│   │   │   │       ├── isIterable.js
│   │   │   │       ├── isIterable.js.map
│   │   │   │       ├── isNumeric.js
│   │   │   │       ├── isNumeric.js.map
│   │   │   │       ├── isObject.js
│   │   │   │       ├── isObject.js.map
│   │   │   │       ├── isObservable.js
│   │   │   │       ├── isObservable.js.map
│   │   │   │       ├── isPromise.js
│   │   │   │       ├── isPromise.js.map
│   │   │   │       ├── isScheduler.js
│   │   │   │       ├── isScheduler.js.map
│   │   │   │       ├── noop.js
│   │   │   │       ├── noop.js.map
│   │   │   │       ├── not.js
│   │   │   │       ├── not.js.map
│   │   │   │       ├── pipe.js
│   │   │   │       ├── pipe.js.map
│   │   │   │       ├── root.js
│   │   │   │       ├── root.js.map
│   │   │   │       ├── subscribeTo.js
│   │   │   │       ├── subscribeTo.js.map
│   │   │   │       ├── subscribeToArray.js
│   │   │   │       ├── subscribeToArray.js.map
│   │   │   │       ├── subscribeToIterable.js
│   │   │   │       ├── subscribeToIterable.js.map
│   │   │   │       ├── subscribeToObservable.js
│   │   │   │       ├── subscribeToObservable.js.map
│   │   │   │       ├── subscribeToPromise.js
│   │   │   │       ├── subscribeToPromise.js.map
│   │   │   │       ├── subscribeToResult.js
│   │   │   │       ├── subscribeToResult.js.map
│   │   │   │       ├── toSubscriber.js
│   │   │   │       ├── toSubscriber.js.map
│   │   │   │       ├── tryCatch.js
│   │   │   │       └── tryCatch.js.map
│   │   │   ├── internal-compatibility
│   │   │   │   ├── index.js
│   │   │   │   └── index.js.map
│   │   │   ├── operators
│   │   │   │   ├── index.js
│   │   │   │   └── index.js.map
│   │   │   ├── path-mapping.js
│   │   │   ├── testing
│   │   │   │   ├── index.js
│   │   │   │   └── index.js.map
│   │   │   └── webSocket
│   │   │       ├── index.js
│   │   │       └── index.js.map
│   │   ├── add
│   │   │   ├── observable
│   │   │   │   ├── bindCallback.d.ts
│   │   │   │   ├── bindCallback.js
│   │   │   │   ├── bindCallback.js.map
│   │   │   │   ├── bindNodeCallback.d.ts
│   │   │   │   ├── bindNodeCallback.js
│   │   │   │   ├── bindNodeCallback.js.map
│   │   │   │   ├── combineLatest.d.ts
│   │   │   │   ├── combineLatest.js
│   │   │   │   ├── combineLatest.js.map
│   │   │   │   ├── concat.d.ts
│   │   │   │   ├── concat.js
│   │   │   │   ├── concat.js.map
│   │   │   │   ├── defer.d.ts
│   │   │   │   ├── defer.js
│   │   │   │   ├── defer.js.map
│   │   │   │   ├── dom
│   │   │   │   │   ├── ajax.d.ts
│   │   │   │   │   ├── ajax.js
│   │   │   │   │   ├── ajax.js.map
│   │   │   │   │   ├── webSocket.d.ts
│   │   │   │   │   ├── webSocket.js
│   │   │   │   │   └── webSocket.js.map
│   │   │   │   ├── empty.d.ts
│   │   │   │   ├── empty.js
│   │   │   │   ├── empty.js.map
│   │   │   │   ├── forkJoin.d.ts
│   │   │   │   ├── forkJoin.js
│   │   │   │   ├── forkJoin.js.map
│   │   │   │   ├── from.d.ts
│   │   │   │   ├── from.js
│   │   │   │   ├── from.js.map
│   │   │   │   ├── fromEvent.d.ts
│   │   │   │   ├── fromEvent.js
│   │   │   │   ├── fromEvent.js.map
│   │   │   │   ├── fromEventPattern.d.ts
│   │   │   │   ├── fromEventPattern.js
│   │   │   │   ├── fromEventPattern.js.map
│   │   │   │   ├── fromPromise.d.ts
│   │   │   │   ├── fromPromise.js
│   │   │   │   ├── fromPromise.js.map
│   │   │   │   ├── generate.d.ts
│   │   │   │   ├── generate.js
│   │   │   │   ├── generate.js.map
│   │   │   │   ├── if.d.ts
│   │   │   │   ├── if.js
│   │   │   │   ├── if.js.map
│   │   │   │   ├── interval.d.ts
│   │   │   │   ├── interval.js
│   │   │   │   ├── interval.js.map
│   │   │   │   ├── merge.d.ts
│   │   │   │   ├── merge.js
│   │   │   │   ├── merge.js.map
│   │   │   │   ├── never.d.ts
│   │   │   │   ├── never.js
│   │   │   │   ├── never.js.map
│   │   │   │   ├── of.d.ts
│   │   │   │   ├── of.js
│   │   │   │   ├── of.js.map
│   │   │   │   ├── onErrorResumeNext.d.ts
│   │   │   │   ├── onErrorResumeNext.js
│   │   │   │   ├── onErrorResumeNext.js.map
│   │   │   │   ├── pairs.d.ts
│   │   │   │   ├── pairs.js
│   │   │   │   ├── pairs.js.map
│   │   │   │   ├── race.d.ts
│   │   │   │   ├── race.js
│   │   │   │   ├── race.js.map
│   │   │   │   ├── range.d.ts
│   │   │   │   ├── range.js
│   │   │   │   ├── range.js.map
│   │   │   │   ├── throw.d.ts
│   │   │   │   ├── throw.js
│   │   │   │   ├── throw.js.map
│   │   │   │   ├── timer.d.ts
│   │   │   │   ├── timer.js
│   │   │   │   ├── timer.js.map
│   │   │   │   ├── using.d.ts
│   │   │   │   ├── using.js
│   │   │   │   ├── using.js.map
│   │   │   │   ├── zip.d.ts
│   │   │   │   ├── zip.js
│   │   │   │   └── zip.js.map
│   │   │   └── operator
│   │   │       ├── audit.d.ts
│   │   │       ├── audit.js
│   │   │       ├── audit.js.map
│   │   │       ├── auditTime.d.ts
│   │   │       ├── auditTime.js
│   │   │       ├── auditTime.js.map
│   │   │       ├── buffer.d.ts
│   │   │       ├── buffer.js
│   │   │       ├── buffer.js.map
│   │   │       ├── bufferCount.d.ts
│   │   │       ├── bufferCount.js
│   │   │       ├── bufferCount.js.map
│   │   │       ├── bufferTime.d.ts
│   │   │       ├── bufferTime.js
│   │   │       ├── bufferTime.js.map
│   │   │       ├── bufferToggle.d.ts
│   │   │       ├── bufferToggle.js
│   │   │       ├── bufferToggle.js.map
│   │   │       ├── bufferWhen.d.ts
│   │   │       ├── bufferWhen.js
│   │   │       ├── bufferWhen.js.map
│   │   │       ├── catch.d.ts
│   │   │       ├── catch.js
│   │   │       ├── catch.js.map
│   │   │       ├── combineAll.d.ts
│   │   │       ├── combineAll.js
│   │   │       ├── combineAll.js.map
│   │   │       ├── combineLatest.d.ts
│   │   │       ├── combineLatest.js
│   │   │       ├── combineLatest.js.map
│   │   │       ├── concat.d.ts
│   │   │       ├── concat.js
│   │   │       ├── concat.js.map
│   │   │       ├── concatAll.d.ts
│   │   │       ├── concatAll.js
│   │   │       ├── concatAll.js.map
│   │   │       ├── concatMap.d.ts
│   │   │       ├── concatMap.js
│   │   │       ├── concatMap.js.map
│   │   │       ├── concatMapTo.d.ts
│   │   │       ├── concatMapTo.js
│   │   │       ├── concatMapTo.js.map
│   │   │       ├── count.d.ts
│   │   │       ├── count.js
│   │   │       ├── count.js.map
│   │   │       ├── debounce.d.ts
│   │   │       ├── debounce.js
│   │   │       ├── debounce.js.map
│   │   │       ├── debounceTime.d.ts
│   │   │       ├── debounceTime.js
│   │   │       ├── debounceTime.js.map
│   │   │       ├── defaultIfEmpty.d.ts
│   │   │       ├── defaultIfEmpty.js
│   │   │       ├── defaultIfEmpty.js.map
│   │   │       ├── delay.d.ts
│   │   │       ├── delay.js
│   │   │       ├── delay.js.map
│   │   │       ├── delayWhen.d.ts
│   │   │       ├── delayWhen.js
│   │   │       ├── delayWhen.js.map
│   │   │       ├── dematerialize.d.ts
│   │   │       ├── dematerialize.js
│   │   │       ├── dematerialize.js.map
│   │   │       ├── distinct.d.ts
│   │   │       ├── distinct.js
│   │   │       ├── distinct.js.map
│   │   │       ├── distinctUntilChanged.d.ts
│   │   │       ├── distinctUntilChanged.js
│   │   │       ├── distinctUntilChanged.js.map
│   │   │       ├── distinctUntilKeyChanged.d.ts
│   │   │       ├── distinctUntilKeyChanged.js
│   │   │       ├── distinctUntilKeyChanged.js.map
│   │   │       ├── do.d.ts
│   │   │       ├── do.js
│   │   │       ├── do.js.map
│   │   │       ├── elementAt.d.ts
│   │   │       ├── elementAt.js
│   │   │       ├── elementAt.js.map
│   │   │       ├── every.d.ts
│   │   │       ├── every.js
│   │   │       ├── every.js.map
│   │   │       ├── exhaust.d.ts
│   │   │       ├── exhaust.js
│   │   │       ├── exhaust.js.map
│   │   │       ├── exhaustMap.d.ts
│   │   │       ├── exhaustMap.js
│   │   │       ├── exhaustMap.js.map
│   │   │       ├── expand.d.ts
│   │   │       ├── expand.js
│   │   │       ├── expand.js.map
│   │   │       ├── filter.d.ts
│   │   │       ├── filter.js
│   │   │       ├── filter.js.map
│   │   │       ├── finally.d.ts
│   │   │       ├── finally.js
│   │   │       ├── finally.js.map
│   │   │       ├── find.d.ts
│   │   │       ├── find.js
│   │   │       ├── find.js.map
│   │   │       ├── findIndex.d.ts
│   │   │       ├── findIndex.js
│   │   │       ├── findIndex.js.map
│   │   │       ├── first.d.ts
│   │   │       ├── first.js
│   │   │       ├── first.js.map
│   │   │       ├── groupBy.d.ts
│   │   │       ├── groupBy.js
│   │   │       ├── groupBy.js.map
│   │   │       ├── ignoreElements.d.ts
│   │   │       ├── ignoreElements.js
│   │   │       ├── ignoreElements.js.map
│   │   │       ├── isEmpty.d.ts
│   │   │       ├── isEmpty.js
│   │   │       ├── isEmpty.js.map
│   │   │       ├── last.d.ts
│   │   │       ├── last.js
│   │   │       ├── last.js.map
│   │   │       ├── let.d.ts
│   │   │       ├── let.js
│   │   │       ├── let.js.map
│   │   │       ├── map.d.ts
│   │   │       ├── map.js
│   │   │       ├── map.js.map
│   │   │       ├── mapTo.d.ts
│   │   │       ├── mapTo.js
│   │   │       ├── mapTo.js.map
│   │   │       ├── materialize.d.ts
│   │   │       ├── materialize.js
│   │   │       ├── materialize.js.map
│   │   │       ├── max.d.ts
│   │   │       ├── max.js
│   │   │       ├── max.js.map
│   │   │       ├── merge.d.ts
│   │   │       ├── merge.js
│   │   │       ├── merge.js.map
│   │   │       ├── mergeAll.d.ts
│   │   │       ├── mergeAll.js
│   │   │       ├── mergeAll.js.map
│   │   │       ├── mergeMap.d.ts
│   │   │       ├── mergeMap.js
│   │   │       ├── mergeMap.js.map
│   │   │       ├── mergeMapTo.d.ts
│   │   │       ├── mergeMapTo.js
│   │   │       ├── mergeMapTo.js.map
│   │   │       ├── mergeScan.d.ts
│   │   │       ├── mergeScan.js
│   │   │       ├── mergeScan.js.map
│   │   │       ├── min.d.ts
│   │   │       ├── min.js
│   │   │       ├── min.js.map
│   │   │       ├── multicast.d.ts
│   │   │       ├── multicast.js
│   │   │       ├── multicast.js.map
│   │   │       ├── observeOn.d.ts
│   │   │       ├── observeOn.js
│   │   │       ├── observeOn.js.map
│   │   │       ├── onErrorResumeNext.d.ts
│   │   │       ├── onErrorResumeNext.js
│   │   │       ├── onErrorResumeNext.js.map
│   │   │       ├── pairwise.d.ts
│   │   │       ├── pairwise.js
│   │   │       ├── pairwise.js.map
│   │   │       ├── partition.d.ts
│   │   │       ├── partition.js
│   │   │       ├── partition.js.map
│   │   │       ├── pluck.d.ts
│   │   │       ├── pluck.js
│   │   │       ├── pluck.js.map
│   │   │       ├── publish.d.ts
│   │   │       ├── publish.js
│   │   │       ├── publish.js.map
│   │   │       ├── publishBehavior.d.ts
│   │   │       ├── publishBehavior.js
│   │   │       ├── publishBehavior.js.map
│   │   │       ├── publishLast.d.ts
│   │   │       ├── publishLast.js
│   │   │       ├── publishLast.js.map
│   │   │       ├── publishReplay.d.ts
│   │   │       ├── publishReplay.js
│   │   │       ├── publishReplay.js.map
│   │   │       ├── race.d.ts
│   │   │       ├── race.js
│   │   │       ├── race.js.map
│   │   │       ├── reduce.d.ts
│   │   │       ├── reduce.js
│   │   │       ├── reduce.js.map
│   │   │       ├── repeat.d.ts
│   │   │       ├── repeat.js
│   │   │       ├── repeat.js.map
│   │   │       ├── repeatWhen.d.ts
│   │   │       ├── repeatWhen.js
│   │   │       ├── repeatWhen.js.map
│   │   │       ├── retry.d.ts
│   │   │       ├── retry.js
│   │   │       ├── retry.js.map
│   │   │       ├── retryWhen.d.ts
│   │   │       ├── retryWhen.js
│   │   │       ├── retryWhen.js.map
│   │   │       ├── sample.d.ts
│   │   │       ├── sample.js
│   │   │       ├── sample.js.map
│   │   │       ├── sampleTime.d.ts
│   │   │       ├── sampleTime.js
│   │   │       ├── sampleTime.js.map
│   │   │       ├── scan.d.ts
│   │   │       ├── scan.js
│   │   │       ├── scan.js.map
│   │   │       ├── sequenceEqual.d.ts
│   │   │       ├── sequenceEqual.js
│   │   │       ├── sequenceEqual.js.map
│   │   │       ├── share.d.ts
│   │   │       ├── share.js
│   │   │       ├── share.js.map
│   │   │       ├── shareReplay.d.ts
│   │   │       ├── shareReplay.js
│   │   │       ├── shareReplay.js.map
│   │   │       ├── single.d.ts
│   │   │       ├── single.js
│   │   │       ├── single.js.map
│   │   │       ├── skip.d.ts
│   │   │       ├── skip.js
│   │   │       ├── skip.js.map
│   │   │       ├── skipLast.d.ts
│   │   │       ├── skipLast.js
│   │   │       ├── skipLast.js.map
│   │   │       ├── skipUntil.d.ts
│   │   │       ├── skipUntil.js
│   │   │       ├── skipUntil.js.map
│   │   │       ├── skipWhile.d.ts
│   │   │       ├── skipWhile.js
│   │   │       ├── skipWhile.js.map
│   │   │       ├── startWith.d.ts
│   │   │       ├── startWith.js
│   │   │       ├── startWith.js.map
│   │   │       ├── subscribeOn.d.ts
│   │   │       ├── subscribeOn.js
│   │   │       ├── subscribeOn.js.map
│   │   │       ├── switch.d.ts
│   │   │       ├── switch.js
│   │   │       ├── switch.js.map
│   │   │       ├── switchMap.d.ts
│   │   │       ├── switchMap.js
│   │   │       ├── switchMap.js.map
│   │   │       ├── switchMapTo.d.ts
│   │   │       ├── switchMapTo.js
│   │   │       ├── switchMapTo.js.map
│   │   │       ├── take.d.ts
│   │   │       ├── take.js
│   │   │       ├── take.js.map
│   │   │       ├── takeLast.d.ts
│   │   │       ├── takeLast.js
│   │   │       ├── takeLast.js.map
│   │   │       ├── takeUntil.d.ts
│   │   │       ├── takeUntil.js
│   │   │       ├── takeUntil.js.map
│   │   │       ├── takeWhile.d.ts
│   │   │       ├── takeWhile.js
│   │   │       ├── takeWhile.js.map
│   │   │       ├── throttle.d.ts
│   │   │       ├── throttle.js
│   │   │       ├── throttle.js.map
│   │   │       ├── throttleTime.d.ts
│   │   │       ├── throttleTime.js
│   │   │       ├── throttleTime.js.map
│   │   │       ├── timeInterval.d.ts
│   │   │       ├── timeInterval.js
│   │   │       ├── timeInterval.js.map
│   │   │       ├── timeout.d.ts
│   │   │       ├── timeout.js
│   │   │       ├── timeout.js.map
│   │   │       ├── timeoutWith.d.ts
│   │   │       ├── timeoutWith.js
│   │   │       ├── timeoutWith.js.map
│   │   │       ├── timestamp.d.ts
│   │   │       ├── timestamp.js
│   │   │       ├── timestamp.js.map
│   │   │       ├── toArray.d.ts
│   │   │       ├── toArray.js
│   │   │       ├── toArray.js.map
│   │   │       ├── toPromise.d.ts
│   │   │       ├── toPromise.js
│   │   │       ├── toPromise.js.map
│   │   │       ├── window.d.ts
│   │   │       ├── window.js
│   │   │       ├── window.js.map
│   │   │       ├── windowCount.d.ts
│   │   │       ├── windowCount.js
│   │   │       ├── windowCount.js.map
│   │   │       ├── windowTime.d.ts
│   │   │       ├── windowTime.js
│   │   │       ├── windowTime.js.map
│   │   │       ├── windowToggle.d.ts
│   │   │       ├── windowToggle.js
│   │   │       ├── windowToggle.js.map
│   │   │       ├── windowWhen.d.ts
│   │   │       ├── windowWhen.js
│   │   │       ├── windowWhen.js.map
│   │   │       ├── withLatestFrom.d.ts
│   │   │       ├── withLatestFrom.js
│   │   │       ├── withLatestFrom.js.map
│   │   │       ├── zip.d.ts
│   │   │       ├── zip.js
│   │   │       ├── zip.js.map
│   │   │       ├── zipAll.d.ts
│   │   │       ├── zipAll.js
│   │   │       └── zipAll.js.map
│   │   ├── ajax
│   │   │   ├── index.d.ts
│   │   │   ├── index.js
│   │   │   ├── index.js.map
│   │   │   └── package.json
│   │   ├── bundles
│   │   │   ├── rxjs.umd.js
│   │   │   ├── rxjs.umd.js.map
│   │   │   ├── rxjs.umd.min.js
│   │   │   └── rxjs.umd.min.js.map
│   │   ├── index.d.ts
│   │   ├── index.js
│   │   ├── index.js.map
│   │   ├── interfaces.d.ts
│   │   ├── interfaces.js
│   │   ├── interfaces.js.map
│   │   ├── internal
│   │   │   ├── AsyncSubject.d.ts
│   │   │   ├── AsyncSubject.js
│   │   │   ├── AsyncSubject.js.map
│   │   │   ├── BehaviorSubject.d.ts
│   │   │   ├── BehaviorSubject.js
│   │   │   ├── BehaviorSubject.js.map
│   │   │   ├── InnerSubscriber.d.ts
│   │   │   ├── InnerSubscriber.js
│   │   │   ├── InnerSubscriber.js.map
│   │   │   ├── Notification.d.ts
│   │   │   ├── Notification.js
│   │   │   ├── Notification.js.map
│   │   │   ├── Observable.d.ts
│   │   │   ├── Observable.js
│   │   │   ├── Observable.js.map
│   │   │   ├── Observer.d.ts
│   │   │   ├── Observer.js
│   │   │   ├── Observer.js.map
│   │   │   ├── Operator.d.ts
│   │   │   ├── Operator.js
│   │   │   ├── Operator.js.map
│   │   │   ├── OuterSubscriber.d.ts
│   │   │   ├── OuterSubscriber.js
│   │   │   ├── OuterSubscriber.js.map
│   │   │   ├── ReplaySubject.d.ts
│   │   │   ├── ReplaySubject.js
│   │   │   ├── ReplaySubject.js.map
│   │   │   ├── Rx.d.ts
│   │   │   ├── Rx.js
│   │   │   ├── Rx.js.map
│   │   │   ├── Scheduler.d.ts
│   │   │   ├── Scheduler.js
│   │   │   ├── Scheduler.js.map
│   │   │   ├── Subject.d.ts
│   │   │   ├── Subject.js
│   │   │   ├── Subject.js.map
│   │   │   ├── SubjectSubscription.d.ts
│   │   │   ├── SubjectSubscription.js
│   │   │   ├── SubjectSubscription.js.map
│   │   │   ├── Subscriber.d.ts
│   │   │   ├── Subscriber.js
│   │   │   ├── Subscriber.js.map
│   │   │   ├── Subscription.d.ts
│   │   │   ├── Subscription.js
│   │   │   ├── Subscription.js.map
│   │   │   ├── config.d.ts
│   │   │   ├── config.js
│   │   │   ├── config.js.map
│   │   │   ├── observable
│   │   │   │   ├── ConnectableObservable.d.ts
│   │   │   │   ├── ConnectableObservable.js
│   │   │   │   ├── ConnectableObservable.js.map
│   │   │   │   ├── SubscribeOnObservable.d.ts
│   │   │   │   ├── SubscribeOnObservable.js
│   │   │   │   ├── SubscribeOnObservable.js.map
│   │   │   │   ├── bindCallback.d.ts
│   │   │   │   ├── bindCallback.js
│   │   │   │   ├── bindCallback.js.map
│   │   │   │   ├── bindNodeCallback.d.ts
│   │   │   │   ├── bindNodeCallback.js
│   │   │   │   ├── bindNodeCallback.js.map
│   │   │   │   ├── combineLatest.d.ts
│   │   │   │   ├── combineLatest.js
│   │   │   │   ├── combineLatest.js.map
│   │   │   │   ├── concat.d.ts
│   │   │   │   ├── concat.js
│   │   │   │   ├── concat.js.map
│   │   │   │   ├── defer.d.ts
│   │   │   │   ├── defer.js
│   │   │   │   ├── defer.js.map
│   │   │   │   ├── dom
│   │   │   │   │   ├── AjaxObservable.d.ts
│   │   │   │   │   ├── AjaxObservable.js
│   │   │   │   │   ├── AjaxObservable.js.map
│   │   │   │   │   ├── WebSocketSubject.d.ts
│   │   │   │   │   ├── WebSocketSubject.js
│   │   │   │   │   ├── WebSocketSubject.js.map
│   │   │   │   │   ├── ajax.d.ts
│   │   │   │   │   ├── ajax.js
│   │   │   │   │   ├── ajax.js.map
│   │   │   │   │   ├── webSocket.d.ts
│   │   │   │   │   ├── webSocket.js
│   │   │   │   │   └── webSocket.js.map
│   │   │   │   ├── empty.d.ts
│   │   │   │   ├── empty.js
│   │   │   │   ├── empty.js.map
│   │   │   │   ├── forkJoin.d.ts
│   │   │   │   ├── forkJoin.js
│   │   │   │   ├── forkJoin.js.map
│   │   │   │   ├── from.d.ts
│   │   │   │   ├── from.js
│   │   │   │   ├── from.js.map
│   │   │   │   ├── fromArray.d.ts
│   │   │   │   ├── fromArray.js
│   │   │   │   ├── fromArray.js.map
│   │   │   │   ├── fromEvent.d.ts
│   │   │   │   ├── fromEvent.js
│   │   │   │   ├── fromEvent.js.map
│   │   │   │   ├── fromEventPattern.d.ts
│   │   │   │   ├── fromEventPattern.js
│   │   │   │   ├── fromEventPattern.js.map
│   │   │   │   ├── fromIterable.d.ts
│   │   │   │   ├── fromIterable.js
│   │   │   │   ├── fromIterable.js.map
│   │   │   │   ├── fromObservable.d.ts
│   │   │   │   ├── fromObservable.js
│   │   │   │   ├── fromObservable.js.map
│   │   │   │   ├── fromPromise.d.ts
│   │   │   │   ├── fromPromise.js
│   │   │   │   ├── fromPromise.js.map
│   │   │   │   ├── generate.d.ts
│   │   │   │   ├── generate.js
│   │   │   │   ├── generate.js.map
│   │   │   │   ├── iif.d.ts
│   │   │   │   ├── iif.js
│   │   │   │   ├── iif.js.map
│   │   │   │   ├── interval.d.ts
│   │   │   │   ├── interval.js
│   │   │   │   ├── interval.js.map
│   │   │   │   ├── merge.d.ts
│   │   │   │   ├── merge.js
│   │   │   │   ├── merge.js.map
│   │   │   │   ├── never.d.ts
│   │   │   │   ├── never.js
│   │   │   │   ├── never.js.map
│   │   │   │   ├── of.d.ts
│   │   │   │   ├── of.js
│   │   │   │   ├── of.js.map
│   │   │   │   ├── onErrorResumeNext.d.ts
│   │   │   │   ├── onErrorResumeNext.js
│   │   │   │   ├── onErrorResumeNext.js.map
│   │   │   │   ├── pairs.d.ts
│   │   │   │   ├── pairs.js
│   │   │   │   ├── pairs.js.map
│   │   │   │   ├── race.d.ts
│   │   │   │   ├── race.js
│   │   │   │   ├── race.js.map
│   │   │   │   ├── range.d.ts
│   │   │   │   ├── range.js
│   │   │   │   ├── range.js.map
│   │   │   │   ├── scalar.d.ts
│   │   │   │   ├── scalar.js
│   │   │   │   ├── scalar.js.map
│   │   │   │   ├── throwError.d.ts
│   │   │   │   ├── throwError.js
│   │   │   │   ├── throwError.js.map
│   │   │   │   ├── timer.d.ts
│   │   │   │   ├── timer.js
│   │   │   │   ├── timer.js.map
│   │   │   │   ├── using.d.ts
│   │   │   │   ├── using.js
│   │   │   │   ├── using.js.map
│   │   │   │   ├── zip.d.ts
│   │   │   │   ├── zip.js
│   │   │   │   └── zip.js.map
│   │   │   ├── operators
│   │   │   │   ├── audit.d.ts
│   │   │   │   ├── audit.js
│   │   │   │   ├── audit.js.map
│   │   │   │   ├── auditTime.d.ts
│   │   │   │   ├── auditTime.js
│   │   │   │   ├── auditTime.js.map
│   │   │   │   ├── buffer.d.ts
│   │   │   │   ├── buffer.js
│   │   │   │   ├── buffer.js.map
│   │   │   │   ├── bufferCount.d.ts
│   │   │   │   ├── bufferCount.js
│   │   │   │   ├── bufferCount.js.map
│   │   │   │   ├── bufferTime.d.ts
│   │   │   │   ├── bufferTime.js
│   │   │   │   ├── bufferTime.js.map
│   │   │   │   ├── bufferToggle.d.ts
│   │   │   │   ├── bufferToggle.js
│   │   │   │   ├── bufferToggle.js.map
│   │   │   │   ├── bufferWhen.d.ts
│   │   │   │   ├── bufferWhen.js
│   │   │   │   ├── bufferWhen.js.map
│   │   │   │   ├── catchError.d.ts
│   │   │   │   ├── catchError.js
│   │   │   │   ├── catchError.js.map
│   │   │   │   ├── combineAll.d.ts
│   │   │   │   ├── combineAll.js
│   │   │   │   ├── combineAll.js.map
│   │   │   │   ├── combineLatest.d.ts
│   │   │   │   ├── combineLatest.js
│   │   │   │   ├── combineLatest.js.map
│   │   │   │   ├── concat.d.ts
│   │   │   │   ├── concat.js
│   │   │   │   ├── concat.js.map
│   │   │   │   ├── concatAll.d.ts
│   │   │   │   ├── concatAll.js
│   │   │   │   ├── concatAll.js.map
│   │   │   │   ├── concatMap.d.ts
│   │   │   │   ├── concatMap.js
│   │   │   │   ├── concatMap.js.map
│   │   │   │   ├── concatMapTo.d.ts
│   │   │   │   ├── concatMapTo.js
│   │   │   │   ├── concatMapTo.js.map
│   │   │   │   ├── count.d.ts
│   │   │   │   ├── count.js
│   │   │   │   ├── count.js.map
│   │   │   │   ├── debounce.d.ts
│   │   │   │   ├── debounce.js
│   │   │   │   ├── debounce.js.map
│   │   │   │   ├── debounceTime.d.ts
│   │   │   │   ├── debounceTime.js
│   │   │   │   ├── debounceTime.js.map
│   │   │   │   ├── defaultIfEmpty.d.ts
│   │   │   │   ├── defaultIfEmpty.js
│   │   │   │   ├── defaultIfEmpty.js.map
│   │   │   │   ├── delay.d.ts
│   │   │   │   ├── delay.js
│   │   │   │   ├── delay.js.map
│   │   │   │   ├── delayWhen.d.ts
│   │   │   │   ├── delayWhen.js
│   │   │   │   ├── delayWhen.js.map
│   │   │   │   ├── dematerialize.d.ts
│   │   │   │   ├── dematerialize.js
│   │   │   │   ├── dematerialize.js.map
│   │   │   │   ├── distinct.d.ts
│   │   │   │   ├── distinct.js
│   │   │   │   ├── distinct.js.map
│   │   │   │   ├── distinctUntilChanged.d.ts
│   │   │   │   ├── distinctUntilChanged.js
│   │   │   │   ├── distinctUntilChanged.js.map
│   │   │   │   ├── distinctUntilKeyChanged.d.ts
│   │   │   │   ├── distinctUntilKeyChanged.js
│   │   │   │   ├── distinctUntilKeyChanged.js.map
│   │   │   │   ├── elementAt.d.ts
│   │   │   │   ├── elementAt.js
│   │   │   │   ├── elementAt.js.map
│   │   │   │   ├── endWith.d.ts
│   │   │   │   ├── endWith.js
│   │   │   │   ├── endWith.js.map
│   │   │   │   ├── every.d.ts
│   │   │   │   ├── every.js
│   │   │   │   ├── every.js.map
│   │   │   │   ├── exhaust.d.ts
│   │   │   │   ├── exhaust.js
│   │   │   │   ├── exhaust.js.map
│   │   │   │   ├── exhaustMap.d.ts
│   │   │   │   ├── exhaustMap.js
│   │   │   │   ├── exhaustMap.js.map
│   │   │   │   ├── expand.d.ts
│   │   │   │   ├── expand.js
│   │   │   │   ├── expand.js.map
│   │   │   │   ├── filter.d.ts
│   │   │   │   ├── filter.js
│   │   │   │   ├── filter.js.map
│   │   │   │   ├── finalize.d.ts
│   │   │   │   ├── finalize.js
│   │   │   │   ├── finalize.js.map
│   │   │   │   ├── find.d.ts
│   │   │   │   ├── find.js
│   │   │   │   ├── find.js.map
│   │   │   │   ├── findIndex.d.ts
│   │   │   │   ├── findIndex.js
│   │   │   │   ├── findIndex.js.map
│   │   │   │   ├── first.d.ts
│   │   │   │   ├── first.js
│   │   │   │   ├── first.js.map
│   │   │   │   ├── groupBy.d.ts
│   │   │   │   ├── groupBy.js
│   │   │   │   ├── groupBy.js.map
│   │   │   │   ├── ignoreElements.d.ts
│   │   │   │   ├── ignoreElements.js
│   │   │   │   ├── ignoreElements.js.map
│   │   │   │   ├── index.d.ts
│   │   │   │   ├── index.js
│   │   │   │   ├── index.js.map
│   │   │   │   ├── isEmpty.d.ts
│   │   │   │   ├── isEmpty.js
│   │   │   │   ├── isEmpty.js.map
│   │   │   │   ├── last.d.ts
│   │   │   │   ├── last.js
│   │   │   │   ├── last.js.map
│   │   │   │   ├── map.d.ts
│   │   │   │   ├── map.js
│   │   │   │   ├── map.js.map
│   │   │   │   ├── mapTo.d.ts
│   │   │   │   ├── mapTo.js
│   │   │   │   ├── mapTo.js.map
│   │   │   │   ├── materialize.d.ts
│   │   │   │   ├── materialize.js
│   │   │   │   ├── materialize.js.map
│   │   │   │   ├── max.d.ts
│   │   │   │   ├── max.js
│   │   │   │   ├── max.js.map
│   │   │   │   ├── merge.d.ts
│   │   │   │   ├── merge.js
│   │   │   │   ├── merge.js.map
│   │   │   │   ├── mergeAll.d.ts
│   │   │   │   ├── mergeAll.js
│   │   │   │   ├── mergeAll.js.map
│   │   │   │   ├── mergeMap.d.ts
│   │   │   │   ├── mergeMap.js
│   │   │   │   ├── mergeMap.js.map
│   │   │   │   ├── mergeMapTo.d.ts
│   │   │   │   ├── mergeMapTo.js
│   │   │   │   ├── mergeMapTo.js.map
│   │   │   │   ├── mergeScan.d.ts
│   │   │   │   ├── mergeScan.js
│   │   │   │   ├── mergeScan.js.map
│   │   │   │   ├── min.d.ts
│   │   │   │   ├── min.js
│   │   │   │   ├── min.js.map
│   │   │   │   ├── multicast.d.ts
│   │   │   │   ├── multicast.js
│   │   │   │   ├── multicast.js.map
│   │   │   │   ├── observeOn.d.ts
│   │   │   │   ├── observeOn.js
│   │   │   │   ├── observeOn.js.map
│   │   │   │   ├── onErrorResumeNext.d.ts
│   │   │   │   ├── onErrorResumeNext.js
│   │   │   │   ├── onErrorResumeNext.js.map
│   │   │   │   ├── pairwise.d.ts
│   │   │   │   ├── pairwise.js
│   │   │   │   ├── pairwise.js.map
│   │   │   │   ├── partition.d.ts
│   │   │   │   ├── partition.js
│   │   │   │   ├── partition.js.map
│   │   │   │   ├── pluck.d.ts
│   │   │   │   ├── pluck.js
│   │   │   │   ├── pluck.js.map
│   │   │   │   ├── publish.d.ts
│   │   │   │   ├── publish.js
│   │   │   │   ├── publish.js.map
│   │   │   │   ├── publishBehavior.d.ts
│   │   │   │   ├── publishBehavior.js
│   │   │   │   ├── publishBehavior.js.map
│   │   │   │   ├── publishLast.d.ts
│   │   │   │   ├── publishLast.js
│   │   │   │   ├── publishLast.js.map
│   │   │   │   ├── publishReplay.d.ts
│   │   │   │   ├── publishReplay.js
│   │   │   │   ├── publishReplay.js.map
│   │   │   │   ├── race.d.ts
│   │   │   │   ├── race.js
│   │   │   │   ├── race.js.map
│   │   │   │   ├── reduce.d.ts
│   │   │   │   ├── reduce.js
│   │   │   │   ├── reduce.js.map
│   │   │   │   ├── refCount.d.ts
│   │   │   │   ├── refCount.js
│   │   │   │   ├── refCount.js.map
│   │   │   │   ├── repeat.d.ts
│   │   │   │   ├── repeat.js
│   │   │   │   ├── repeat.js.map
│   │   │   │   ├── repeatWhen.d.ts
│   │   │   │   ├── repeatWhen.js
│   │   │   │   ├── repeatWhen.js.map
│   │   │   │   ├── retry.d.ts
│   │   │   │   ├── retry.js
│   │   │   │   ├── retry.js.map
│   │   │   │   ├── retryWhen.d.ts
│   │   │   │   ├── retryWhen.js
│   │   │   │   ├── retryWhen.js.map
│   │   │   │   ├── sample.d.ts
│   │   │   │   ├── sample.js
│   │   │   │   ├── sample.js.map
│   │   │   │   ├── sampleTime.d.ts
│   │   │   │   ├── sampleTime.js
│   │   │   │   ├── sampleTime.js.map
│   │   │   │   ├── scan.d.ts
│   │   │   │   ├── scan.js
│   │   │   │   ├── scan.js.map
│   │   │   │   ├── sequenceEqual.d.ts
│   │   │   │   ├── sequenceEqual.js
│   │   │   │   ├── sequenceEqual.js.map
│   │   │   │   ├── share.d.ts
│   │   │   │   ├── share.js
│   │   │   │   ├── share.js.map
│   │   │   │   ├── shareReplay.d.ts
│   │   │   │   ├── shareReplay.js
│   │   │   │   ├── shareReplay.js.map
│   │   │   │   ├── single.d.ts
│   │   │   │   ├── single.js
│   │   │   │   ├── single.js.map
│   │   │   │   ├── skip.d.ts
│   │   │   │   ├── skip.js
│   │   │   │   ├── skip.js.map
│   │   │   │   ├── skipLast.d.ts
│   │   │   │   ├── skipLast.js
│   │   │   │   ├── skipLast.js.map
│   │   │   │   ├── skipUntil.d.ts
│   │   │   │   ├── skipUntil.js
│   │   │   │   ├── skipUntil.js.map
│   │   │   │   ├── skipWhile.d.ts
│   │   │   │   ├── skipWhile.js
│   │   │   │   ├── skipWhile.js.map
│   │   │   │   ├── startWith.d.ts
│   │   │   │   ├── startWith.js
│   │   │   │   ├── startWith.js.map
│   │   │   │   ├── subscribeOn.d.ts
│   │   │   │   ├── subscribeOn.js
│   │   │   │   ├── subscribeOn.js.map
│   │   │   │   ├── switchAll.d.ts
│   │   │   │   ├── switchAll.js
│   │   │   │   ├── switchAll.js.map
│   │   │   │   ├── switchMap.d.ts
│   │   │   │   ├── switchMap.js
│   │   │   │   ├── switchMap.js.map
│   │   │   │   ├── switchMapTo.d.ts
│   │   │   │   ├── switchMapTo.js
│   │   │   │   ├── switchMapTo.js.map
│   │   │   │   ├── take.d.ts
│   │   │   │   ├── take.js
│   │   │   │   ├── take.js.map
│   │   │   │   ├── takeLast.d.ts
│   │   │   │   ├── takeLast.js
│   │   │   │   ├── takeLast.js.map
│   │   │   │   ├── takeUntil.d.ts
│   │   │   │   ├── takeUntil.js
│   │   │   │   ├── takeUntil.js.map
│   │   │   │   ├── takeWhile.d.ts
│   │   │   │   ├── takeWhile.js
│   │   │   │   ├── takeWhile.js.map
│   │   │   │   ├── tap.d.ts
│   │   │   │   ├── tap.js
│   │   │   │   ├── tap.js.map
│   │   │   │   ├── throttle.d.ts
│   │   │   │   ├── throttle.js
│   │   │   │   ├── throttle.js.map
│   │   │   │   ├── throttleTime.d.ts
│   │   │   │   ├── throttleTime.js
│   │   │   │   ├── throttleTime.js.map
│   │   │   │   ├── throwIfEmpty.d.ts
│   │   │   │   ├── throwIfEmpty.js
│   │   │   │   ├── throwIfEmpty.js.map
│   │   │   │   ├── timeInterval.d.ts
│   │   │   │   ├── timeInterval.js
│   │   │   │   ├── timeInterval.js.map
│   │   │   │   ├── timeout.d.ts
│   │   │   │   ├── timeout.js
│   │   │   │   ├── timeout.js.map
│   │   │   │   ├── timeoutWith.d.ts
│   │   │   │   ├── timeoutWith.js
│   │   │   │   ├── timeoutWith.js.map
│   │   │   │   ├── timestamp.d.ts
│   │   │   │   ├── timestamp.js
│   │   │   │   ├── timestamp.js.map
│   │   │   │   ├── toArray.d.ts
│   │   │   │   ├── toArray.js
│   │   │   │   ├── toArray.js.map
│   │   │   │   ├── window.d.ts
│   │   │   │   ├── window.js
│   │   │   │   ├── window.js.map
│   │   │   │   ├── windowCount.d.ts
│   │   │   │   ├── windowCount.js
│   │   │   │   ├── windowCount.js.map
│   │   │   │   ├── windowTime.d.ts
│   │   │   │   ├── windowTime.js
│   │   │   │   ├── windowTime.js.map
│   │   │   │   ├── windowToggle.d.ts
│   │   │   │   ├── windowToggle.js
│   │   │   │   ├── windowToggle.js.map
│   │   │   │   ├── windowWhen.d.ts
│   │   │   │   ├── windowWhen.js
│   │   │   │   ├── windowWhen.js.map
│   │   │   │   ├── withLatestFrom.d.ts
│   │   │   │   ├── withLatestFrom.js
│   │   │   │   ├── withLatestFrom.js.map
│   │   │   │   ├── zip.d.ts
│   │   │   │   ├── zip.js
│   │   │   │   ├── zip.js.map
│   │   │   │   ├── zipAll.d.ts
│   │   │   │   ├── zipAll.js
│   │   │   │   └── zipAll.js.map
│   │   │   ├── scheduler
│   │   │   │   ├── Action.d.ts
│   │   │   │   ├── Action.js
│   │   │   │   ├── Action.js.map
│   │   │   │   ├── AnimationFrameAction.d.ts
│   │   │   │   ├── AnimationFrameAction.js
│   │   │   │   ├── AnimationFrameAction.js.map
│   │   │   │   ├── AnimationFrameScheduler.d.ts
│   │   │   │   ├── AnimationFrameScheduler.js
│   │   │   │   ├── AnimationFrameScheduler.js.map
│   │   │   │   ├── AsapAction.d.ts
│   │   │   │   ├── AsapAction.js
│   │   │   │   ├── AsapAction.js.map
│   │   │   │   ├── AsapScheduler.d.ts
│   │   │   │   ├── AsapScheduler.js
│   │   │   │   ├── AsapScheduler.js.map
│   │   │   │   ├── AsyncAction.d.ts
│   │   │   │   ├── AsyncAction.js
│   │   │   │   ├── AsyncAction.js.map
│   │   │   │   ├── AsyncScheduler.d.ts
│   │   │   │   ├── AsyncScheduler.js
│   │   │   │   ├── AsyncScheduler.js.map
│   │   │   │   ├── QueueAction.d.ts
│   │   │   │   ├── QueueAction.js
│   │   │   │   ├── QueueAction.js.map
│   │   │   │   ├── QueueScheduler.d.ts
│   │   │   │   ├── QueueScheduler.js
│   │   │   │   ├── QueueScheduler.js.map
│   │   │   │   ├── VirtualTimeScheduler.d.ts
│   │   │   │   ├── VirtualTimeScheduler.js
│   │   │   │   ├── VirtualTimeScheduler.js.map
│   │   │   │   ├── animationFrame.d.ts
│   │   │   │   ├── animationFrame.js
│   │   │   │   ├── animationFrame.js.map
│   │   │   │   ├── asap.d.ts
│   │   │   │   ├── asap.js
│   │   │   │   ├── asap.js.map
│   │   │   │   ├── async.d.ts
│   │   │   │   ├── async.js
│   │   │   │   ├── async.js.map
│   │   │   │   ├── queue.d.ts
│   │   │   │   ├── queue.js
│   │   │   │   └── queue.js.map
│   │   │   ├── symbol
│   │   │   │   ├── iterator.d.ts
│   │   │   │   ├── iterator.js
│   │   │   │   ├── iterator.js.map
│   │   │   │   ├── observable.d.ts
│   │   │   │   ├── observable.js
│   │   │   │   ├── observable.js.map
│   │   │   │   ├── rxSubscriber.d.ts
│   │   │   │   ├── rxSubscriber.js
│   │   │   │   └── rxSubscriber.js.map
│   │   │   ├── testing
│   │   │   │   ├── ColdObservable.d.ts
│   │   │   │   ├── ColdObservable.js
│   │   │   │   ├── ColdObservable.js.map
│   │   │   │   ├── HotObservable.d.ts
│   │   │   │   ├── HotObservable.js
│   │   │   │   ├── HotObservable.js.map
│   │   │   │   ├── SubscriptionLog.d.ts
│   │   │   │   ├── SubscriptionLog.js
│   │   │   │   ├── SubscriptionLog.js.map
│   │   │   │   ├── SubscriptionLoggable.d.ts
│   │   │   │   ├── SubscriptionLoggable.js
│   │   │   │   ├── SubscriptionLoggable.js.map
│   │   │   │   ├── TestMessage.d.ts
│   │   │   │   ├── TestMessage.js
│   │   │   │   ├── TestMessage.js.map
│   │   │   │   ├── TestScheduler.d.ts
│   │   │   │   ├── TestScheduler.js
│   │   │   │   └── TestScheduler.js.map
│   │   │   ├── types.d.ts
│   │   │   ├── types.js
│   │   │   ├── types.js.map
│   │   │   └── util
│   │   │       ├── ArgumentOutOfRangeError.d.ts
│   │   │       ├── ArgumentOutOfRangeError.js
│   │   │       ├── ArgumentOutOfRangeError.js.map
│   │   │       ├── EmptyError.d.ts
│   │   │       ├── EmptyError.js
│   │   │       ├── EmptyError.js.map
│   │   │       ├── Immediate.d.ts
│   │   │       ├── Immediate.js
│   │   │       ├── Immediate.js.map
│   │   │       ├── ObjectUnsubscribedError.d.ts
│   │   │       ├── ObjectUnsubscribedError.js
│   │   │       ├── ObjectUnsubscribedError.js.map
│   │   │       ├── TimeoutError.d.ts
│   │   │       ├── TimeoutError.js
│   │   │       ├── TimeoutError.js.map
│   │   │       ├── UnsubscriptionError.d.ts
│   │   │       ├── UnsubscriptionError.js
│   │   │       ├── UnsubscriptionError.js.map
│   │   │       ├── applyMixins.d.ts
│   │   │       ├── applyMixins.js
│   │   │       ├── applyMixins.js.map
│   │   │       ├── canReportError.d.ts
│   │   │       ├── canReportError.js
│   │   │       ├── canReportError.js.map
│   │   │       ├── errorObject.d.ts
│   │   │       ├── errorObject.js
│   │   │       ├── errorObject.js.map
│   │   │       ├── hostReportError.d.ts
│   │   │       ├── hostReportError.js
│   │   │       ├── hostReportError.js.map
│   │   │       ├── identity.d.ts
│   │   │       ├── identity.js
│   │   │       ├── identity.js.map
│   │   │       ├── isArray.d.ts
│   │   │       ├── isArray.js
│   │   │       ├── isArray.js.map
│   │   │       ├── isArrayLike.d.ts
│   │   │       ├── isArrayLike.js
│   │   │       ├── isArrayLike.js.map
│   │   │       ├── isDate.d.ts
│   │   │       ├── isDate.js
│   │   │       ├── isDate.js.map
│   │   │       ├── isFunction.d.ts
│   │   │       ├── isFunction.js
│   │   │       ├── isFunction.js.map
│   │   │       ├── isInteropObservable.d.ts
│   │   │       ├── isInteropObservable.js
│   │   │       ├── isInteropObservable.js.map
│   │   │       ├── isIterable.d.ts
│   │   │       ├── isIterable.js
│   │   │       ├── isIterable.js.map
│   │   │       ├── isNumeric.d.ts
│   │   │       ├── isNumeric.js
│   │   │       ├── isNumeric.js.map
│   │   │       ├── isObject.d.ts
│   │   │       ├── isObject.js
│   │   │       ├── isObject.js.map
│   │   │       ├── isObservable.d.ts
│   │   │       ├── isObservable.js
│   │   │       ├── isObservable.js.map
│   │   │       ├── isPromise.d.ts
│   │   │       ├── isPromise.js
│   │   │       ├── isPromise.js.map
│   │   │       ├── isScheduler.d.ts
│   │   │       ├── isScheduler.js
│   │   │       ├── isScheduler.js.map
│   │   │       ├── noop.d.ts
│   │   │       ├── noop.js
│   │   │       ├── noop.js.map
│   │   │       ├── not.d.ts
│   │   │       ├── not.js
│   │   │       ├── not.js.map
│   │   │       ├── pipe.d.ts
│   │   │       ├── pipe.js
│   │   │       ├── pipe.js.map
│   │   │       ├── root.d.ts
│   │   │       ├── root.js
│   │   │       ├── root.js.map
│   │   │       ├── subscribeTo.d.ts
│   │   │       ├── subscribeTo.js
│   │   │       ├── subscribeTo.js.map
│   │   │       ├── subscribeToArray.d.ts
│   │   │       ├── subscribeToArray.js
│   │   │       ├── subscribeToArray.js.map
│   │   │       ├── subscribeToIterable.d.ts
│   │   │       ├── subscribeToIterable.js
│   │   │       ├── subscribeToIterable.js.map
│   │   │       ├── subscribeToObservable.d.ts
│   │   │       ├── subscribeToObservable.js
│   │   │       ├── subscribeToObservable.js.map
│   │   │       ├── subscribeToPromise.d.ts
│   │   │       ├── subscribeToPromise.js
│   │   │       ├── subscribeToPromise.js.map
│   │   │       ├── subscribeToResult.d.ts
│   │   │       ├── subscribeToResult.js
│   │   │       ├── subscribeToResult.js.map
│   │   │       ├── toSubscriber.d.ts
│   │   │       ├── toSubscriber.js
│   │   │       ├── toSubscriber.js.map
│   │   │       ├── tryCatch.d.ts
│   │   │       ├── tryCatch.js
│   │   │       └── tryCatch.js.map
│   │   ├── internal-compatibility
│   │   │   ├── index.d.ts
│   │   │   ├── index.js
│   │   │   ├── index.js.map
│   │   │   └── package.json
│   │   ├── migrations
│   │   │   ├── collection.json
│   │   │   └── update-6_0_0
│   │   │       ├── index.js
│   │   │       └── index.js.map
│   │   ├── observable
│   │   │   ├── ArrayLikeObservable.d.ts
│   │   │   ├── ArrayLikeObservable.js
│   │   │   ├── ArrayLikeObservable.js.map
│   │   │   ├── ArrayObservable.d.ts
│   │   │   ├── ArrayObservable.js
│   │   │   ├── ArrayObservable.js.map
│   │   │   ├── BoundCallbackObservable.d.ts
│   │   │   ├── BoundCallbackObservable.js
│   │   │   ├── BoundCallbackObservable.js.map
│   │   │   ├── BoundNodeCallbackObservable.d.ts
│   │   │   ├── BoundNodeCallbackObservable.js
│   │   │   ├── BoundNodeCallbackObservable.js.map
│   │   │   ├── ConnectableObservable.d.ts
│   │   │   ├── ConnectableObservable.js
│   │   │   ├── ConnectableObservable.js.map
│   │   │   ├── DeferObservable.d.ts
│   │   │   ├── DeferObservable.js
│   │   │   ├── DeferObservable.js.map
│   │   │   ├── EmptyObservable.d.ts
│   │   │   ├── EmptyObservable.js
│   │   │   ├── EmptyObservable.js.map
│   │   │   ├── ErrorObservable.d.ts
│   │   │   ├── ErrorObservable.js
│   │   │   ├── ErrorObservable.js.map
│   │   │   ├── ForkJoinObservable.d.ts
│   │   │   ├── ForkJoinObservable.js
│   │   │   ├── ForkJoinObservable.js.map
│   │   │   ├── FromEventObservable.d.ts
│   │   │   ├── FromEventObservable.js
│   │   │   ├── FromEventObservable.js.map
│   │   │   ├── FromEventPatternObservable.d.ts
│   │   │   ├── FromEventPatternObservable.js
│   │   │   ├── FromEventPatternObservable.js.map
│   │   │   ├── FromObservable.d.ts
│   │   │   ├── FromObservable.js
│   │   │   ├── FromObservable.js.map
│   │   │   ├── GenerateObservable.d.ts
│   │   │   ├── GenerateObservable.js
│   │   │   ├── GenerateObservable.js.map
│   │   │   ├── IfObservable.d.ts
│   │   │   ├── IfObservable.js
│   │   │   ├── IfObservable.js.map
│   │   │   ├── IntervalObservable.d.ts
│   │   │   ├── IntervalObservable.js
│   │   │   ├── IntervalObservable.js.map
│   │   │   ├── IteratorObservable.d.ts
│   │   │   ├── IteratorObservable.js
│   │   │   ├── IteratorObservable.js.map
│   │   │   ├── NeverObservable.d.ts
│   │   │   ├── NeverObservable.js
│   │   │   ├── NeverObservable.js.map
│   │   │   ├── PairsObservable.d.ts
│   │   │   ├── PairsObservable.js
│   │   │   ├── PairsObservable.js.map
│   │   │   ├── PromiseObservable.d.ts
│   │   │   ├── PromiseObservable.js
│   │   │   ├── PromiseObservable.js.map
│   │   │   ├── RangeObservable.d.ts
│   │   │   ├── RangeObservable.js
│   │   │   ├── RangeObservable.js.map
│   │   │   ├── ScalarObservable.d.ts
│   │   │   ├── ScalarObservable.js
│   │   │   ├── ScalarObservable.js.map
│   │   │   ├── SubscribeOnObservable.d.ts
│   │   │   ├── SubscribeOnObservable.js
│   │   │   ├── SubscribeOnObservable.js.map
│   │   │   ├── TimerObservable.d.ts
│   │   │   ├── TimerObservable.js
│   │   │   ├── TimerObservable.js.map
│   │   │   ├── UsingObservable.d.ts
│   │   │   ├── UsingObservable.js
│   │   │   ├── UsingObservable.js.map
│   │   │   ├── bindCallback.d.ts
│   │   │   ├── bindCallback.js
│   │   │   ├── bindCallback.js.map
│   │   │   ├── bindNodeCallback.d.ts
│   │   │   ├── bindNodeCallback.js
│   │   │   ├── bindNodeCallback.js.map
│   │   │   ├── combineLatest.d.ts
│   │   │   ├── combineLatest.js
│   │   │   ├── combineLatest.js.map
│   │   │   ├── concat.d.ts
│   │   │   ├── concat.js
│   │   │   ├── concat.js.map
│   │   │   ├── defer.d.ts
│   │   │   ├── defer.js
│   │   │   ├── defer.js.map
│   │   │   ├── dom
│   │   │   │   ├── AjaxObservable.d.ts
│   │   │   │   ├── AjaxObservable.js
│   │   │   │   ├── AjaxObservable.js.map
│   │   │   │   ├── WebSocketSubject.d.ts
│   │   │   │   ├── WebSocketSubject.js
│   │   │   │   ├── WebSocketSubject.js.map
│   │   │   │   ├── ajax.d.ts
│   │   │   │   ├── ajax.js
│   │   │   │   ├── ajax.js.map
│   │   │   │   ├── webSocket.d.ts
│   │   │   │   ├── webSocket.js
│   │   │   │   └── webSocket.js.map
│   │   │   ├── empty.d.ts
│   │   │   ├── empty.js
│   │   │   ├── empty.js.map
│   │   │   ├── forkJoin.d.ts
│   │   │   ├── forkJoin.js
│   │   │   ├── forkJoin.js.map
│   │   │   ├── from.d.ts
│   │   │   ├── from.js
│   │   │   ├── from.js.map
│   │   │   ├── fromArray.d.ts
│   │   │   ├── fromArray.js
│   │   │   ├── fromArray.js.map
│   │   │   ├── fromEvent.d.ts
│   │   │   ├── fromEvent.js
│   │   │   ├── fromEvent.js.map
│   │   │   ├── fromEventPattern.d.ts
│   │   │   ├── fromEventPattern.js
│   │   │   ├── fromEventPattern.js.map
│   │   │   ├── fromIterable.d.ts
│   │   │   ├── fromIterable.js
│   │   │   ├── fromIterable.js.map
│   │   │   ├── fromPromise.d.ts
│   │   │   ├── fromPromise.js
│   │   │   ├── fromPromise.js.map
│   │   │   ├── generate.d.ts
│   │   │   ├── generate.js
│   │   │   ├── generate.js.map
│   │   │   ├── if.d.ts
│   │   │   ├── if.js
│   │   │   ├── if.js.map
│   │   │   ├── interval.d.ts
│   │   │   ├── interval.js
│   │   │   ├── interval.js.map
│   │   │   ├── merge.d.ts
│   │   │   ├── merge.js
│   │   │   ├── merge.js.map
│   │   │   ├── never.d.ts
│   │   │   ├── never.js
│   │   │   ├── never.js.map
│   │   │   ├── of.d.ts
│   │   │   ├── of.js
│   │   │   ├── of.js.map
│   │   │   ├── onErrorResumeNext.d.ts
│   │   │   ├── onErrorResumeNext.js
│   │   │   ├── onErrorResumeNext.js.map
│   │   │   ├── pairs.d.ts
│   │   │   ├── pairs.js
│   │   │   ├── pairs.js.map
│   │   │   ├── race.d.ts
│   │   │   ├── race.js
│   │   │   ├── race.js.map
│   │   │   ├── range.d.ts
│   │   │   ├── range.js
│   │   │   ├── range.js.map
│   │   │   ├── throw.d.ts
│   │   │   ├── throw.js
│   │   │   ├── throw.js.map
│   │   │   ├── timer.d.ts
│   │   │   ├── timer.js
│   │   │   ├── timer.js.map
│   │   │   ├── using.d.ts
│   │   │   ├── using.js
│   │   │   ├── using.js.map
│   │   │   ├── zip.d.ts
│   │   │   ├── zip.js
│   │   │   └── zip.js.map
│   │   ├── operator
│   │   │   ├── audit.d.ts
│   │   │   ├── audit.js
│   │   │   ├── audit.js.map
│   │   │   ├── auditTime.d.ts
│   │   │   ├── auditTime.js
│   │   │   ├── auditTime.js.map
│   │   │   ├── buffer.d.ts
│   │   │   ├── buffer.js
│   │   │   ├── buffer.js.map
│   │   │   ├── bufferCount.d.ts
│   │   │   ├── bufferCount.js
│   │   │   ├── bufferCount.js.map
│   │   │   ├── bufferTime.d.ts
│   │   │   ├── bufferTime.js
│   │   │   ├── bufferTime.js.map
│   │   │   ├── bufferToggle.d.ts
│   │   │   ├── bufferToggle.js
│   │   │   ├── bufferToggle.js.map
│   │   │   ├── bufferWhen.d.ts
│   │   │   ├── bufferWhen.js
│   │   │   ├── bufferWhen.js.map
│   │   │   ├── catch.d.ts
│   │   │   ├── catch.js
│   │   │   ├── catch.js.map
│   │   │   ├── combineAll.d.ts
│   │   │   ├── combineAll.js
│   │   │   ├── combineAll.js.map
│   │   │   ├── combineLatest.d.ts
│   │   │   ├── combineLatest.js
│   │   │   ├── combineLatest.js.map
│   │   │   ├── concat.d.ts
│   │   │   ├── concat.js
│   │   │   ├── concat.js.map
│   │   │   ├── concatAll.d.ts
│   │   │   ├── concatAll.js
│   │   │   ├── concatAll.js.map
│   │   │   ├── concatMap.d.ts
│   │   │   ├── concatMap.js
│   │   │   ├── concatMap.js.map
│   │   │   ├── concatMapTo.d.ts
│   │   │   ├── concatMapTo.js
│   │   │   ├── concatMapTo.js.map
│   │   │   ├── count.d.ts
│   │   │   ├── count.js
│   │   │   ├── count.js.map
│   │   │   ├── debounce.d.ts
│   │   │   ├── debounce.js
│   │   │   ├── debounce.js.map
│   │   │   ├── debounceTime.d.ts
│   │   │   ├── debounceTime.js
│   │   │   ├── debounceTime.js.map
│   │   │   ├── defaultIfEmpty.d.ts
│   │   │   ├── defaultIfEmpty.js
│   │   │   ├── defaultIfEmpty.js.map
│   │   │   ├── delay.d.ts
│   │   │   ├── delay.js
│   │   │   ├── delay.js.map
│   │   │   ├── delayWhen.d.ts
│   │   │   ├── delayWhen.js
│   │   │   ├── delayWhen.js.map
│   │   │   ├── dematerialize.d.ts
│   │   │   ├── dematerialize.js
│   │   │   ├── dematerialize.js.map
│   │   │   ├── distinct.d.ts
│   │   │   ├── distinct.js
│   │   │   ├── distinct.js.map
│   │   │   ├── distinctUntilChanged.d.ts
│   │   │   ├── distinctUntilChanged.js
│   │   │   ├── distinctUntilChanged.js.map
│   │   │   ├── distinctUntilKeyChanged.d.ts
│   │   │   ├── distinctUntilKeyChanged.js
│   │   │   ├── distinctUntilKeyChanged.js.map
│   │   │   ├── do.d.ts
│   │   │   ├── do.js
│   │   │   ├── do.js.map
│   │   │   ├── elementAt.d.ts
│   │   │   ├── elementAt.js
│   │   │   ├── elementAt.js.map
│   │   │   ├── every.d.ts
│   │   │   ├── every.js
│   │   │   ├── every.js.map
│   │   │   ├── exhaust.d.ts
│   │   │   ├── exhaust.js
│   │   │   ├── exhaust.js.map
│   │   │   ├── exhaustMap.d.ts
│   │   │   ├── exhaustMap.js
│   │   │   ├── exhaustMap.js.map
│   │   │   ├── expand.d.ts
│   │   │   ├── expand.js
│   │   │   ├── expand.js.map
│   │   │   ├── filter.d.ts
│   │   │   ├── filter.js
│   │   │   ├── filter.js.map
│   │   │   ├── finally.d.ts
│   │   │   ├── finally.js
│   │   │   ├── finally.js.map
│   │   │   ├── find.d.ts
│   │   │   ├── find.js
│   │   │   ├── find.js.map
│   │   │   ├── findIndex.d.ts
│   │   │   ├── findIndex.js
│   │   │   ├── findIndex.js.map
│   │   │   ├── first.d.ts
│   │   │   ├── first.js
│   │   │   ├── first.js.map
│   │   │   ├── groupBy.d.ts
│   │   │   ├── groupBy.js
│   │   │   ├── groupBy.js.map
│   │   │   ├── ignoreElements.d.ts
│   │   │   ├── ignoreElements.js
│   │   │   ├── ignoreElements.js.map
│   │   │   ├── isEmpty.d.ts
│   │   │   ├── isEmpty.js
│   │   │   ├── isEmpty.js.map
│   │   │   ├── last.d.ts
│   │   │   ├── last.js
│   │   │   ├── last.js.map
│   │   │   ├── let.d.ts
│   │   │   ├── let.js
│   │   │   ├── let.js.map
│   │   │   ├── map.d.ts
│   │   │   ├── map.js
│   │   │   ├── map.js.map
│   │   │   ├── mapTo.d.ts
│   │   │   ├── mapTo.js
│   │   │   ├── mapTo.js.map
│   │   │   ├── materialize.d.ts
│   │   │   ├── materialize.js
│   │   │   ├── materialize.js.map
│   │   │   ├── max.d.ts
│   │   │   ├── max.js
│   │   │   ├── max.js.map
│   │   │   ├── merge.d.ts
│   │   │   ├── merge.js
│   │   │   ├── merge.js.map
│   │   │   ├── mergeAll.d.ts
│   │   │   ├── mergeAll.js
│   │   │   ├── mergeAll.js.map
│   │   │   ├── mergeMap.d.ts
│   │   │   ├── mergeMap.js
│   │   │   ├── mergeMap.js.map
│   │   │   ├── mergeMapTo.d.ts
│   │   │   ├── mergeMapTo.js
│   │   │   ├── mergeMapTo.js.map
│   │   │   ├── mergeScan.d.ts
│   │   │   ├── mergeScan.js
│   │   │   ├── mergeScan.js.map
│   │   │   ├── min.d.ts
│   │   │   ├── min.js
│   │   │   ├── min.js.map
│   │   │   ├── multicast.d.ts
│   │   │   ├── multicast.js
│   │   │   ├── multicast.js.map
│   │   │   ├── observeOn.d.ts
│   │   │   ├── observeOn.js
│   │   │   ├── observeOn.js.map
│   │   │   ├── onErrorResumeNext.d.ts
│   │   │   ├── onErrorResumeNext.js
│   │   │   ├── onErrorResumeNext.js.map
│   │   │   ├── pairwise.d.ts
│   │   │   ├── pairwise.js
│   │   │   ├── pairwise.js.map
│   │   │   ├── partition.d.ts
│   │   │   ├── partition.js
│   │   │   ├── partition.js.map
│   │   │   ├── pluck.d.ts
│   │   │   ├── pluck.js
│   │   │   ├── pluck.js.map
│   │   │   ├── publish.d.ts
│   │   │   ├── publish.js
│   │   │   ├── publish.js.map
│   │   │   ├── publishBehavior.d.ts
│   │   │   ├── publishBehavior.js
│   │   │   ├── publishBehavior.js.map
│   │   │   ├── publishLast.d.ts
│   │   │   ├── publishLast.js
│   │   │   ├── publishLast.js.map
│   │   │   ├── publishReplay.d.ts
│   │   │   ├── publishReplay.js
│   │   │   ├── publishReplay.js.map
│   │   │   ├── race.d.ts
│   │   │   ├── race.js
│   │   │   ├── race.js.map
│   │   │   ├── reduce.d.ts
│   │   │   ├── reduce.js
│   │   │   ├── reduce.js.map
│   │   │   ├── repeat.d.ts
│   │   │   ├── repeat.js
│   │   │   ├── repeat.js.map
│   │   │   ├── repeatWhen.d.ts
│   │   │   ├── repeatWhen.js
│   │   │   ├── repeatWhen.js.map
│   │   │   ├── retry.d.ts
│   │   │   ├── retry.js
│   │   │   ├── retry.js.map
│   │   │   ├── retryWhen.d.ts
│   │   │   ├── retryWhen.js
│   │   │   ├── retryWhen.js.map
│   │   │   ├── sample.d.ts
│   │   │   ├── sample.js
│   │   │   ├── sample.js.map
│   │   │   ├── sampleTime.d.ts
│   │   │   ├── sampleTime.js
│   │   │   ├── sampleTime.js.map
│   │   │   ├── scan.d.ts
│   │   │   ├── scan.js
│   │   │   ├── scan.js.map
│   │   │   ├── sequenceEqual.d.ts
│   │   │   ├── sequenceEqual.js
│   │   │   ├── sequenceEqual.js.map
│   │   │   ├── share.d.ts
│   │   │   ├── share.js
│   │   │   ├── share.js.map
│   │   │   ├── shareReplay.d.ts
│   │   │   ├── shareReplay.js
│   │   │   ├── shareReplay.js.map
│   │   │   ├── single.d.ts
│   │   │   ├── single.js
│   │   │   ├── single.js.map
│   │   │   ├── skip.d.ts
│   │   │   ├── skip.js
│   │   │   ├── skip.js.map
│   │   │   ├── skipLast.d.ts
│   │   │   ├── skipLast.js
│   │   │   ├── skipLast.js.map
│   │   │   ├── skipUntil.d.ts
│   │   │   ├── skipUntil.js
│   │   │   ├── skipUntil.js.map
│   │   │   ├── skipWhile.d.ts
│   │   │   ├── skipWhile.js
│   │   │   ├── skipWhile.js.map
│   │   │   ├── startWith.d.ts
│   │   │   ├── startWith.js
│   │   │   ├── startWith.js.map
│   │   │   ├── subscribeOn.d.ts
│   │   │   ├── subscribeOn.js
│   │   │   ├── subscribeOn.js.map
│   │   │   ├── switch.d.ts
│   │   │   ├── switch.js
│   │   │   ├── switch.js.map
│   │   │   ├── switchMap.d.ts
│   │   │   ├── switchMap.js
│   │   │   ├── switchMap.js.map
│   │   │   ├── switchMapTo.d.ts
│   │   │   ├── switchMapTo.js
│   │   │   ├── switchMapTo.js.map
│   │   │   ├── take.d.ts
│   │   │   ├── take.js
│   │   │   ├── take.js.map
│   │   │   ├── takeLast.d.ts
│   │   │   ├── takeLast.js
│   │   │   ├── takeLast.js.map
│   │   │   ├── takeUntil.d.ts
│   │   │   ├── takeUntil.js
│   │   │   ├── takeUntil.js.map
│   │   │   ├── takeWhile.d.ts
│   │   │   ├── takeWhile.js
│   │   │   ├── takeWhile.js.map
│   │   │   ├── throttle.d.ts
│   │   │   ├── throttle.js
│   │   │   ├── throttle.js.map
│   │   │   ├── throttleTime.d.ts
│   │   │   ├── throttleTime.js
│   │   │   ├── throttleTime.js.map
│   │   │   ├── timeInterval.d.ts
│   │   │   ├── timeInterval.js
│   │   │   ├── timeInterval.js.map
│   │   │   ├── timeout.d.ts
│   │   │   ├── timeout.js
│   │   │   ├── timeout.js.map
│   │   │   ├── timeoutWith.d.ts
│   │   │   ├── timeoutWith.js
│   │   │   ├── timeoutWith.js.map
│   │   │   ├── timestamp.d.ts
│   │   │   ├── timestamp.js
│   │   │   ├── timestamp.js.map
│   │   │   ├── toArray.d.ts
│   │   │   ├── toArray.js
│   │   │   ├── toArray.js.map
│   │   │   ├── toPromise.d.ts
│   │   │   ├── toPromise.js
│   │   │   ├── toPromise.js.map
│   │   │   ├── window.d.ts
│   │   │   ├── window.js
│   │   │   ├── window.js.map
│   │   │   ├── windowCount.d.ts
│   │   │   ├── windowCount.js
│   │   │   ├── windowCount.js.map
│   │   │   ├── windowTime.d.ts
│   │   │   ├── windowTime.js
│   │   │   ├── windowTime.js.map
│   │   │   ├── windowToggle.d.ts
│   │   │   ├── windowToggle.js
│   │   │   ├── windowToggle.js.map
│   │   │   ├── windowWhen.d.ts
│   │   │   ├── windowWhen.js
│   │   │   ├── windowWhen.js.map
│   │   │   ├── withLatestFrom.d.ts
│   │   │   ├── withLatestFrom.js
│   │   │   ├── withLatestFrom.js.map
│   │   │   ├── zip.d.ts
│   │   │   ├── zip.js
│   │   │   ├── zip.js.map
│   │   │   ├── zipAll.d.ts
│   │   │   ├── zipAll.js
│   │   │   └── zipAll.js.map
│   │   ├── operators
│   │   │   ├── audit.d.ts
│   │   │   ├── audit.js
│   │   │   ├── audit.js.map
│   │   │   ├── auditTime.d.ts
│   │   │   ├── auditTime.js
│   │   │   ├── auditTime.js.map
│   │   │   ├── buffer.d.ts
│   │   │   ├── buffer.js
│   │   │   ├── buffer.js.map
│   │   │   ├── bufferCount.d.ts
│   │   │   ├── bufferCount.js
│   │   │   ├── bufferCount.js.map
│   │   │   ├── bufferTime.d.ts
│   │   │   ├── bufferTime.js
│   │   │   ├── bufferTime.js.map
│   │   │   ├── bufferToggle.d.ts
│   │   │   ├── bufferToggle.js
│   │   │   ├── bufferToggle.js.map
│   │   │   ├── bufferWhen.d.ts
│   │   │   ├── bufferWhen.js
│   │   │   ├── bufferWhen.js.map
│   │   │   ├── catchError.d.ts
│   │   │   ├── catchError.js
│   │   │   ├── catchError.js.map
│   │   │   ├── combineAll.d.ts
│   │   │   ├── combineAll.js
│   │   │   ├── combineAll.js.map
│   │   │   ├── combineLatest.d.ts
│   │   │   ├── combineLatest.js
│   │   │   ├── combineLatest.js.map
│   │   │   ├── concat.d.ts
│   │   │   ├── concat.js
│   │   │   ├── concat.js.map
│   │   │   ├── concatAll.d.ts
│   │   │   ├── concatAll.js
│   │   │   ├── concatAll.js.map
│   │   │   ├── concatMap.d.ts
│   │   │   ├── concatMap.js
│   │   │   ├── concatMap.js.map
│   │   │   ├── concatMapTo.d.ts
│   │   │   ├── concatMapTo.js
│   │   │   ├── concatMapTo.js.map
│   │   │   ├── count.d.ts
│   │   │   ├── count.js
│   │   │   ├── count.js.map
│   │   │   ├── debounce.d.ts
│   │   │   ├── debounce.js
│   │   │   ├── debounce.js.map
│   │   │   ├── debounceTime.d.ts
│   │   │   ├── debounceTime.js
│   │   │   ├── debounceTime.js.map
│   │   │   ├── defaultIfEmpty.d.ts
│   │   │   ├── defaultIfEmpty.js
│   │   │   ├── defaultIfEmpty.js.map
│   │   │   ├── delay.d.ts
│   │   │   ├── delay.js
│   │   │   ├── delay.js.map
│   │   │   ├── delayWhen.d.ts
│   │   │   ├── delayWhen.js
│   │   │   ├── delayWhen.js.map
│   │   │   ├── dematerialize.d.ts
│   │   │   ├── dematerialize.js
│   │   │   ├── dematerialize.js.map
│   │   │   ├── distinct.d.ts
│   │   │   ├── distinct.js
│   │   │   ├── distinct.js.map
│   │   │   ├── distinctUntilChanged.d.ts
│   │   │   ├── distinctUntilChanged.js
│   │   │   ├── distinctUntilChanged.js.map
│   │   │   ├── distinctUntilKeyChanged.d.ts
│   │   │   ├── distinctUntilKeyChanged.js
│   │   │   ├── distinctUntilKeyChanged.js.map
│   │   │   ├── elementAt.d.ts
│   │   │   ├── elementAt.js
│   │   │   ├── elementAt.js.map
│   │   │   ├── every.d.ts
│   │   │   ├── every.js
│   │   │   ├── every.js.map
│   │   │   ├── exhaust.d.ts
│   │   │   ├── exhaust.js
│   │   │   ├── exhaust.js.map
│   │   │   ├── exhaustMap.d.ts
│   │   │   ├── exhaustMap.js
│   │   │   ├── exhaustMap.js.map
│   │   │   ├── expand.d.ts
│   │   │   ├── expand.js
│   │   │   ├── expand.js.map
│   │   │   ├── filter.d.ts
│   │   │   ├── filter.js
│   │   │   ├── filter.js.map
│   │   │   ├── finalize.d.ts
│   │   │   ├── finalize.js
│   │   │   ├── finalize.js.map
│   │   │   ├── find.d.ts
│   │   │   ├── find.js
│   │   │   ├── find.js.map
│   │   │   ├── findIndex.d.ts
│   │   │   ├── findIndex.js
│   │   │   ├── findIndex.js.map
│   │   │   ├── first.d.ts
│   │   │   ├── first.js
│   │   │   ├── first.js.map
│   │   │   ├── groupBy.d.ts
│   │   │   ├── groupBy.js
│   │   │   ├── groupBy.js.map
│   │   │   ├── ignoreElements.d.ts
│   │   │   ├── ignoreElements.js
│   │   │   ├── ignoreElements.js.map
│   │   │   ├── index.d.ts
│   │   │   ├── index.js
│   │   │   ├── index.js.map
│   │   │   ├── isEmpty.d.ts
│   │   │   ├── isEmpty.js
│   │   │   ├── isEmpty.js.map
│   │   │   ├── last.d.ts
│   │   │   ├── last.js
│   │   │   ├── last.js.map
│   │   │   ├── map.d.ts
│   │   │   ├── map.js
│   │   │   ├── map.js.map
│   │   │   ├── mapTo.d.ts
│   │   │   ├── mapTo.js
│   │   │   ├── mapTo.js.map
│   │   │   ├── materialize.d.ts
│   │   │   ├── materialize.js
│   │   │   ├── materialize.js.map
│   │   │   ├── max.d.ts
│   │   │   ├── max.js
│   │   │   ├── max.js.map
│   │   │   ├── merge.d.ts
│   │   │   ├── merge.js
│   │   │   ├── merge.js.map
│   │   │   ├── mergeAll.d.ts
│   │   │   ├── mergeAll.js
│   │   │   ├── mergeAll.js.map
│   │   │   ├── mergeMap.d.ts
│   │   │   ├── mergeMap.js
│   │   │   ├── mergeMap.js.map
│   │   │   ├── mergeMapTo.d.ts
│   │   │   ├── mergeMapTo.js
│   │   │   ├── mergeMapTo.js.map
│   │   │   ├── mergeScan.d.ts
│   │   │   ├── mergeScan.js
│   │   │   ├── mergeScan.js.map
│   │   │   ├── min.d.ts
│   │   │   ├── min.js
│   │   │   ├── min.js.map
│   │   │   ├── multicast.d.ts
│   │   │   ├── multicast.js
│   │   │   ├── multicast.js.map
│   │   │   ├── observeOn.d.ts
│   │   │   ├── observeOn.js
│   │   │   ├── observeOn.js.map
│   │   │   ├── onErrorResumeNext.d.ts
│   │   │   ├── onErrorResumeNext.js
│   │   │   ├── onErrorResumeNext.js.map
│   │   │   ├── package.json
│   │   │   ├── pairwise.d.ts
│   │   │   ├── pairwise.js
│   │   │   ├── pairwise.js.map
│   │   │   ├── partition.d.ts
│   │   │   ├── partition.js
│   │   │   ├── partition.js.map
│   │   │   ├── pluck.d.ts
│   │   │   ├── pluck.js
│   │   │   ├── pluck.js.map
│   │   │   ├── publish.d.ts
│   │   │   ├── publish.js
│   │   │   ├── publish.js.map
│   │   │   ├── publishBehavior.d.ts
│   │   │   ├── publishBehavior.js
│   │   │   ├── publishBehavior.js.map
│   │   │   ├── publishLast.d.ts
│   │   │   ├── publishLast.js
│   │   │   ├── publishLast.js.map
│   │   │   ├── publishReplay.d.ts
│   │   │   ├── publishReplay.js
│   │   │   ├── publishReplay.js.map
│   │   │   ├── race.d.ts
│   │   │   ├── race.js
│   │   │   ├── race.js.map
│   │   │   ├── reduce.d.ts
│   │   │   ├── reduce.js
│   │   │   ├── reduce.js.map
│   │   │   ├── refCount.d.ts
│   │   │   ├── refCount.js
│   │   │   ├── refCount.js.map
│   │   │   ├── repeat.d.ts
│   │   │   ├── repeat.js
│   │   │   ├── repeat.js.map
│   │   │   ├── repeatWhen.d.ts
│   │   │   ├── repeatWhen.js
│   │   │   ├── repeatWhen.js.map
│   │   │   ├── retry.d.ts
│   │   │   ├── retry.js
│   │   │   ├── retry.js.map
│   │   │   ├── retryWhen.d.ts
│   │   │   ├── retryWhen.js
│   │   │   ├── retryWhen.js.map
│   │   │   ├── sample.d.ts
│   │   │   ├── sample.js
│   │   │   ├── sample.js.map
│   │   │   ├── sampleTime.d.ts
│   │   │   ├── sampleTime.js
│   │   │   ├── sampleTime.js.map
│   │   │   ├── scan.d.ts
│   │   │   ├── scan.js
│   │   │   ├── scan.js.map
│   │   │   ├── sequenceEqual.d.ts
│   │   │   ├── sequenceEqual.js
│   │   │   ├── sequenceEqual.js.map
│   │   │   ├── share.d.ts
│   │   │   ├── share.js
│   │   │   ├── share.js.map
│   │   │   ├── shareReplay.d.ts
│   │   │   ├── shareReplay.js
│   │   │   ├── shareReplay.js.map
│   │   │   ├── single.d.ts
│   │   │   ├── single.js
│   │   │   ├── single.js.map
│   │   │   ├── skip.d.ts
│   │   │   ├── skip.js
│   │   │   ├── skip.js.map
│   │   │   ├── skipLast.d.ts
│   │   │   ├── skipLast.js
│   │   │   ├── skipLast.js.map
│   │   │   ├── skipUntil.d.ts
│   │   │   ├── skipUntil.js
│   │   │   ├── skipUntil.js.map
│   │   │   ├── skipWhile.d.ts
│   │   │   ├── skipWhile.js
│   │   │   ├── skipWhile.js.map
│   │   │   ├── startWith.d.ts
│   │   │   ├── startWith.js
│   │   │   ├── startWith.js.map
│   │   │   ├── subscribeOn.d.ts
│   │   │   ├── subscribeOn.js
│   │   │   ├── subscribeOn.js.map
│   │   │   ├── switchAll.d.ts
│   │   │   ├── switchAll.js
│   │   │   ├── switchAll.js.map
│   │   │   ├── switchMap.d.ts
│   │   │   ├── switchMap.js
│   │   │   ├── switchMap.js.map
│   │   │   ├── switchMapTo.d.ts
│   │   │   ├── switchMapTo.js
│   │   │   ├── switchMapTo.js.map
│   │   │   ├── take.d.ts
│   │   │   ├── take.js
│   │   │   ├── take.js.map
│   │   │   ├── takeLast.d.ts
│   │   │   ├── takeLast.js
│   │   │   ├── takeLast.js.map
│   │   │   ├── takeUntil.d.ts
│   │   │   ├── takeUntil.js
│   │   │   ├── takeUntil.js.map
│   │   │   ├── takeWhile.d.ts
│   │   │   ├── takeWhile.js
│   │   │   ├── takeWhile.js.map
│   │   │   ├── tap.d.ts
│   │   │   ├── tap.js
│   │   │   ├── tap.js.map
│   │   │   ├── throttle.d.ts
│   │   │   ├── throttle.js
│   │   │   ├── throttle.js.map
│   │   │   ├── throttleTime.d.ts
│   │   │   ├── throttleTime.js
│   │   │   ├── throttleTime.js.map
│   │   │   ├── throwIfEmpty.d.ts
│   │   │   ├── throwIfEmpty.js
│   │   │   ├── throwIfEmpty.js.map
│   │   │   ├── timeInterval.d.ts
│   │   │   ├── timeInterval.js
│   │   │   ├── timeInterval.js.map
│   │   │   ├── timeout.d.ts
│   │   │   ├── timeout.js
│   │   │   ├── timeout.js.map
│   │   │   ├── timeoutWith.d.ts
│   │   │   ├── timeoutWith.js
│   │   │   ├── timeoutWith.js.map
│   │   │   ├── timestamp.d.ts
│   │   │   ├── timestamp.js
│   │   │   ├── timestamp.js.map
│   │   │   ├── toArray.d.ts
│   │   │   ├── toArray.js
│   │   │   ├── toArray.js.map
│   │   │   ├── window.d.ts
│   │   │   ├── window.js
│   │   │   ├── window.js.map
│   │   │   ├── windowCount.d.ts
│   │   │   ├── windowCount.js
│   │   │   ├── windowCount.js.map
│   │   │   ├── windowTime.d.ts
│   │   │   ├── windowTime.js
│   │   │   ├── windowTime.js.map
│   │   │   ├── windowToggle.d.ts
│   │   │   ├── windowToggle.js
│   │   │   ├── windowToggle.js.map
│   │   │   ├── windowWhen.d.ts
│   │   │   ├── windowWhen.js
│   │   │   ├── windowWhen.js.map
│   │   │   ├── withLatestFrom.d.ts
│   │   │   ├── withLatestFrom.js
│   │   │   ├── withLatestFrom.js.map
│   │   │   ├── zip.d.ts
│   │   │   ├── zip.js
│   │   │   ├── zip.js.map
│   │   │   ├── zipAll.d.ts
│   │   │   ├── zipAll.js
│   │   │   └── zipAll.js.map
│   │   ├── package.json
│   │   ├── scheduler
│   │   │   ├── animationFrame.d.ts
│   │   │   ├── animationFrame.js
│   │   │   ├── animationFrame.js.map
│   │   │   ├── asap.d.ts
│   │   │   ├── asap.js
│   │   │   ├── asap.js.map
│   │   │   ├── async.d.ts
│   │   │   ├── async.js
│   │   │   ├── async.js.map
│   │   │   ├── queue.d.ts
│   │   │   ├── queue.js
│   │   │   └── queue.js.map
│   │   ├── src
│   │   │   ├── AsyncSubject.ts
│   │   │   ├── BUILD.bazel
│   │   │   ├── BehaviorSubject.ts
│   │   │   ├── InnerSubscriber.ts
│   │   │   ├── LICENSE.txt
│   │   │   ├── MiscJSDoc.ts
│   │   │   ├── Notification.ts
│   │   │   ├── Observable.ts
│   │   │   ├── Observer.ts
│   │   │   ├── Operator.ts
│   │   │   ├── OuterSubscriber.ts
│   │   │   ├── README.md
│   │   │   ├── ReplaySubject.ts
│   │   │   ├── Rx.global.js
│   │   │   ├── Rx.ts
│   │   │   ├── Scheduler.ts
│   │   │   ├── Subject.ts
│   │   │   ├── SubjectSubscription.ts
│   │   │   ├── Subscriber.ts
│   │   │   ├── Subscription.ts
│   │   │   ├── WORKSPACE
│   │   │   ├── add
│   │   │   │   ├── observable
│   │   │   │   │   ├── bindCallback.ts
│   │   │   │   │   ├── bindNodeCallback.ts
│   │   │   │   │   ├── combineLatest.ts
│   │   │   │   │   ├── concat.ts
│   │   │   │   │   ├── defer.ts
│   │   │   │   │   ├── dom
│   │   │   │   │   │   ├── ajax.ts
│   │   │   │   │   │   └── webSocket.ts
│   │   │   │   │   ├── empty.ts
│   │   │   │   │   ├── forkJoin.ts
│   │   │   │   │   ├── from.ts
│   │   │   │   │   ├── fromEvent.ts
│   │   │   │   │   ├── fromEventPattern.ts
│   │   │   │   │   ├── fromPromise.ts
│   │   │   │   │   ├── generate.ts
│   │   │   │   │   ├── if.ts
│   │   │   │   │   ├── interval.ts
│   │   │   │   │   ├── merge.ts
│   │   │   │   │   ├── never.ts
│   │   │   │   │   ├── of.ts
│   │   │   │   │   ├── onErrorResumeNext.ts
│   │   │   │   │   ├── pairs.ts
│   │   │   │   │   ├── race.ts
│   │   │   │   │   ├── range.ts
│   │   │   │   │   ├── throw.ts
│   │   │   │   │   ├── timer.ts
│   │   │   │   │   ├── using.ts
│   │   │   │   │   └── zip.ts
│   │   │   │   └── operator
│   │   │   │       ├── audit.ts
│   │   │   │       ├── auditTime.ts
│   │   │   │       ├── buffer.ts
│   │   │   │       ├── bufferCount.ts
│   │   │   │       ├── bufferTime.ts
│   │   │   │       ├── bufferToggle.ts
│   │   │   │       ├── bufferWhen.ts
│   │   │   │       ├── catch.ts
│   │   │   │       ├── combineAll.ts
│   │   │   │       ├── combineLatest.ts
│   │   │   │       ├── concat.ts
│   │   │   │       ├── concatAll.ts
│   │   │   │       ├── concatMap.ts
│   │   │   │       ├── concatMapTo.ts
│   │   │   │       ├── count.ts
│   │   │   │       ├── debounce.ts
│   │   │   │       ├── debounceTime.ts
│   │   │   │       ├── defaultIfEmpty.ts
│   │   │   │       ├── delay.ts
│   │   │   │       ├── delayWhen.ts
│   │   │   │       ├── dematerialize.ts
│   │   │   │       ├── distinct.ts
│   │   │   │       ├── distinctUntilChanged.ts
│   │   │   │       ├── distinctUntilKeyChanged.ts
│   │   │   │       ├── do.ts
│   │   │   │       ├── elementAt.ts
│   │   │   │       ├── every.ts
│   │   │   │       ├── exhaust.ts
│   │   │   │       ├── exhaustMap.ts
│   │   │   │       ├── expand.ts
│   │   │   │       ├── filter.ts
│   │   │   │       ├── finally.ts
│   │   │   │       ├── find.ts
│   │   │   │       ├── findIndex.ts
│   │   │   │       ├── first.ts
│   │   │   │       ├── groupBy.ts
│   │   │   │       ├── ignoreElements.ts
│   │   │   │       ├── isEmpty.ts
│   │   │   │       ├── last.ts
│   │   │   │       ├── let.ts
│   │   │   │       ├── map.ts
│   │   │   │       ├── mapTo.ts
│   │   │   │       ├── materialize.ts
│   │   │   │       ├── max.ts
│   │   │   │       ├── merge.ts
│   │   │   │       ├── mergeAll.ts
│   │   │   │       ├── mergeMap.ts
│   │   │   │       ├── mergeMapTo.ts
│   │   │   │       ├── mergeScan.ts
│   │   │   │       ├── min.ts
│   │   │   │       ├── multicast.ts
│   │   │   │       ├── observeOn.ts
│   │   │   │       ├── onErrorResumeNext.ts
│   │   │   │       ├── pairwise.ts
│   │   │   │       ├── partition.ts
│   │   │   │       ├── pluck.ts
│   │   │   │       ├── publish.ts
│   │   │   │       ├── publishBehavior.ts
│   │   │   │       ├── publishLast.ts
│   │   │   │       ├── publishReplay.ts
│   │   │   │       ├── race.ts
│   │   │   │       ├── reduce.ts
│   │   │   │       ├── repeat.ts
│   │   │   │       ├── repeatWhen.ts
│   │   │   │       ├── retry.ts
│   │   │   │       ├── retryWhen.ts
│   │   │   │       ├── sample.ts
│   │   │   │       ├── sampleTime.ts
│   │   │   │       ├── scan.ts
│   │   │   │       ├── sequenceEqual.ts
│   │   │   │       ├── share.ts
│   │   │   │       ├── shareReplay.ts
│   │   │   │       ├── single.ts
│   │   │   │       ├── skip.ts
│   │   │   │       ├── skipLast.ts
│   │   │   │       ├── skipUntil.ts
│   │   │   │       ├── skipWhile.ts
│   │   │   │       ├── startWith.ts
│   │   │   │       ├── subscribeOn.ts
│   │   │   │       ├── switch.ts
│   │   │   │       ├── switchMap.ts
│   │   │   │       ├── switchMapTo.ts
│   │   │   │       ├── take.ts
│   │   │   │       ├── takeLast.ts
│   │   │   │       ├── takeUntil.ts
│   │   │   │       ├── takeWhile.ts
│   │   │   │       ├── throttle.ts
│   │   │   │       ├── throttleTime.ts
│   │   │   │       ├── timeInterval.ts
│   │   │   │       ├── timeout.ts
│   │   │   │       ├── timeoutWith.ts
│   │   │   │       ├── timestamp.ts
│   │   │   │       ├── toArray.ts
│   │   │   │       ├── toPromise.ts
│   │   │   │       ├── window.ts
│   │   │   │       ├── windowCount.ts
│   │   │   │       ├── windowTime.ts
│   │   │   │       ├── windowToggle.ts
│   │   │   │       ├── windowWhen.ts
│   │   │   │       ├── withLatestFrom.ts
│   │   │   │       ├── zip.ts
│   │   │   │       └── zipAll.ts
│   │   │   ├── ajax
│   │   │   │   ├── BUILD.bazel
│   │   │   │   ├── index.ts
│   │   │   │   └── package.json
│   │   │   ├── index.ts
│   │   │   ├── interfaces.ts
│   │   │   ├── internal
│   │   │   │   ├── AsyncSubject.ts
│   │   │   │   ├── BehaviorSubject.ts
│   │   │   │   ├── InnerSubscriber.ts
│   │   │   │   ├── Notification.ts
│   │   │   │   ├── Observable.ts
│   │   │   │   ├── Observer.ts
│   │   │   │   ├── Operator.ts
│   │   │   │   ├── OuterSubscriber.ts
│   │   │   │   ├── ReplaySubject.ts
│   │   │   │   ├── Rx.ts
│   │   │   │   ├── Scheduler.ts
│   │   │   │   ├── Subject.ts
│   │   │   │   ├── SubjectSubscription.ts
│   │   │   │   ├── Subscriber.ts
│   │   │   │   ├── Subscription.ts
│   │   │   │   ├── config.ts
│   │   │   │   ├── observable
│   │   │   │   │   ├── ConnectableObservable.ts
│   │   │   │   │   ├── SubscribeOnObservable.ts
│   │   │   │   │   ├── bindCallback.ts
│   │   │   │   │   ├── bindNodeCallback.ts
│   │   │   │   │   ├── combineLatest.ts
│   │   │   │   │   ├── concat.ts
│   │   │   │   │   ├── defer.ts
│   │   │   │   │   ├── dom
│   │   │   │   │   │   ├── AjaxObservable.ts
│   │   │   │   │   │   ├── MiscJSDoc.ts
│   │   │   │   │   │   ├── WebSocketSubject.ts
│   │   │   │   │   │   ├── ajax.ts
│   │   │   │   │   │   └── webSocket.ts
│   │   │   │   │   ├── empty.ts
│   │   │   │   │   ├── forkJoin.ts
│   │   │   │   │   ├── from.ts
│   │   │   │   │   ├── fromArray.ts
│   │   │   │   │   ├── fromEvent.ts
│   │   │   │   │   ├── fromEventPattern.ts
│   │   │   │   │   ├── fromIterable.ts
│   │   │   │   │   ├── fromObservable.ts
│   │   │   │   │   ├── fromPromise.ts
│   │   │   │   │   ├── generate.ts
│   │   │   │   │   ├── iif.ts
│   │   │   │   │   ├── interval.ts
│   │   │   │   │   ├── merge.ts
│   │   │   │   │   ├── never.ts
│   │   │   │   │   ├── of.ts
│   │   │   │   │   ├── onErrorResumeNext.ts
│   │   │   │   │   ├── pairs.ts
│   │   │   │   │   ├── race.ts
│   │   │   │   │   ├── range.ts
│   │   │   │   │   ├── scalar.ts
│   │   │   │   │   ├── throwError.ts
│   │   │   │   │   ├── timer.ts
│   │   │   │   │   ├── using.ts
│   │   │   │   │   └── zip.ts
│   │   │   │   ├── operators
│   │   │   │   │   ├── audit.ts
│   │   │   │   │   ├── auditTime.ts
│   │   │   │   │   ├── buffer.ts
│   │   │   │   │   ├── bufferCount.ts
│   │   │   │   │   ├── bufferTime.ts
│   │   │   │   │   ├── bufferToggle.ts
│   │   │   │   │   ├── bufferWhen.ts
│   │   │   │   │   ├── catchError.ts
│   │   │   │   │   ├── combineAll.ts
│   │   │   │   │   ├── combineLatest.ts
│   │   │   │   │   ├── concat.ts
│   │   │   │   │   ├── concatAll.ts
│   │   │   │   │   ├── concatMap.ts
│   │   │   │   │   ├── concatMapTo.ts
│   │   │   │   │   ├── count.ts
│   │   │   │   │   ├── debounce.ts
│   │   │   │   │   ├── debounceTime.ts
│   │   │   │   │   ├── defaultIfEmpty.ts
│   │   │   │   │   ├── delay.ts
│   │   │   │   │   ├── delayWhen.ts
│   │   │   │   │   ├── dematerialize.ts
│   │   │   │   │   ├── distinct.ts
│   │   │   │   │   ├── distinctUntilChanged.ts
│   │   │   │   │   ├── distinctUntilKeyChanged.ts
│   │   │   │   │   ├── elementAt.ts
│   │   │   │   │   ├── endWith.ts
│   │   │   │   │   ├── every.ts
│   │   │   │   │   ├── exhaust.ts
│   │   │   │   │   ├── exhaustMap.ts
│   │   │   │   │   ├── expand.ts
│   │   │   │   │   ├── filter.ts
│   │   │   │   │   ├── finalize.ts
│   │   │   │   │   ├── find.ts
│   │   │   │   │   ├── findIndex.ts
│   │   │   │   │   ├── first.ts
│   │   │   │   │   ├── groupBy.ts
│   │   │   │   │   ├── ignoreElements.ts
│   │   │   │   │   ├── index.ts
│   │   │   │   │   ├── isEmpty.ts
│   │   │   │   │   ├── last.ts
│   │   │   │   │   ├── map.ts
│   │   │   │   │   ├── mapTo.ts
│   │   │   │   │   ├── materialize.ts
│   │   │   │   │   ├── max.ts
│   │   │   │   │   ├── merge.ts
│   │   │   │   │   ├── mergeAll.ts
│   │   │   │   │   ├── mergeMap.ts
│   │   │   │   │   ├── mergeMapTo.ts
│   │   │   │   │   ├── mergeScan.ts
│   │   │   │   │   ├── min.ts
│   │   │   │   │   ├── multicast.ts
│   │   │   │   │   ├── observeOn.ts
│   │   │   │   │   ├── onErrorResumeNext.ts
│   │   │   │   │   ├── pairwise.ts
│   │   │   │   │   ├── partition.ts
│   │   │   │   │   ├── pluck.ts
│   │   │   │   │   ├── publish.ts
│   │   │   │   │   ├── publishBehavior.ts
│   │   │   │   │   ├── publishLast.ts
│   │   │   │   │   ├── publishReplay.ts
│   │   │   │   │   ├── race.ts
│   │   │   │   │   ├── reduce.ts
│   │   │   │   │   ├── refCount.ts
│   │   │   │   │   ├── repeat.ts
│   │   │   │   │   ├── repeatWhen.ts
│   │   │   │   │   ├── retry.ts
│   │   │   │   │   ├── retryWhen.ts
│   │   │   │   │   ├── sample.ts
│   │   │   │   │   ├── sampleTime.ts
│   │   │   │   │   ├── scan.ts
│   │   │   │   │   ├── sequenceEqual.ts
│   │   │   │   │   ├── share.ts
│   │   │   │   │   ├── shareReplay.ts
│   │   │   │   │   ├── single.ts
│   │   │   │   │   ├── skip.ts
│   │   │   │   │   ├── skipLast.ts
│   │   │   │   │   ├── skipUntil.ts
│   │   │   │   │   ├── skipWhile.ts
│   │   │   │   │   ├── startWith.ts
│   │   │   │   │   ├── subscribeOn.ts
│   │   │   │   │   ├── switchAll.ts
│   │   │   │   │   ├── switchMap.ts
│   │   │   │   │   ├── switchMapTo.ts
│   │   │   │   │   ├── take.ts
│   │   │   │   │   ├── takeLast.ts
│   │   │   │   │   ├── takeUntil.ts
│   │   │   │   │   ├── takeWhile.ts
│   │   │   │   │   ├── tap.ts
│   │   │   │   │   ├── throttle.ts
│   │   │   │   │   ├── throttleTime.ts
│   │   │   │   │   ├── throwIfEmpty.ts
│   │   │   │   │   ├── timeInterval.ts
│   │   │   │   │   ├── timeout.ts
│   │   │   │   │   ├── timeoutWith.ts
│   │   │   │   │   ├── timestamp.ts
│   │   │   │   │   ├── toArray.ts
│   │   │   │   │   ├── window.ts
│   │   │   │   │   ├── windowCount.ts
│   │   │   │   │   ├── windowTime.ts
│   │   │   │   │   ├── windowToggle.ts
│   │   │   │   │   ├── windowWhen.ts
│   │   │   │   │   ├── withLatestFrom.ts
│   │   │   │   │   ├── zip.ts
│   │   │   │   │   └── zipAll.ts
│   │   │   │   ├── scheduler
│   │   │   │   │   ├── Action.ts
│   │   │   │   │   ├── AnimationFrameAction.ts
│   │   │   │   │   ├── AnimationFrameScheduler.ts
│   │   │   │   │   ├── AsapAction.ts
│   │   │   │   │   ├── AsapScheduler.ts
│   │   │   │   │   ├── AsyncAction.ts
│   │   │   │   │   ├── AsyncScheduler.ts
│   │   │   │   │   ├── QueueAction.ts
│   │   │   │   │   ├── QueueScheduler.ts
│   │   │   │   │   ├── VirtualTimeScheduler.ts
│   │   │   │   │   ├── animationFrame.ts
│   │   │   │   │   ├── asap.ts
│   │   │   │   │   ├── async.ts
│   │   │   │   │   └── queue.ts
│   │   │   │   ├── symbol
│   │   │   │   │   ├── iterator.ts
│   │   │   │   │   ├── observable.ts
│   │   │   │   │   └── rxSubscriber.ts
│   │   │   │   ├── testing
│   │   │   │   │   ├── ColdObservable.ts
│   │   │   │   │   ├── HotObservable.ts
│   │   │   │   │   ├── SubscriptionLog.ts
│   │   │   │   │   ├── SubscriptionLoggable.ts
│   │   │   │   │   ├── TestMessage.ts
│   │   │   │   │   └── TestScheduler.ts
│   │   │   │   ├── types.ts
│   │   │   │   ├── umd.ts
│   │   │   │   └── util
│   │   │   │       ├── ArgumentOutOfRangeError.ts
│   │   │   │       ├── EmptyError.ts
│   │   │   │       ├── Immediate.ts
│   │   │   │       ├── ObjectUnsubscribedError.ts
│   │   │   │       ├── TimeoutError.ts
│   │   │   │       ├── UnsubscriptionError.ts
│   │   │   │       ├── applyMixins.ts
│   │   │   │       ├── canReportError.ts
│   │   │   │       ├── errorObject.ts
│   │   │   │       ├── hostReportError.ts
│   │   │   │       ├── identity.ts
│   │   │   │       ├── isArray.ts
│   │   │   │       ├── isArrayLike.ts
│   │   │   │       ├── isDate.ts
│   │   │   │       ├── isFunction.ts
│   │   │   │       ├── isInteropObservable.ts
│   │   │   │       ├── isIterable.ts
│   │   │   │       ├── isNumeric.ts
│   │   │   │       ├── isObject.ts
│   │   │   │       ├── isObservable.ts
│   │   │   │       ├── isPromise.ts
│   │   │   │       ├── isScheduler.ts
│   │   │   │       ├── noop.ts
│   │   │   │       ├── not.ts
│   │   │   │       ├── pipe.ts
│   │   │   │       ├── root.ts
│   │   │   │       ├── subscribeTo.ts
│   │   │   │       ├── subscribeToArray.ts
│   │   │   │       ├── subscribeToIterable.ts
│   │   │   │       ├── subscribeToObservable.ts
│   │   │   │       ├── subscribeToPromise.ts
│   │   │   │       ├── subscribeToResult.ts
│   │   │   │       ├── toSubscriber.ts
│   │   │   │       └── tryCatch.ts
│   │   │   ├── internal-compatibility
│   │   │   │   ├── index.ts
│   │   │   │   └── package.json
│   │   │   ├── observable
│   │   │   │   ├── ArrayLikeObservable.ts
│   │   │   │   ├── ArrayObservable.ts
│   │   │   │   ├── BoundCallbackObservable.ts
│   │   │   │   ├── BoundNodeCallbackObservable.ts
│   │   │   │   ├── ConnectableObservable.ts
│   │   │   │   ├── DeferObservable.ts
│   │   │   │   ├── EmptyObservable.ts
│   │   │   │   ├── ErrorObservable.ts
│   │   │   │   ├── ForkJoinObservable.ts
│   │   │   │   ├── FromEventObservable.ts
│   │   │   │   ├── FromEventPatternObservable.ts
│   │   │   │   ├── FromObservable.ts
│   │   │   │   ├── GenerateObservable.ts
│   │   │   │   ├── IfObservable.ts
│   │   │   │   ├── IntervalObservable.ts
│   │   │   │   ├── IteratorObservable.ts
│   │   │   │   ├── NeverObservable.ts
│   │   │   │   ├── PairsObservable.ts
│   │   │   │   ├── PromiseObservable.ts
│   │   │   │   ├── RangeObservable.ts
│   │   │   │   ├── ScalarObservable.ts
│   │   │   │   ├── SubscribeOnObservable.ts
│   │   │   │   ├── TimerObservable.ts
│   │   │   │   ├── UsingObservable.ts
│   │   │   │   ├── bindCallback.ts
│   │   │   │   ├── bindNodeCallback.ts
│   │   │   │   ├── combineLatest.ts
│   │   │   │   ├── concat.ts
│   │   │   │   ├── defer.ts
│   │   │   │   ├── dom
│   │   │   │   │   ├── AjaxObservable.ts
│   │   │   │   │   ├── WebSocketSubject.ts
│   │   │   │   │   ├── ajax.ts
│   │   │   │   │   └── webSocket.ts
│   │   │   │   ├── empty.ts
│   │   │   │   ├── forkJoin.ts
│   │   │   │   ├── from.ts
│   │   │   │   ├── fromArray.ts
│   │   │   │   ├── fromEvent.ts
│   │   │   │   ├── fromEventPattern.ts
│   │   │   │   ├── fromIterable.ts
│   │   │   │   ├── fromPromise.ts
│   │   │   │   ├── generate.ts
│   │   │   │   ├── if.ts
│   │   │   │   ├── interval.ts
│   │   │   │   ├── merge.ts
│   │   │   │   ├── never.ts
│   │   │   │   ├── of.ts
│   │   │   │   ├── onErrorResumeNext.ts
│   │   │   │   ├── pairs.ts
│   │   │   │   ├── race.ts
│   │   │   │   ├── range.ts
│   │   │   │   ├── throw.ts
│   │   │   │   ├── timer.ts
│   │   │   │   ├── using.ts
│   │   │   │   └── zip.ts
│   │   │   ├── operator
│   │   │   │   ├── audit.ts
│   │   │   │   ├── auditTime.ts
│   │   │   │   ├── buffer.ts
│   │   │   │   ├── bufferCount.ts
│   │   │   │   ├── bufferTime.ts
│   │   │   │   ├── bufferToggle.ts
│   │   │   │   ├── bufferWhen.ts
│   │   │   │   ├── catch.ts
│   │   │   │   ├── combineAll.ts
│   │   │   │   ├── combineLatest.ts
│   │   │   │   ├── concat.ts
│   │   │   │   ├── concatAll.ts
│   │   │   │   ├── concatMap.ts
│   │   │   │   ├── concatMapTo.ts
│   │   │   │   ├── count.ts
│   │   │   │   ├── debounce.ts
│   │   │   │   ├── debounceTime.ts
│   │   │   │   ├── defaultIfEmpty.ts
│   │   │   │   ├── delay.ts
│   │   │   │   ├── delayWhen.ts
│   │   │   │   ├── dematerialize.ts
│   │   │   │   ├── distinct.ts
│   │   │   │   ├── distinctUntilChanged.ts
│   │   │   │   ├── distinctUntilKeyChanged.ts
│   │   │   │   ├── do.ts
│   │   │   │   ├── elementAt.ts
│   │   │   │   ├── every.ts
│   │   │   │   ├── exhaust.ts
│   │   │   │   ├── exhaustMap.ts
│   │   │   │   ├── expand.ts
│   │   │   │   ├── filter.ts
│   │   │   │   ├── finally.ts
│   │   │   │   ├── find.ts
│   │   │   │   ├── findIndex.ts
│   │   │   │   ├── first.ts
│   │   │   │   ├── groupBy.ts
│   │   │   │   ├── ignoreElements.ts
│   │   │   │   ├── isEmpty.ts
│   │   │   │   ├── last.ts
│   │   │   │   ├── let.ts
│   │   │   │   ├── map.ts
│   │   │   │   ├── mapTo.ts
│   │   │   │   ├── materialize.ts
│   │   │   │   ├── max.ts
│   │   │   │   ├── merge.ts
│   │   │   │   ├── mergeAll.ts
│   │   │   │   ├── mergeMap.ts
│   │   │   │   ├── mergeMapTo.ts
│   │   │   │   ├── mergeScan.ts
│   │   │   │   ├── min.ts
│   │   │   │   ├── multicast.ts
│   │   │   │   ├── observeOn.ts
│   │   │   │   ├── onErrorResumeNext.ts
│   │   │   │   ├── pairwise.ts
│   │   │   │   ├── partition.ts
│   │   │   │   ├── pluck.ts
│   │   │   │   ├── publish.ts
│   │   │   │   ├── publishBehavior.ts
│   │   │   │   ├── publishLast.ts
│   │   │   │   ├── publishReplay.ts
│   │   │   │   ├── race.ts
│   │   │   │   ├── reduce.ts
│   │   │   │   ├── repeat.ts
│   │   │   │   ├── repeatWhen.ts
│   │   │   │   ├── retry.ts
│   │   │   │   ├── retryWhen.ts
│   │   │   │   ├── sample.ts
│   │   │   │   ├── sampleTime.ts
│   │   │   │   ├── scan.ts
│   │   │   │   ├── sequenceEqual.ts
│   │   │   │   ├── share.ts
│   │   │   │   ├── shareReplay.ts
│   │   │   │   ├── single.ts
│   │   │   │   ├── skip.ts
│   │   │   │   ├── skipLast.ts
│   │   │   │   ├── skipUntil.ts
│   │   │   │   ├── skipWhile.ts
│   │   │   │   ├── startWith.ts
│   │   │   │   ├── subscribeOn.ts
│   │   │   │   ├── switch.ts
│   │   │   │   ├── switchMap.ts
│   │   │   │   ├── switchMapTo.ts
│   │   │   │   ├── take.ts
│   │   │   │   ├── takeLast.ts
│   │   │   │   ├── takeUntil.ts
│   │   │   │   ├── takeWhile.ts
│   │   │   │   ├── throttle.ts
│   │   │   │   ├── throttleTime.ts
│   │   │   │   ├── timeInterval.ts
│   │   │   │   ├── timeout.ts
│   │   │   │   ├── timeoutWith.ts
│   │   │   │   ├── timestamp.ts
│   │   │   │   ├── toArray.ts
│   │   │   │   ├── toPromise.ts
│   │   │   │   ├── window.ts
│   │   │   │   ├── windowCount.ts
│   │   │   │   ├── windowTime.ts
│   │   │   │   ├── windowToggle.ts
│   │   │   │   ├── windowWhen.ts
│   │   │   │   ├── withLatestFrom.ts
│   │   │   │   ├── zip.ts
│   │   │   │   └── zipAll.ts
│   │   │   ├── operators
│   │   │   │   ├── BUILD.bazel
│   │   │   │   ├── audit.ts
│   │   │   │   ├── auditTime.ts
│   │   │   │   ├── buffer.ts
│   │   │   │   ├── bufferCount.ts
│   │   │   │   ├── bufferTime.ts
│   │   │   │   ├── bufferToggle.ts
│   │   │   │   ├── bufferWhen.ts
│   │   │   │   ├── catchError.ts
│   │   │   │   ├── combineAll.ts
│   │   │   │   ├── combineLatest.ts
│   │   │   │   ├── concat.ts
│   │   │   │   ├── concatAll.ts
│   │   │   │   ├── concatMap.ts
│   │   │   │   ├── concatMapTo.ts
│   │   │   │   ├── count.ts
│   │   │   │   ├── debounce.ts
│   │   │   │   ├── debounceTime.ts
│   │   │   │   ├── defaultIfEmpty.ts
│   │   │   │   ├── delay.ts
│   │   │   │   ├── delayWhen.ts
│   │   │   │   ├── dematerialize.ts
│   │   │   │   ├── distinct.ts
│   │   │   │   ├── distinctUntilChanged.ts
│   │   │   │   ├── distinctUntilKeyChanged.ts
│   │   │   │   ├── elementAt.ts
│   │   │   │   ├── every.ts
│   │   │   │   ├── exhaust.ts
│   │   │   │   ├── exhaustMap.ts
│   │   │   │   ├── expand.ts
│   │   │   │   ├── filter.ts
│   │   │   │   ├── finalize.ts
│   │   │   │   ├── find.ts
│   │   │   │   ├── findIndex.ts
│   │   │   │   ├── first.ts
│   │   │   │   ├── groupBy.ts
│   │   │   │   ├── ignoreElements.ts
│   │   │   │   ├── index.ts
│   │   │   │   ├── isEmpty.ts
│   │   │   │   ├── last.ts
│   │   │   │   ├── map.ts
│   │   │   │   ├── mapTo.ts
│   │   │   │   ├── materialize.ts
│   │   │   │   ├── max.ts
│   │   │   │   ├── merge.ts
│   │   │   │   ├── mergeAll.ts
│   │   │   │   ├── mergeMap.ts
│   │   │   │   ├── mergeMapTo.ts
│   │   │   │   ├── mergeScan.ts
│   │   │   │   ├── min.ts
│   │   │   │   ├── multicast.ts
│   │   │   │   ├── observeOn.ts
│   │   │   │   ├── onErrorResumeNext.ts
│   │   │   │   ├── package.json
│   │   │   │   ├── pairwise.ts
│   │   │   │   ├── partition.ts
│   │   │   │   ├── pluck.ts
│   │   │   │   ├── publish.ts
│   │   │   │   ├── publishBehavior.ts
│   │   │   │   ├── publishLast.ts
│   │   │   │   ├── publishReplay.ts
│   │   │   │   ├── race.ts
│   │   │   │   ├── reduce.ts
│   │   │   │   ├── refCount.ts
│   │   │   │   ├── repeat.ts
│   │   │   │   ├── repeatWhen.ts
│   │   │   │   ├── retry.ts
│   │   │   │   ├── retryWhen.ts
│   │   │   │   ├── sample.ts
│   │   │   │   ├── sampleTime.ts
│   │   │   │   ├── scan.ts
│   │   │   │   ├── sequenceEqual.ts
│   │   │   │   ├── share.ts
│   │   │   │   ├── shareReplay.ts
│   │   │   │   ├── single.ts
│   │   │   │   ├── skip.ts
│   │   │   │   ├── skipLast.ts
│   │   │   │   ├── skipUntil.ts
│   │   │   │   ├── skipWhile.ts
│   │   │   │   ├── startWith.ts
│   │   │   │   ├── subscribeOn.ts
│   │   │   │   ├── switchAll.ts
│   │   │   │   ├── switchMap.ts
│   │   │   │   ├── switchMapTo.ts
│   │   │   │   ├── take.ts
│   │   │   │   ├── takeLast.ts
│   │   │   │   ├── takeUntil.ts
│   │   │   │   ├── takeWhile.ts
│   │   │   │   ├── tap.ts
│   │   │   │   ├── throttle.ts
│   │   │   │   ├── throttleTime.ts
│   │   │   │   ├── throwIfEmpty.ts
│   │   │   │   ├── timeInterval.ts
│   │   │   │   ├── timeout.ts
│   │   │   │   ├── timeoutWith.ts
│   │   │   │   ├── timestamp.ts
│   │   │   │   ├── toArray.ts
│   │   │   │   ├── window.ts
│   │   │   │   ├── windowCount.ts
│   │   │   │   ├── windowTime.ts
│   │   │   │   ├── windowToggle.ts
│   │   │   │   ├── windowWhen.ts
│   │   │   │   ├── withLatestFrom.ts
│   │   │   │   ├── zip.ts
│   │   │   │   └── zipAll.ts
│   │   │   ├── scheduler
│   │   │   │   ├── animationFrame.ts
│   │   │   │   ├── asap.ts
│   │   │   │   ├── async.ts
│   │   │   │   └── queue.ts
│   │   │   ├── symbol
│   │   │   │   ├── iterator.ts
│   │   │   │   ├── observable.ts
│   │   │   │   └── rxSubscriber.ts
│   │   │   ├── testing
│   │   │   │   ├── BUILD.bazel
│   │   │   │   ├── index.ts
│   │   │   │   └── package.json
│   │   │   ├── tsconfig.json
│   │   │   ├── util
│   │   │   │   ├── ArgumentOutOfRangeError.ts
│   │   │   │   ├── EmptyError.ts
│   │   │   │   ├── Immediate.ts
│   │   │   │   ├── ObjectUnsubscribedError.ts
│   │   │   │   ├── TimeoutError.ts
│   │   │   │   ├── UnsubscriptionError.ts
│   │   │   │   ├── applyMixins.ts
│   │   │   │   ├── errorObject.ts
│   │   │   │   ├── hostReportError.ts
│   │   │   │   ├── identity.ts
│   │   │   │   ├── isArray.ts
│   │   │   │   ├── isArrayLike.ts
│   │   │   │   ├── isDate.ts
│   │   │   │   ├── isFunction.ts
│   │   │   │   ├── isIterable.ts
│   │   │   │   ├── isNumeric.ts
│   │   │   │   ├── isObject.ts
│   │   │   │   ├── isObservable.ts
│   │   │   │   ├── isPromise.ts
│   │   │   │   ├── isScheduler.ts
│   │   │   │   ├── noop.ts
│   │   │   │   ├── not.ts
│   │   │   │   ├── pipe.ts
│   │   │   │   ├── root.ts
│   │   │   │   ├── subscribeTo.ts
│   │   │   │   ├── subscribeToArray.ts
│   │   │   │   ├── subscribeToIterable.ts
│   │   │   │   ├── subscribeToObservable.ts
│   │   │   │   ├── subscribeToPromise.ts
│   │   │   │   ├── subscribeToResult.ts
│   │   │   │   ├── toSubscriber.ts
│   │   │   │   └── tryCatch.ts
│   │   │   └── webSocket
│   │   │       ├── BUILD.bazel
│   │   │       ├── index.ts
│   │   │       └── package.json
│   │   ├── symbol
│   │   │   ├── iterator.d.ts
│   │   │   ├── iterator.js
│   │   │   ├── iterator.js.map
│   │   │   ├── observable.d.ts
│   │   │   ├── observable.js
│   │   │   ├── observable.js.map
│   │   │   ├── rxSubscriber.d.ts
│   │   │   ├── rxSubscriber.js
│   │   │   └── rxSubscriber.js.map
│   │   ├── testing
│   │   │   ├── index.d.ts
│   │   │   ├── index.js
│   │   │   ├── index.js.map
│   │   │   └── package.json
│   │   ├── util
│   │   │   ├── ArgumentOutOfRangeError.d.ts
│   │   │   ├── ArgumentOutOfRangeError.js
│   │   │   ├── ArgumentOutOfRangeError.js.map
│   │   │   ├── EmptyError.d.ts
│   │   │   ├── EmptyError.js
│   │   │   ├── EmptyError.js.map
│   │   │   ├── Immediate.d.ts
│   │   │   ├── Immediate.js
│   │   │   ├── Immediate.js.map
│   │   │   ├── ObjectUnsubscribedError.d.ts
│   │   │   ├── ObjectUnsubscribedError.js
│   │   │   ├── ObjectUnsubscribedError.js.map
│   │   │   ├── TimeoutError.d.ts
│   │   │   ├── TimeoutError.js
│   │   │   ├── TimeoutError.js.map
│   │   │   ├── UnsubscriptionError.d.ts
│   │   │   ├── UnsubscriptionError.js
│   │   │   ├── UnsubscriptionError.js.map
│   │   │   ├── applyMixins.d.ts
│   │   │   ├── applyMixins.js
│   │   │   ├── applyMixins.js.map
│   │   │   ├── errorObject.d.ts
│   │   │   ├── errorObject.js
│   │   │   ├── errorObject.js.map
│   │   │   ├── hostReportError.d.ts
│   │   │   ├── hostReportError.js
│   │   │   ├── hostReportError.js.map
│   │   │   ├── identity.d.ts
│   │   │   ├── identity.js
│   │   │   ├── identity.js.map
│   │   │   ├── isArray.d.ts
│   │   │   ├── isArray.js
│   │   │   ├── isArray.js.map
│   │   │   ├── isArrayLike.d.ts
│   │   │   ├── isArrayLike.js
│   │   │   ├── isArrayLike.js.map
│   │   │   ├── isDate.d.ts
│   │   │   ├── isDate.js
│   │   │   ├── isDate.js.map
│   │   │   ├── isFunction.d.ts
│   │   │   ├── isFunction.js
│   │   │   ├── isFunction.js.map
│   │   │   ├── isIterable.d.ts
│   │   │   ├── isIterable.js
│   │   │   ├── isIterable.js.map
│   │   │   ├── isNumeric.d.ts
│   │   │   ├── isNumeric.js
│   │   │   ├── isNumeric.js.map
│   │   │   ├── isObject.d.ts
│   │   │   ├── isObject.js
│   │   │   ├── isObject.js.map
│   │   │   ├── isObservable.d.ts
│   │   │   ├── isObservable.js
│   │   │   ├── isObservable.js.map
│   │   │   ├── isPromise.d.ts
│   │   │   ├── isPromise.js
│   │   │   ├── isPromise.js.map
│   │   │   ├── isScheduler.d.ts
│   │   │   ├── isScheduler.js
│   │   │   ├── isScheduler.js.map
│   │   │   ├── noop.d.ts
│   │   │   ├── noop.js
│   │   │   ├── noop.js.map
│   │   │   ├── not.d.ts
│   │   │   ├── not.js
│   │   │   ├── not.js.map
│   │   │   ├── pipe.d.ts
│   │   │   ├── pipe.js
│   │   │   ├── pipe.js.map
│   │   │   ├── root.d.ts
│   │   │   ├── root.js
│   │   │   ├── root.js.map
│   │   │   ├── subscribeTo.d.ts
│   │   │   ├── subscribeTo.js
│   │   │   ├── subscribeTo.js.map
│   │   │   ├── subscribeToArray.d.ts
│   │   │   ├── subscribeToArray.js
│   │   │   ├── subscribeToArray.js.map
│   │   │   ├── subscribeToIterable.d.ts
│   │   │   ├── subscribeToIterable.js
│   │   │   ├── subscribeToIterable.js.map
│   │   │   ├── subscribeToObservable.d.ts
│   │   │   ├── subscribeToObservable.js
│   │   │   ├── subscribeToObservable.js.map
│   │   │   ├── subscribeToPromise.d.ts
│   │   │   ├── subscribeToPromise.js
│   │   │   ├── subscribeToPromise.js.map
│   │   │   ├── subscribeToResult.d.ts
│   │   │   ├── subscribeToResult.js
│   │   │   ├── subscribeToResult.js.map
│   │   │   ├── toSubscriber.d.ts
│   │   │   ├── toSubscriber.js
│   │   │   ├── toSubscriber.js.map
│   │   │   ├── tryCatch.d.ts
│   │   │   ├── tryCatch.js
│   │   │   └── tryCatch.js.map
│   │   └── webSocket
│   │       ├── index.d.ts
│   │       ├── index.js
│   │       ├── index.js.map
│   │       └── package.json
│   ├── safer-buffer
│   │   ├── LICENSE
│   │   ├── Porting-Buffer.md
│   │   ├── Readme.md
│   │   ├── dangerous.js
│   │   ├── package.json
│   │   ├── safer.js
│   │   └── tests.js
│   ├── semver
│   │   ├── LICENSE
│   │   ├── README.md
│   │   ├── bin
│   │   │   └── semver
│   │   ├── package.json
│   │   ├── range.bnf
│   │   └── semver.js
│   ├── shebang-command
│   │   ├── index.js
│   │   ├── license
│   │   ├── package.json
│   │   └── readme.md
│   ├── shebang-regex
│   │   ├── index.js
│   │   ├── license
│   │   ├── package.json
│   │   └── readme.md
│   ├── signal-exit
│   │   ├── CHANGELOG.md
│   │   ├── LICENSE.txt
│   │   ├── README.md
│   │   ├── index.js
│   │   ├── package.json
│   │   └── signals.js
│   ├── slice-ansi
│   │   ├── index.js
│   │   ├── license
│   │   ├── package.json
│   │   └── readme.md
│   ├── sprintf-js
│   │   ├── LICENSE
│   │   ├── README.md
│   │   ├── bower.json
│   │   ├── demo
│   │   │   └── angular.html
│   │   ├── dist
│   │   │   ├── angular-sprintf.min.js
│   │   │   ├── angular-sprintf.min.js.map
│   │   │   ├── angular-sprintf.min.map
│   │   │   ├── sprintf.min.js
│   │   │   ├── sprintf.min.js.map
│   │   │   └── sprintf.min.map
│   │   ├── gruntfile.js
│   │   ├── package.json
│   │   ├── src
│   │   │   ├── angular-sprintf.js
│   │   │   └── sprintf.js
│   │   └── test
│   │       └── test.js
│   ├── string-width
│   │   ├── index.js
│   │   ├── license
│   │   ├── package.json
│   │   └── readme.md
│   ├── strip-ansi
│   │   ├── index.js
│   │   ├── license
│   │   ├── package.json
│   │   └── readme.md
│   ├── strip-json-comments
│   │   ├── index.js
│   │   ├── license
│   │   ├── package.json
│   │   └── readme.md
│   ├── supports-color
│   │   ├── browser.js
│   │   ├── index.js
│   │   ├── license
│   │   ├── package.json
│   │   └── readme.md
│   ├── table
│   │   ├── LICENSE
│   │   ├── README.md
│   │   ├── dist
│   │   │   ├── alignString.js
│   │   │   ├── alignString.js.flow
│   │   │   ├── alignString.js.map
│   │   │   ├── alignTableData.js
│   │   │   ├── alignTableData.js.flow
│   │   │   ├── alignTableData.js.map
│   │   │   ├── calculateCellHeight.js
│   │   │   ├── calculateCellHeight.js.flow
│   │   │   ├── calculateCellHeight.js.map
│   │   │   ├── calculateCellWidthIndex.js
│   │   │   ├── calculateCellWidthIndex.js.flow
│   │   │   ├── calculateCellWidthIndex.js.map
│   │   │   ├── calculateMaximumColumnWidthIndex.js
│   │   │   ├── calculateMaximumColumnWidthIndex.js.flow
│   │   │   ├── calculateMaximumColumnWidthIndex.js.map
│   │   │   ├── calculateRowHeightIndex.js
│   │   │   ├── calculateRowHeightIndex.js.flow
│   │   │   ├── calculateRowHeightIndex.js.map
│   │   │   ├── createStream.js
│   │   │   ├── createStream.js.flow
│   │   │   ├── createStream.js.map
│   │   │   ├── drawBorder.js
│   │   │   ├── drawBorder.js.flow
│   │   │   ├── drawBorder.js.map
│   │   │   ├── drawRow.js
│   │   │   ├── drawRow.js.flow
│   │   │   ├── drawRow.js.map
│   │   │   ├── drawTable.js
│   │   │   ├── drawTable.js.flow
│   │   │   ├── drawTable.js.map
│   │   │   ├── getBorderCharacters.js
│   │   │   ├── getBorderCharacters.js.flow
│   │   │   ├── getBorderCharacters.js.map
│   │   │   ├── index.js
│   │   │   ├── index.js.flow
│   │   │   ├── index.js.map
│   │   │   ├── makeConfig.js
│   │   │   ├── makeConfig.js.flow
│   │   │   ├── makeConfig.js.map
│   │   │   ├── makeStreamConfig.js
│   │   │   ├── makeStreamConfig.js.flow
│   │   │   ├── makeStreamConfig.js.map
│   │   │   ├── mapDataUsingRowHeightIndex.js
│   │   │   ├── mapDataUsingRowHeightIndex.js.flow
│   │   │   ├── mapDataUsingRowHeightIndex.js.map
│   │   │   ├── padTableData.js
│   │   │   ├── padTableData.js.flow
│   │   │   ├── padTableData.js.map
│   │   │   ├── schemas
│   │   │   │   ├── config.json
│   │   │   │   └── streamConfig.json
│   │   │   ├── stringifyTableData.js
│   │   │   ├── stringifyTableData.js.flow
│   │   │   ├── stringifyTableData.js.map
│   │   │   ├── table.js
│   │   │   ├── table.js.flow
│   │   │   ├── table.js.map
│   │   │   ├── truncateTableData.js
│   │   │   ├── truncateTableData.js.flow
│   │   │   ├── truncateTableData.js.map
│   │   │   ├── validateConfig.js
│   │   │   ├── validateConfig.js.flow
│   │   │   ├── validateConfig.js.map
│   │   │   ├── validateStreamConfig.js
│   │   │   ├── validateTableData.js
│   │   │   ├── validateTableData.js.flow
│   │   │   ├── validateTableData.js.map
│   │   │   ├── wrapString.js
│   │   │   ├── wrapString.js.flow
│   │   │   ├── wrapString.js.map
│   │   │   ├── wrapWord.js
│   │   │   ├── wrapWord.js.flow
│   │   │   └── wrapWord.js.map
│   │   └── package.json
│   ├── text-table
│   │   ├── LICENSE
│   │   ├── example
│   │   │   ├── align.js
│   │   │   ├── center.js
│   │   │   ├── dotalign.js
│   │   │   ├── doubledot.js
│   │   │   └── table.js
│   │   ├── index.js
│   │   ├── package.json
│   │   ├── readme.markdown
│   │   └── test
│   │       ├── align.js
│   │       ├── ansi-colors.js
│   │       ├── center.js
│   │       ├── dotalign.js
│   │       ├── doubledot.js
│   │       └── table.js
│   ├── through
│   │   ├── LICENSE.APACHE2
│   │   ├── LICENSE.MIT
│   │   ├── index.js
│   │   ├── package.json
│   │   ├── readme.markdown
│   │   └── test
│   │       ├── async.js
│   │       ├── auto-destroy.js
│   │       ├── buffering.js
│   │       ├── end.js
│   │       └── index.js
│   ├── tmp
│   │   ├── LICENSE
│   │   ├── README.md
│   │   ├── lib
│   │   │   └── tmp.js
│   │   └── package.json
│   ├── tslib
│   │   ├── CopyrightNotice.txt
│   │   ├── LICENSE.txt
│   │   ├── README.md
│   │   ├── bower.json
│   │   ├── docs
│   │   │   └── generator.md
│   │   ├── package.json
│   │   ├── tslib.d.ts
│   │   ├── tslib.es6.html
│   │   ├── tslib.es6.js
│   │   ├── tslib.html
│   │   └── tslib.js
│   ├── type-check
│   │   ├── LICENSE
│   │   ├── README.md
│   │   ├── lib
│   │   │   ├── check.js
│   │   │   ├── index.js
│   │   │   └── parse-type.js
│   │   └── package.json
│   ├── uri-js
│   │   ├── README.md
│   │   ├── bower.json
│   │   ├── dist
│   │   │   ├── es5
│   │   │   │   ├── uri.all.d.ts
│   │   │   │   ├── uri.all.js
│   │   │   │   ├── uri.all.js.map
│   │   │   │   ├── uri.all.min.d.ts
│   │   │   │   ├── uri.all.min.js
│   │   │   │   └── uri.all.min.js.map
│   │   │   └── esnext
│   │   │       ├── index.d.ts
│   │   │       ├── index.js
│   │   │       ├── index.js.map
│   │   │       ├── regexps-iri.d.ts
│   │   │       ├── regexps-iri.js
│   │   │       ├── regexps-iri.js.map
│   │   │       ├── regexps-uri.d.ts
│   │   │       ├── regexps-uri.js
│   │   │       ├── regexps-uri.js.map
│   │   │       ├── schemes
│   │   │       │   ├── http.d.ts
│   │   │       │   ├── http.js
│   │   │       │   ├── http.js.map
│   │   │       │   ├── https.d.ts
│   │   │       │   ├── https.js
│   │   │       │   ├── https.js.map
│   │   │       │   ├── mailto.d.ts
│   │   │       │   ├── mailto.js
│   │   │       │   ├── mailto.js.map
│   │   │       │   ├── urn-uuid.d.ts
│   │   │       │   ├── urn-uuid.js
│   │   │       │   ├── urn-uuid.js.map
│   │   │       │   ├── urn.d.ts
│   │   │       │   ├── urn.js
│   │   │       │   └── urn.js.map
│   │   │       ├── uri.d.ts
│   │   │       ├── uri.js
│   │   │       ├── uri.js.map
│   │   │       ├── util.d.ts
│   │   │       ├── util.js
│   │   │       └── util.js.map
│   │   ├── package.json
│   │   ├── rollup.config.js
│   │   ├── src
│   │   │   ├── index.ts
│   │   │   ├── punycode.d.ts
│   │   │   ├── regexps-iri.ts
│   │   │   ├── regexps-uri.ts
│   │   │   ├── schemes
│   │   │   │   ├── http.ts
│   │   │   │   ├── https.ts
│   │   │   │   ├── mailto.ts
│   │   │   │   ├── urn-uuid.ts
│   │   │   │   └── urn.ts
│   │   │   ├── uri.ts
│   │   │   └── util.ts
│   │   ├── tests
│   │   │   ├── qunit.css
│   │   │   ├── qunit.js
│   │   │   ├── test-es5-min.html
│   │   │   ├── test-es5.html
│   │   │   └── tests.js
│   │   ├── tsconfig.json
│   │   └── yarn.lock
│   ├── which
│   │   ├── CHANGELOG.md
│   │   ├── LICENSE
│   │   ├── README.md
│   │   ├── bin
│   │   │   └── which
│   │   ├── package.json
│   │   └── which.js
│   ├── wordwrap
│   │   ├── LICENSE
│   │   ├── README.markdown
│   │   ├── example
│   │   │   ├── center.js
│   │   │   └── meat.js
│   │   ├── index.js
│   │   ├── package.json
│   │   └── test
│   │       ├── break.js
│   │       ├── idleness.txt
│   │       └── wrap.js
│   ├── wrappy
│   │   ├── LICENSE
│   │   ├── README.md
│   │   ├── package.json
│   │   └── wrappy.js
│   └── write
│       ├── LICENSE
│       ├── README.md
│       ├── index.js
│       └── package.json
├── package-lock.json
├── package.json
├── requirements.txt
├── robots.txt
├── scratch
│   └── blog_stuff.html
├── src
│   ├── footer_simple.php
│   ├── footer_social.php
│   ├── head_bp.php
│   ├── header_simple.php
│   ├── http_header.css.php
│   ├── http_header_css_basic.php
│   ├── http_header_seo.php
│   ├── linkedin_badge.php
│   ├── mysql_connect.php
│   ├── notes_credits.php
│   └── session_setup.php
└── vendor
    ├── autoload.php
    ├── bin
    │   └── phpunit -> ../phpunit/phpunit/phpunit
    ├── composer
    │   ├── ClassLoader.php
    │   ├── LICENSE
    │   ├── autoload_classmap.php
    │   ├── autoload_files.php
    │   ├── autoload_namespaces.php
    │   ├── autoload_psr4.php
    │   ├── autoload_real.php
    │   ├── autoload_static.php
    │   └── installed.json
    ├── doctrine
    │   └── instantiator
    │       ├── CONTRIBUTING.md
    │       ├── LICENSE
    │       ├── README.md
    │       ├── composer.json
    │       ├── docs
    │       │   └── en
    │       │       ├── index.rst
    │       │       └── sidebar.rst
    │       ├── phpbench.json
    │       ├── phpcs.xml.dist
    │       ├── phpstan.neon.dist
    │       └── src
    │           └── Doctrine
    │               └── Instantiator
    │                   ├── Exception
    │                   │   ├── ExceptionInterface.php
    │                   │   ├── InvalidArgumentException.php
    │                   │   └── UnexpectedValueException.php
    │                   ├── Instantiator.php
    │                   └── InstantiatorInterface.php
    ├── michelf
    │   └── php-markdown
    │       ├── License.md
    │       ├── Michelf
    │       │   ├── Markdown.inc.php
    │       │   ├── Markdown.php
    │       │   ├── MarkdownExtra.inc.php
    │       │   ├── MarkdownExtra.php
    │       │   ├── MarkdownInterface.inc.php
    │       │   └── MarkdownInterface.php
    │       ├── Readme.md
    │       ├── Readme.php
    │       └── composer.json
    ├── myclabs
    │   └── deep-copy
    │       ├── LICENSE
    │       ├── README.md
    │       ├── composer.json
    │       ├── doc
    │       │   ├── clone.png
    │       │   ├── deep-clone.png
    │       │   ├── deep-copy.png
    │       │   └── graph.png
    │       ├── fixtures
    │       │   ├── f001
    │       │   │   ├── A.php
    │       │   │   └── B.php
    │       │   ├── f002
    │       │   │   └── A.php
    │       │   ├── f003
    │       │   │   └── Foo.php
    │       │   ├── f004
    │       │   │   └── UnclonableItem.php
    │       │   ├── f005
    │       │   │   └── Foo.php
    │       │   ├── f006
    │       │   │   ├── A.php
    │       │   │   └── B.php
    │       │   ├── f007
    │       │   │   ├── FooDateInterval.php
    │       │   │   └── FooDateTimeZone.php
    │       │   └── f008
    │       │       ├── A.php
    │       │       └── B.php
    │       └── src
    │           └── DeepCopy
    │               ├── DeepCopy.php
    │               ├── Exception
    │               │   ├── CloneException.php
    │               │   └── PropertyException.php
    │               ├── Filter
    │               │   ├── Doctrine
    │               │   │   ├── DoctrineCollectionFilter.php
    │               │   │   ├── DoctrineEmptyCollectionFilter.php
    │               │   │   └── DoctrineProxyFilter.php
    │               │   ├── Filter.php
    │               │   ├── KeepFilter.php
    │               │   ├── ReplaceFilter.php
    │               │   └── SetNullFilter.php
    │               ├── Matcher
    │               │   ├── Doctrine
    │               │   │   └── DoctrineProxyMatcher.php
    │               │   ├── Matcher.php
    │               │   ├── PropertyMatcher.php
    │               │   ├── PropertyNameMatcher.php
    │               │   └── PropertyTypeMatcher.php
    │               ├── Reflection
    │               │   └── ReflectionHelper.php
    │               ├── TypeFilter
    │               │   ├── Date
    │               │   │   └── DateIntervalFilter.php
    │               │   ├── ReplaceFilter.php
    │               │   ├── ShallowCopyFilter.php
    │               │   ├── Spl
    │               │   │   ├── SplDoublyLinkedList.php
    │               │   │   └── SplDoublyLinkedListFilter.php
    │               │   └── TypeFilter.php
    │               ├── TypeMatcher
    │               │   └── TypeMatcher.php
    │               └── deep_copy.php
    ├── phar-io
    │   ├── manifest
    │   │   ├── LICENSE
    │   │   ├── README.md
    │   │   ├── build.xml
    │   │   ├── composer.json
    │   │   ├── composer.lock
    │   │   ├── examples
    │   │   │   └── example-01.php
    │   │   ├── phive.xml
    │   │   ├── phpunit.xml
    │   │   ├── src
    │   │   │   ├── ManifestDocumentMapper.php
    │   │   │   ├── ManifestLoader.php
    │   │   │   ├── ManifestSerializer.php
    │   │   │   ├── exceptions
    │   │   │   │   ├── Exception.php
    │   │   │   │   ├── InvalidApplicationNameException.php
    │   │   │   │   ├── InvalidEmailException.php
    │   │   │   │   ├── InvalidUrlException.php
    │   │   │   │   ├── ManifestDocumentException.php
    │   │   │   │   ├── ManifestDocumentMapperException.php
    │   │   │   │   ├── ManifestElementException.php
    │   │   │   │   └── ManifestLoaderException.php
    │   │   │   ├── values
    │   │   │   │   ├── Application.php
    │   │   │   │   ├── ApplicationName.php
    │   │   │   │   ├── Author.php
    │   │   │   │   ├── AuthorCollection.php
    │   │   │   │   ├── AuthorCollectionIterator.php
    │   │   │   │   ├── BundledComponent.php
    │   │   │   │   ├── BundledComponentCollection.php
    │   │   │   │   ├── BundledComponentCollectionIterator.php
    │   │   │   │   ├── CopyrightInformation.php
    │   │   │   │   ├── Email.php
    │   │   │   │   ├── Extension.php
    │   │   │   │   ├── Library.php
    │   │   │   │   ├── License.php
    │   │   │   │   ├── Manifest.php
    │   │   │   │   ├── PhpExtensionRequirement.php
    │   │   │   │   ├── PhpVersionRequirement.php
    │   │   │   │   ├── Requirement.php
    │   │   │   │   ├── RequirementCollection.php
    │   │   │   │   ├── RequirementCollectionIterator.php
    │   │   │   │   ├── Type.php
    │   │   │   │   └── Url.php
    │   │   │   └── xml
    │   │   │       ├── AuthorElement.php
    │   │   │       ├── AuthorElementCollection.php
    │   │   │       ├── BundlesElement.php
    │   │   │       ├── ComponentElement.php
    │   │   │       ├── ComponentElementCollection.php
    │   │   │       ├── ContainsElement.php
    │   │   │       ├── CopyrightElement.php
    │   │   │       ├── ElementCollection.php
    │   │   │       ├── ExtElement.php
    │   │   │       ├── ExtElementCollection.php
    │   │   │       ├── ExtensionElement.php
    │   │   │       ├── LicenseElement.php
    │   │   │       ├── ManifestDocument.php
    │   │   │       ├── ManifestDocumentLoadingException.php
    │   │   │       ├── ManifestElement.php
    │   │   │       ├── PhpElement.php
    │   │   │       └── RequiresElement.php
    │   │   └── tests
    │   │       ├── ManifestDocumentMapperTest.php
    │   │       ├── ManifestLoaderTest.php
    │   │       ├── ManifestSerializerTest.php
    │   │       ├── _fixture
    │   │       │   ├── custom.xml
    │   │       │   ├── extension-invalidcompatible.xml
    │   │       │   ├── extension.xml
    │   │       │   ├── invalidversion.xml
    │   │       │   ├── invalidversionconstraint.xml
    │   │       │   ├── library.xml
    │   │       │   ├── manifest.xml
    │   │       │   ├── phpunit-5.6.5.xml
    │   │       │   └── test.phar
    │   │       ├── exceptions
    │   │       │   └── ManifestDocumentLoadingExceptionTest.php
    │   │       ├── values
    │   │       │   ├── ApplicationNameTest.php
    │   │       │   ├── ApplicationTest.php
    │   │       │   ├── AuthorCollectionTest.php
    │   │       │   ├── AuthorTest.php
    │   │       │   ├── BundledComponentCollectionTest.php
    │   │       │   ├── BundledComponentTest.php
    │   │       │   ├── CopyrightInformationTest.php
    │   │       │   ├── EmailTest.php
    │   │       │   ├── ExtensionTest.php
    │   │       │   ├── LibraryTest.php
    │   │       │   ├── LicenseTest.php
    │   │       │   ├── ManifestTest.php
    │   │       │   ├── PhpExtensionRequirementTest.php
    │   │       │   ├── PhpVersionRequirementTest.php
    │   │       │   ├── RequirementCollectionTest.php
    │   │       │   └── UrlTest.php
    │   │       └── xml
    │   │           ├── AuthorElementCollectionTest.php
    │   │           ├── AuthorElementTest.php
    │   │           ├── BundlesElementTest.php
    │   │           ├── ComponentElementCollectionTest.php
    │   │           ├── ComponentElementTest.php
    │   │           ├── ContainsElementTest.php
    │   │           ├── CopyrightElementTest.php
    │   │           ├── ExtElementCollectionTest.php
    │   │           ├── ExtElementTest.php
    │   │           ├── ExtensionElementTest.php
    │   │           ├── LicenseElementTest.php
    │   │           ├── ManifestDocumentTest.php
    │   │           ├── PhpElementTest.php
    │   │           └── RequiresElementTest.php
    │   └── version
    │       ├── CHANGELOG.md
    │       ├── LICENSE
    │       ├── README.md
    │       ├── build.xml
    │       ├── composer.json
    │       ├── phive.xml
    │       ├── phpunit.xml
    │       ├── src
    │       │   ├── PreReleaseSuffix.php
    │       │   ├── Version.php
    │       │   ├── VersionConstraintParser.php
    │       │   ├── VersionConstraintValue.php
    │       │   ├── VersionNumber.php
    │       │   ├── constraints
    │       │   │   ├── AbstractVersionConstraint.php
    │       │   │   ├── AndVersionConstraintGroup.php
    │       │   │   ├── AnyVersionConstraint.php
    │       │   │   ├── ExactVersionConstraint.php
    │       │   │   ├── GreaterThanOrEqualToVersionConstraint.php
    │       │   │   ├── OrVersionConstraintGroup.php
    │       │   │   ├── SpecificMajorAndMinorVersionConstraint.php
    │       │   │   ├── SpecificMajorVersionConstraint.php
    │       │   │   └── VersionConstraint.php
    │       │   └── exceptions
    │       │       ├── Exception.php
    │       │       ├── InvalidPreReleaseSuffixException.php
    │       │       ├── InvalidVersionException.php
    │       │       └── UnsupportedVersionConstraintException.php
    │       └── tests
    │           ├── Integration
    │           │   └── VersionConstraintParserTest.php
    │           └── Unit
    │               ├── AbstractVersionConstraintTest.php
    │               ├── AndVersionConstraintGroupTest.php
    │               ├── AnyVersionConstraintTest.php
    │               ├── ExactVersionConstraintTest.php
    │               ├── GreaterThanOrEqualToVersionConstraintTest.php
    │               ├── OrVersionConstraintGroupTest.php
    │               ├── PreReleaseSuffixTest.php
    │               ├── SpecificMajorAndMinorVersionConstraintTest.php
    │               ├── SpecificMajorVersionConstraintTest.php
    │               └── VersionTest.php
    ├── phpdocumentor
    │   ├── reflection-common
    │   │   ├── LICENSE
    │   │   ├── README.md
    │   │   ├── composer.json
    │   │   └── src
    │   │       ├── Element.php
    │   │       ├── File.php
    │   │       ├── Fqsen.php
    │   │       ├── Location.php
    │   │       ├── Project.php
    │   │       └── ProjectFactory.php
    │   ├── reflection-docblock
    │   │   ├── LICENSE
    │   │   ├── README.md
    │   │   ├── composer.json
    │   │   ├── easy-coding-standard.neon
    │   │   └── src
    │   │       ├── DocBlock
    │   │       │   ├── Description.php
    │   │       │   ├── DescriptionFactory.php
    │   │       │   ├── ExampleFinder.php
    │   │       │   ├── Serializer.php
    │   │       │   ├── StandardTagFactory.php
    │   │       │   ├── Tag.php
    │   │       │   ├── TagFactory.php
    │   │       │   └── Tags
    │   │       │       ├── Author.php
    │   │       │       ├── BaseTag.php
    │   │       │       ├── Covers.php
    │   │       │       ├── Deprecated.php
    │   │       │       ├── Example.php
    │   │       │       ├── Factory
    │   │       │       │   ├── StaticMethod.php
    │   │       │       │   └── Strategy.php
    │   │       │       ├── Formatter
    │   │       │       │   ├── AlignFormatter.php
    │   │       │       │   └── PassthroughFormatter.php
    │   │       │       ├── Formatter.php
    │   │       │       ├── Generic.php
    │   │       │       ├── Link.php
    │   │       │       ├── Method.php
    │   │       │       ├── Param.php
    │   │       │       ├── Property.php
    │   │       │       ├── PropertyRead.php
    │   │       │       ├── PropertyWrite.php
    │   │       │       ├── Reference
    │   │       │       │   ├── Fqsen.php
    │   │       │       │   ├── Reference.php
    │   │       │       │   └── Url.php
    │   │       │       ├── Return_.php
    │   │       │       ├── See.php
    │   │       │       ├── Since.php
    │   │       │       ├── Source.php
    │   │       │       ├── Throws.php
    │   │       │       ├── Uses.php
    │   │       │       ├── Var_.php
    │   │       │       └── Version.php
    │   │       ├── DocBlock.php
    │   │       ├── DocBlockFactory.php
    │   │       └── DocBlockFactoryInterface.php
    │   └── type-resolver
    │       ├── LICENSE
    │       ├── README.md
    │       ├── composer.json
    │       └── src
    │           ├── FqsenResolver.php
    │           ├── Type.php
    │           ├── TypeResolver.php
    │           └── Types
    │               ├── Array_.php
    │               ├── Boolean.php
    │               ├── Callable_.php
    │               ├── Compound.php
    │               ├── Context.php
    │               ├── ContextFactory.php
    │               ├── Float_.php
    │               ├── Integer.php
    │               ├── Iterable_.php
    │               ├── Mixed_.php
    │               ├── Null_.php
    │               ├── Nullable.php
    │               ├── Object_.php
    │               ├── Parent_.php
    │               ├── Resource_.php
    │               ├── Scalar.php
    │               ├── Self_.php
    │               ├── Static_.php
    │               ├── String_.php
    │               ├── This.php
    │               └── Void_.php
    ├── phpspec
    │   └── prophecy
    │       ├── CHANGES.md
    │       ├── LICENSE
    │       ├── README.md
    │       ├── composer.json
    │       └── src
    │           └── Prophecy
    │               ├── Argument
    │               │   ├── ArgumentsWildcard.php
    │               │   └── Token
    │               │       ├── AnyValueToken.php
    │               │       ├── AnyValuesToken.php
    │               │       ├── ApproximateValueToken.php
    │               │       ├── ArrayCountToken.php
    │               │       ├── ArrayEntryToken.php
    │               │       ├── ArrayEveryEntryToken.php
    │               │       ├── CallbackToken.php
    │               │       ├── ExactValueToken.php
    │               │       ├── IdenticalValueToken.php
    │               │       ├── LogicalAndToken.php
    │               │       ├── LogicalNotToken.php
    │               │       ├── ObjectStateToken.php
    │               │       ├── StringContainsToken.php
    │               │       ├── TokenInterface.php
    │               │       └── TypeToken.php
    │               ├── Argument.php
    │               ├── Call
    │               │   ├── Call.php
    │               │   └── CallCenter.php
    │               ├── Comparator
    │               │   ├── ClosureComparator.php
    │               │   ├── Factory.php
    │               │   └── ProphecyComparator.php
    │               ├── Doubler
    │               │   ├── CachedDoubler.php
    │               │   ├── ClassPatch
    │               │   │   ├── ClassPatchInterface.php
    │               │   │   ├── DisableConstructorPatch.php
    │               │   │   ├── HhvmExceptionPatch.php
    │               │   │   ├── KeywordPatch.php
    │               │   │   ├── MagicCallPatch.php
    │               │   │   ├── ProphecySubjectPatch.php
    │               │   │   ├── ReflectionClassNewInstancePatch.php
    │               │   │   ├── SplFileInfoPatch.php
    │               │   │   ├── ThrowablePatch.php
    │               │   │   └── TraversablePatch.php
    │               │   ├── DoubleInterface.php
    │               │   ├── Doubler.php
    │               │   ├── Generator
    │               │   │   ├── ClassCodeGenerator.php
    │               │   │   ├── ClassCreator.php
    │               │   │   ├── ClassMirror.php
    │               │   │   ├── Node
    │               │   │   │   ├── ArgumentNode.php
    │               │   │   │   ├── ClassNode.php
    │               │   │   │   └── MethodNode.php
    │               │   │   ├── ReflectionInterface.php
    │               │   │   └── TypeHintReference.php
    │               │   ├── LazyDouble.php
    │               │   └── NameGenerator.php
    │               ├── Exception
    │               │   ├── Call
    │               │   │   └── UnexpectedCallException.php
    │               │   ├── Doubler
    │               │   │   ├── ClassCreatorException.php
    │               │   │   ├── ClassMirrorException.php
    │               │   │   ├── ClassNotFoundException.php
    │               │   │   ├── DoubleException.php
    │               │   │   ├── DoublerException.php
    │               │   │   ├── InterfaceNotFoundException.php
    │               │   │   ├── MethodNotExtendableException.php
    │               │   │   ├── MethodNotFoundException.php
    │               │   │   └── ReturnByReferenceException.php
    │               │   ├── Exception.php
    │               │   ├── InvalidArgumentException.php
    │               │   ├── Prediction
    │               │   │   ├── AggregateException.php
    │               │   │   ├── FailedPredictionException.php
    │               │   │   ├── NoCallsException.php
    │               │   │   ├── PredictionException.php
    │               │   │   ├── UnexpectedCallsCountException.php
    │               │   │   └── UnexpectedCallsException.php
    │               │   └── Prophecy
    │               │       ├── MethodProphecyException.php
    │               │       ├── ObjectProphecyException.php
    │               │       └── ProphecyException.php
    │               ├── PhpDocumentor
    │               │   ├── ClassAndInterfaceTagRetriever.php
    │               │   ├── ClassTagRetriever.php
    │               │   ├── LegacyClassTagRetriever.php
    │               │   └── MethodTagRetrieverInterface.php
    │               ├── Prediction
    │               │   ├── CallPrediction.php
    │               │   ├── CallTimesPrediction.php
    │               │   ├── CallbackPrediction.php
    │               │   ├── NoCallsPrediction.php
    │               │   └── PredictionInterface.php
    │               ├── Promise
    │               │   ├── CallbackPromise.php
    │               │   ├── PromiseInterface.php
    │               │   ├── ReturnArgumentPromise.php
    │               │   ├── ReturnPromise.php
    │               │   └── ThrowPromise.php
    │               ├── Prophecy
    │               │   ├── MethodProphecy.php
    │               │   ├── ObjectProphecy.php
    │               │   ├── ProphecyInterface.php
    │               │   ├── ProphecySubjectInterface.php
    │               │   ├── Revealer.php
    │               │   └── RevealerInterface.php
    │               ├── Prophet.php
    │               └── Util
    │                   ├── ExportUtil.php
    │                   └── StringUtil.php
    ├── phpunit
    │   ├── php-code-coverage
    │   │   ├── ChangeLog-6.1.md
    │   │   ├── LICENSE
    │   │   ├── README.md
    │   │   ├── build.xml
    │   │   ├── composer.json
    │   │   ├── phpunit.xml
    │   │   ├── src
    │   │   │   ├── CodeCoverage.php
    │   │   │   ├── Driver
    │   │   │   │   ├── Driver.php
    │   │   │   │   ├── PHPDBG.php
    │   │   │   │   └── Xdebug.php
    │   │   │   ├── Exception
    │   │   │   │   ├── CoveredCodeNotExecutedException.php
    │   │   │   │   ├── Exception.php
    │   │   │   │   ├── InvalidArgumentException.php
    │   │   │   │   ├── MissingCoversAnnotationException.php
    │   │   │   │   ├── RuntimeException.php
    │   │   │   │   └── UnintentionallyCoveredCodeException.php
    │   │   │   ├── Filter.php
    │   │   │   ├── Node
    │   │   │   │   ├── AbstractNode.php
    │   │   │   │   ├── Builder.php
    │   │   │   │   ├── Directory.php
    │   │   │   │   ├── File.php
    │   │   │   │   └── Iterator.php
    │   │   │   ├── Report
    │   │   │   │   ├── Clover.php
    │   │   │   │   ├── Crap4j.php
    │   │   │   │   ├── Html
    │   │   │   │   │   ├── Facade.php
    │   │   │   │   │   ├── Renderer
    │   │   │   │   │   │   ├── Dashboard.php
    │   │   │   │   │   │   ├── Directory.php
    │   │   │   │   │   │   ├── File.php
    │   │   │   │   │   │   └── Template
    │   │   │   │   │   │       ├── coverage_bar.html.dist
    │   │   │   │   │   │       ├── css
    │   │   │   │   │   │       │   ├── bootstrap.min.css
    │   │   │   │   │   │       │   ├── custom.css
    │   │   │   │   │   │       │   ├── nv.d3.min.css
    │   │   │   │   │   │       │   ├── octicons.css
    │   │   │   │   │   │       │   └── style.css
    │   │   │   │   │   │       ├── dashboard.html.dist
    │   │   │   │   │   │       ├── directory.html.dist
    │   │   │   │   │   │       ├── directory_item.html.dist
    │   │   │   │   │   │       ├── file.html.dist
    │   │   │   │   │   │       ├── file_item.html.dist
    │   │   │   │   │   │       ├── icons
    │   │   │   │   │   │       │   ├── file-code.svg
    │   │   │   │   │   │       │   └── file-directory.svg
    │   │   │   │   │   │       ├── js
    │   │   │   │   │   │       │   ├── bootstrap.min.js
    │   │   │   │   │   │       │   ├── d3.min.js
    │   │   │   │   │   │       │   ├── file.js
    │   │   │   │   │   │       │   ├── jquery.min.js
    │   │   │   │   │   │       │   ├── nv.d3.min.js
    │   │   │   │   │   │       │   └── popper.min.js
    │   │   │   │   │   │       └── method_item.html.dist
    │   │   │   │   │   └── Renderer.php
    │   │   │   │   ├── PHP.php
    │   │   │   │   ├── Text.php
    │   │   │   │   └── Xml
    │   │   │   │       ├── BuildInformation.php
    │   │   │   │       ├── Coverage.php
    │   │   │   │       ├── Directory.php
    │   │   │   │       ├── Facade.php
    │   │   │   │       ├── File.php
    │   │   │   │       ├── Method.php
    │   │   │   │       ├── Node.php
    │   │   │   │       ├── Project.php
    │   │   │   │       ├── Report.php
    │   │   │   │       ├── Source.php
    │   │   │   │       ├── Tests.php
    │   │   │   │       ├── Totals.php
    │   │   │   │       └── Unit.php
    │   │   │   ├── Util.php
    │   │   │   └── Version.php
    │   │   └── tests
    │   │       ├── TestCase.php
    │   │       ├── _files
    │   │       │   ├── BankAccount-clover.xml
    │   │       │   ├── BankAccount-crap4j.xml
    │   │       │   ├── BankAccount-text.txt
    │   │       │   ├── BankAccount.php
    │   │       │   ├── BankAccountTest.php
    │   │       │   ├── CoverageClassExtendedTest.php
    │   │       │   ├── CoverageClassTest.php
    │   │       │   ├── CoverageFunctionParenthesesTest.php
    │   │       │   ├── CoverageFunctionParenthesesWhitespaceTest.php
    │   │       │   ├── CoverageFunctionTest.php
    │   │       │   ├── CoverageMethodOneLineAnnotationTest.php
    │   │       │   ├── CoverageMethodParenthesesTest.php
    │   │       │   ├── CoverageMethodParenthesesWhitespaceTest.php
    │   │       │   ├── CoverageMethodTest.php
    │   │       │   ├── CoverageNoneTest.php
    │   │       │   ├── CoverageNotPrivateTest.php
    │   │       │   ├── CoverageNotProtectedTest.php
    │   │       │   ├── CoverageNotPublicTest.php
    │   │       │   ├── CoverageNothingTest.php
    │   │       │   ├── CoveragePrivateTest.php
    │   │       │   ├── CoverageProtectedTest.php
    │   │       │   ├── CoveragePublicTest.php
    │   │       │   ├── CoverageTwoDefaultClassAnnotations.php
    │   │       │   ├── CoveredClass.php
    │   │       │   ├── CoveredFunction.php
    │   │       │   ├── Crash.php
    │   │       │   ├── NamespaceCoverageClassExtendedTest.php
    │   │       │   ├── NamespaceCoverageClassTest.php
    │   │       │   ├── NamespaceCoverageCoversClassPublicTest.php
    │   │       │   ├── NamespaceCoverageCoversClassTest.php
    │   │       │   ├── NamespaceCoverageMethodTest.php
    │   │       │   ├── NamespaceCoverageNotPrivateTest.php
    │   │       │   ├── NamespaceCoverageNotProtectedTest.php
    │   │       │   ├── NamespaceCoverageNotPublicTest.php
    │   │       │   ├── NamespaceCoveragePrivateTest.php
    │   │       │   ├── NamespaceCoverageProtectedTest.php
    │   │       │   ├── NamespaceCoveragePublicTest.php
    │   │       │   ├── NamespaceCoveredClass.php
    │   │       │   ├── NotExistingCoveredElementTest.php
    │   │       │   ├── Report
    │   │       │   │   ├── HTML
    │   │       │   │   │   ├── CoverageForBankAccount
    │   │       │   │   │   │   ├── BankAccount.php.html
    │   │       │   │   │   │   ├── dashboard.html
    │   │       │   │   │   │   └── index.html
    │   │       │   │   │   ├── CoverageForClassWithAnonymousFunction
    │   │       │   │   │   │   ├── dashboard.html
    │   │       │   │   │   │   ├── index.html
    │   │       │   │   │   │   └── source_with_class_and_anonymous_function.php.html
    │   │       │   │   │   └── CoverageForFileWithIgnoredLines
    │   │       │   │   │       ├── dashboard.html
    │   │       │   │   │       ├── index.html
    │   │       │   │   │       └── source_with_ignore.php.html
    │   │       │   │   └── XML
    │   │       │   │       ├── CoverageForBankAccount
    │   │       │   │       │   ├── BankAccount.php.xml
    │   │       │   │       │   └── index.xml
    │   │       │   │       ├── CoverageForClassWithAnonymousFunction
    │   │       │   │       │   ├── index.xml
    │   │       │   │       │   └── source_with_class_and_anonymous_function.php.xml
    │   │       │   │       └── CoverageForFileWithIgnoredLines
    │   │       │   │           ├── index.xml
    │   │       │   │           └── source_with_ignore.php.xml
    │   │       │   ├── class-with-anonymous-function-clover.xml
    │   │       │   ├── class-with-anonymous-function-crap4j.xml
    │   │       │   ├── class-with-anonymous-function-text.txt
    │   │       │   ├── ignored-lines-clover.xml
    │   │       │   ├── ignored-lines-crap4j.xml
    │   │       │   ├── ignored-lines-text.txt
    │   │       │   ├── source_with_class_and_anonymous_function.php
    │   │       │   ├── source_with_ignore.php
    │   │       │   ├── source_with_namespace.php
    │   │       │   ├── source_with_oneline_annotations.php
    │   │       │   ├── source_without_ignore.php
    │   │       │   └── source_without_namespace.php
    │   │       ├── bootstrap.php
    │   │       └── tests
    │   │           ├── BuilderTest.php
    │   │           ├── CloverTest.php
    │   │           ├── CodeCoverageTest.php
    │   │           ├── Crap4jTest.php
    │   │           ├── FilterTest.php
    │   │           ├── HTMLTest.php
    │   │           ├── TextTest.php
    │   │           ├── UtilTest.php
    │   │           └── XmlTest.php
    │   ├── php-file-iterator
    │   │   ├── ChangeLog.md
    │   │   ├── LICENSE
    │   │   ├── README.md
    │   │   ├── composer.json
    │   │   ├── phpunit.xml
    │   │   ├── src
    │   │   │   ├── Facade.php
    │   │   │   ├── Factory.php
    │   │   │   └── Iterator.php
    │   │   └── tests
    │   │       └── FactoryTest.php
    │   ├── php-text-template
    │   │   ├── LICENSE
    │   │   ├── README.md
    │   │   ├── composer.json
    │   │   └── src
    │   │       └── Template.php
    │   ├── php-timer
    │   │   ├── ChangeLog.md
    │   │   ├── LICENSE
    │   │   ├── README.md
    │   │   ├── build.xml
    │   │   ├── composer.json
    │   │   ├── phpunit.xml
    │   │   ├── src
    │   │   │   ├── Exception.php
    │   │   │   ├── RuntimeException.php
    │   │   │   └── Timer.php
    │   │   └── tests
    │   │       └── TimerTest.php
    │   ├── php-token-stream
    │   │   ├── ChangeLog.md
    │   │   ├── LICENSE
    │   │   ├── README.md
    │   │   ├── build.xml
    │   │   ├── composer.json
    │   │   ├── phpunit.xml
    │   │   ├── src
    │   │   │   ├── Token
    │   │   │   │   ├── Stream
    │   │   │   │   │   └── CachingFactory.php
    │   │   │   │   └── Stream.php
    │   │   │   └── Token.php
    │   │   └── tests
    │   │       ├── Token
    │   │       │   ├── ClassTest.php
    │   │       │   ├── ClosureTest.php
    │   │       │   ├── FunctionTest.php
    │   │       │   ├── IncludeTest.php
    │   │       │   ├── InterfaceTest.php
    │   │       │   └── NamespaceTest.php
    │   │       ├── _fixture
    │   │       │   ├── classExtendsNamespacedClass.php
    │   │       │   ├── classInNamespace.php
    │   │       │   ├── classInScopedNamespace.php
    │   │       │   ├── classUsesNamespacedFunction.php
    │   │       │   ├── class_with_method_named_empty.php
    │   │       │   ├── class_with_method_that_declares_anonymous_class.php
    │   │       │   ├── class_with_method_that_declares_anonymous_class2.php
    │   │       │   ├── class_with_multiple_anonymous_classes_and_functions.php
    │   │       │   ├── closure.php
    │   │       │   ├── issue19.php
    │   │       │   ├── issue30.php
    │   │       │   ├── multipleNamespacesWithOneClassUsingBraces.php
    │   │       │   ├── multipleNamespacesWithOneClassUsingNonBraceSyntax.php
    │   │       │   ├── php-code-coverage-issue-424.php
    │   │       │   ├── source.php
    │   │       │   ├── source2.php
    │   │       │   ├── source3.php
    │   │       │   ├── source4.php
    │   │       │   └── source5.php
    │   │       └── bootstrap.php
    │   └── phpunit
    │       ├── ChangeLog-7.5.md
    │       ├── LICENSE
    │       ├── README.md
    │       ├── appveyor.yml
    │       ├── build.xml
    │       ├── composer.json
    │       ├── phive.xml
    │       ├── phpunit
    │       ├── phpunit.xml
    │       ├── phpunit.xsd
    │       ├── src
    │       │   ├── Exception.php
    │       │   ├── Framework
    │       │   │   ├── Assert
    │       │   │   │   └── Functions.php
    │       │   │   ├── Assert.php
    │       │   │   ├── AssertionFailedError.php
    │       │   │   ├── CodeCoverageException.php
    │       │   │   ├── Constraint
    │       │   │   │   ├── ArrayHasKey.php
    │       │   │   │   ├── ArraySubset.php
    │       │   │   │   ├── Attribute.php
    │       │   │   │   ├── Callback.php
    │       │   │   │   ├── ClassHasAttribute.php
    │       │   │   │   ├── ClassHasStaticAttribute.php
    │       │   │   │   ├── Composite.php
    │       │   │   │   ├── Constraint.php
    │       │   │   │   ├── Count.php
    │       │   │   │   ├── DirectoryExists.php
    │       │   │   │   ├── Exception.php
    │       │   │   │   ├── ExceptionCode.php
    │       │   │   │   ├── ExceptionMessage.php
    │       │   │   │   ├── ExceptionMessageRegularExpression.php
    │       │   │   │   ├── FileExists.php
    │       │   │   │   ├── GreaterThan.php
    │       │   │   │   ├── IsAnything.php
    │       │   │   │   ├── IsEmpty.php
    │       │   │   │   ├── IsEqual.php
    │       │   │   │   ├── IsFalse.php
    │       │   │   │   ├── IsFinite.php
    │       │   │   │   ├── IsIdentical.php
    │       │   │   │   ├── IsInfinite.php
    │       │   │   │   ├── IsInstanceOf.php
    │       │   │   │   ├── IsJson.php
    │       │   │   │   ├── IsNan.php
    │       │   │   │   ├── IsNull.php
    │       │   │   │   ├── IsReadable.php
    │       │   │   │   ├── IsTrue.php
    │       │   │   │   ├── IsType.php
    │       │   │   │   ├── IsWritable.php
    │       │   │   │   ├── JsonMatches.php
    │       │   │   │   ├── JsonMatchesErrorMessageProvider.php
    │       │   │   │   ├── LessThan.php
    │       │   │   │   ├── LogicalAnd.php
    │       │   │   │   ├── LogicalNot.php
    │       │   │   │   ├── LogicalOr.php
    │       │   │   │   ├── LogicalXor.php
    │       │   │   │   ├── ObjectHasAttribute.php
    │       │   │   │   ├── RegularExpression.php
    │       │   │   │   ├── SameSize.php
    │       │   │   │   ├── StringContains.php
    │       │   │   │   ├── StringEndsWith.php
    │       │   │   │   ├── StringMatchesFormatDescription.php
    │       │   │   │   ├── StringStartsWith.php
    │       │   │   │   ├── TraversableContains.php
    │       │   │   │   └── TraversableContainsOnly.php
    │       │   │   ├── CoveredCodeNotExecutedException.php
    │       │   │   ├── DataProviderTestSuite.php
    │       │   │   ├── Error
    │       │   │   │   ├── Deprecated.php
    │       │   │   │   ├── Error.php
    │       │   │   │   ├── Notice.php
    │       │   │   │   └── Warning.php
    │       │   │   ├── Exception.php
    │       │   │   ├── ExceptionWrapper.php
    │       │   │   ├── ExpectationFailedException.php
    │       │   │   ├── IncompleteTest.php
    │       │   │   ├── IncompleteTestCase.php
    │       │   │   ├── IncompleteTestError.php
    │       │   │   ├── InvalidCoversTargetException.php
    │       │   │   ├── MissingCoversAnnotationException.php
    │       │   │   ├── MockObject
    │       │   │   │   ├── Builder
    │       │   │   │   │   ├── Identity.php
    │       │   │   │   │   ├── InvocationMocker.php
    │       │   │   │   │   ├── Match.php
    │       │   │   │   │   ├── MethodNameMatch.php
    │       │   │   │   │   ├── NamespaceMatch.php
    │       │   │   │   │   ├── ParametersMatch.php
    │       │   │   │   │   └── Stub.php
    │       │   │   │   ├── Exception
    │       │   │   │   │   ├── BadMethodCallException.php
    │       │   │   │   │   ├── Exception.php
    │       │   │   │   │   └── RuntimeException.php
    │       │   │   │   ├── ForwardCompatibility
    │       │   │   │   │   └── MockObject.php
    │       │   │   │   ├── Generator
    │       │   │   │   │   ├── deprecation.tpl.dist
    │       │   │   │   │   ├── mocked_class.tpl.dist
    │       │   │   │   │   ├── mocked_class_method.tpl.dist
    │       │   │   │   │   ├── mocked_clone.tpl.dist
    │       │   │   │   │   ├── mocked_method.tpl.dist
    │       │   │   │   │   ├── mocked_method_void.tpl.dist
    │       │   │   │   │   ├── mocked_static_method.tpl.dist
    │       │   │   │   │   ├── proxied_method.tpl.dist
    │       │   │   │   │   ├── proxied_method_void.tpl.dist
    │       │   │   │   │   ├── trait_class.tpl.dist
    │       │   │   │   │   ├── unmocked_clone.tpl.dist
    │       │   │   │   │   ├── wsdl_class.tpl.dist
    │       │   │   │   │   └── wsdl_method.tpl.dist
    │       │   │   │   ├── Generator.php
    │       │   │   │   ├── Invocation
    │       │   │   │   │   ├── Invocation.php
    │       │   │   │   │   ├── ObjectInvocation.php
    │       │   │   │   │   └── StaticInvocation.php
    │       │   │   │   ├── InvocationMocker.php
    │       │   │   │   ├── Invokable.php
    │       │   │   │   ├── Matcher
    │       │   │   │   │   ├── AnyInvokedCount.php
    │       │   │   │   │   ├── AnyParameters.php
    │       │   │   │   │   ├── ConsecutiveParameters.php
    │       │   │   │   │   ├── DeferredError.php
    │       │   │   │   │   ├── Invocation.php
    │       │   │   │   │   ├── InvokedAtIndex.php
    │       │   │   │   │   ├── InvokedAtLeastCount.php
    │       │   │   │   │   ├── InvokedAtLeastOnce.php
    │       │   │   │   │   ├── InvokedAtMostCount.php
    │       │   │   │   │   ├── InvokedCount.php
    │       │   │   │   │   ├── InvokedRecorder.php
    │       │   │   │   │   ├── MethodName.php
    │       │   │   │   │   ├── Parameters.php
    │       │   │   │   │   └── StatelessInvocation.php
    │       │   │   │   ├── Matcher.php
    │       │   │   │   ├── MockBuilder.php
    │       │   │   │   ├── MockMethod.php
    │       │   │   │   ├── MockMethodSet.php
    │       │   │   │   ├── MockObject.php
    │       │   │   │   ├── Stub
    │       │   │   │   │   ├── ConsecutiveCalls.php
    │       │   │   │   │   ├── Exception.php
    │       │   │   │   │   ├── MatcherCollection.php
    │       │   │   │   │   ├── ReturnArgument.php
    │       │   │   │   │   ├── ReturnCallback.php
    │       │   │   │   │   ├── ReturnReference.php
    │       │   │   │   │   ├── ReturnSelf.php
    │       │   │   │   │   ├── ReturnStub.php
    │       │   │   │   │   └── ReturnValueMap.php
    │       │   │   │   ├── Stub.php
    │       │   │   │   └── Verifiable.php
    │       │   │   ├── OutputError.php
    │       │   │   ├── RiskyTest.php
    │       │   │   ├── RiskyTestError.php
    │       │   │   ├── SelfDescribing.php
    │       │   │   ├── SkippedTest.php
    │       │   │   ├── SkippedTestCase.php
    │       │   │   ├── SkippedTestError.php
    │       │   │   ├── SkippedTestSuiteError.php
    │       │   │   ├── SyntheticError.php
    │       │   │   ├── Test.php
    │       │   │   ├── TestCase.php
    │       │   │   ├── TestFailure.php
    │       │   │   ├── TestListener.php
    │       │   │   ├── TestListenerDefaultImplementation.php
    │       │   │   ├── TestResult.php
    │       │   │   ├── TestSuite.php
    │       │   │   ├── TestSuiteIterator.php
    │       │   │   ├── UnintentionallyCoveredCodeError.php
    │       │   │   ├── Warning.php
    │       │   │   └── WarningTestCase.php
    │       │   ├── Runner
    │       │   │   ├── BaseTestRunner.php
    │       │   │   ├── Exception.php
    │       │   │   ├── Filter
    │       │   │   │   ├── ExcludeGroupFilterIterator.php
    │       │   │   │   ├── Factory.php
    │       │   │   │   ├── GroupFilterIterator.php
    │       │   │   │   ├── IncludeGroupFilterIterator.php
    │       │   │   │   └── NameFilterIterator.php
    │       │   │   ├── Hook
    │       │   │   │   ├── AfterIncompleteTestHook.php
    │       │   │   │   ├── AfterLastTestHook.php
    │       │   │   │   ├── AfterRiskyTestHook.php
    │       │   │   │   ├── AfterSkippedTestHook.php
    │       │   │   │   ├── AfterSuccessfulTestHook.php
    │       │   │   │   ├── AfterTestErrorHook.php
    │       │   │   │   ├── AfterTestFailureHook.php
    │       │   │   │   ├── AfterTestHook.php
    │       │   │   │   ├── AfterTestWarningHook.php
    │       │   │   │   ├── BeforeFirstTestHook.php
    │       │   │   │   ├── BeforeTestHook.php
    │       │   │   │   ├── Hook.php
    │       │   │   │   ├── TestHook.php
    │       │   │   │   └── TestListenerAdapter.php
    │       │   │   ├── PhptTestCase.php
    │       │   │   ├── ResultCacheExtension.php
    │       │   │   ├── StandardTestSuiteLoader.php
    │       │   │   ├── TestSuiteLoader.php
    │       │   │   ├── TestSuiteSorter.php
    │       │   │   └── Version.php
    │       │   ├── TextUI
    │       │   │   ├── Command.php
    │       │   │   ├── ResultPrinter.php
    │       │   │   └── TestRunner.php
    │       │   └── Util
    │       │       ├── Blacklist.php
    │       │       ├── Configuration.php
    │       │       ├── ConfigurationGenerator.php
    │       │       ├── ErrorHandler.php
    │       │       ├── FileLoader.php
    │       │       ├── Filesystem.php
    │       │       ├── Filter.php
    │       │       ├── Getopt.php
    │       │       ├── GlobalState.php
    │       │       ├── InvalidArgumentHelper.php
    │       │       ├── Json.php
    │       │       ├── Log
    │       │       │   ├── JUnit.php
    │       │       │   └── TeamCity.php
    │       │       ├── NullTestResultCache.php
    │       │       ├── PHP
    │       │       │   ├── AbstractPhpProcess.php
    │       │       │   ├── DefaultPhpProcess.php
    │       │       │   ├── Template
    │       │       │   │   ├── PhptTestCase.tpl.dist
    │       │       │   │   ├── TestCaseClass.tpl.dist
    │       │       │   │   └── TestCaseMethod.tpl.dist
    │       │       │   ├── WindowsPhpProcess.php
    │       │       │   └── eval-stdin.php
    │       │       ├── Printer.php
    │       │       ├── RegularExpression.php
    │       │       ├── Test.php
    │       │       ├── TestDox
    │       │       │   ├── CliTestDoxPrinter.php
    │       │       │   ├── HtmlResultPrinter.php
    │       │       │   ├── NamePrettifier.php
    │       │       │   ├── ResultPrinter.php
    │       │       │   ├── TestResult.php
    │       │       │   ├── TextResultPrinter.php
    │       │       │   └── XmlResultPrinter.php
    │       │       ├── TestResultCache.php
    │       │       ├── TestResultCacheInterface.php
    │       │       ├── TextTestListRenderer.php
    │       │       ├── Type.php
    │       │       ├── XdebugFilterScriptGenerator.php
    │       │       ├── Xml.php
    │       │       └── XmlTestListRenderer.php
    │       └── tests
    │           ├── _files
    │           │   ├── 3194.php
    │           │   ├── 3530.wsdl
    │           │   ├── AbstractMockTestClass.php
    │           │   ├── AbstractTest.php
    │           │   ├── AbstractTrait.php
    │           │   ├── AnInterface.php
    │           │   ├── AnInterfaceWithReturnType.php
    │           │   ├── AnotherInterface.php
    │           │   ├── ArrayAccessible.php
    │           │   ├── AssertionExample.php
    │           │   ├── AssertionExampleTest.php
    │           │   ├── Author.php
    │           │   ├── BankAccount.php
    │           │   ├── BankAccountTest.php
    │           │   ├── BankAccountTest.test.php
    │           │   ├── BankAccountTest2.php
    │           │   ├── Bar.php
    │           │   ├── BeforeAndAfterTest.php
    │           │   ├── BeforeClassAndAfterClassTest.php
    │           │   ├── BeforeClassWithOnlyDataProviderTest.php
    │           │   ├── Book.php
    │           │   ├── Calculator.php
    │           │   ├── ChangeCurrentWorkingDirectoryTest.php
    │           │   ├── ClassThatImplementsSerializable.php
    │           │   ├── ClassWithAllPossibleReturnTypes.php
    │           │   ├── ClassWithNonPublicAttributes.php
    │           │   ├── ClassWithScalarTypeDeclarations.php
    │           │   ├── ClassWithSelfTypeHint.php
    │           │   ├── ClassWithStaticMethod.php
    │           │   ├── ClassWithToString.php
    │           │   ├── ClassWithVariadicArgumentMethod.php
    │           │   ├── ClonedDependencyTest.php
    │           │   ├── ConcreteTest.my.php
    │           │   ├── ConcreteTest.php
    │           │   ├── CountConstraint.php
    │           │   ├── CoverageClassExtendedTest.php
    │           │   ├── CoverageClassTest.php
    │           │   ├── CoverageCoversOverridesCoversNothingTest.php
    │           │   ├── CoverageFunctionParenthesesTest.php
    │           │   ├── CoverageFunctionParenthesesWhitespaceTest.php
    │           │   ├── CoverageFunctionTest.php
    │           │   ├── CoverageMethodOneLineAnnotationTest.php
    │           │   ├── CoverageMethodParenthesesTest.php
    │           │   ├── CoverageMethodParenthesesWhitespaceTest.php
    │           │   ├── CoverageMethodTest.php
    │           │   ├── CoverageNamespacedFunctionTest.php
    │           │   ├── CoverageNoneTest.php
    │           │   ├── CoverageNotPrivateTest.php
    │           │   ├── CoverageNotProtectedTest.php
    │           │   ├── CoverageNotPublicTest.php
    │           │   ├── CoverageNothingTest.php
    │           │   ├── CoveragePrivateTest.php
    │           │   ├── CoverageProtectedTest.php
    │           │   ├── CoveragePublicTest.php
    │           │   ├── CoverageTwoDefaultClassAnnotations.php
    │           │   ├── CoveredClass.php
    │           │   ├── CoveredFunction.php
    │           │   ├── CustomPrinter.php
    │           │   ├── DataProviderDebugTest.php
    │           │   ├── DataProviderDependencyTest.php
    │           │   ├── DataProviderFilterTest.php
    │           │   ├── DataProviderIncompleteTest.php
    │           │   ├── DataProviderIssue2833
    │           │   │   ├── FirstTest.php
    │           │   │   └── SecondTest.php
    │           │   ├── DataProviderIssue2859
    │           │   │   ├── phpunit.xml
    │           │   │   └── tests
    │           │   │       └── another
    │           │   │           └── TestWithDataProviderTest.php
    │           │   ├── DataProviderIssue2922
    │           │   │   ├── FirstTest.php
    │           │   │   └── SecondTest.php
    │           │   ├── DataProviderSkippedTest.php
    │           │   ├── DataProviderTest.php
    │           │   ├── DataProviderTestDoxTest.php
    │           │   ├── DataproviderExecutionOrderTest.php
    │           │   ├── DataproviderExecutionOrderTest_result_cache.txt
    │           │   ├── DependencyFailureTest.php
    │           │   ├── DependencySuccessTest.php
    │           │   ├── DependencyTestSuite.php
    │           │   ├── DoNoAssertionTestCase.php
    │           │   ├── DoesNotPerformAssertionsButPerformingAssertionsTest.php
    │           │   ├── DoubleTestCase.php
    │           │   ├── DummyBarTest.php
    │           │   ├── DummyException.php
    │           │   ├── DummyFooTest.php
    │           │   ├── EmptyTestCaseTest.php
    │           │   ├── ExampleTrait.php
    │           │   ├── ExceptionInAssertPostConditionsTest.php
    │           │   ├── ExceptionInAssertPreConditionsTest.php
    │           │   ├── ExceptionInSetUpTest.php
    │           │   ├── ExceptionInTearDownAfterClassTest.php
    │           │   ├── ExceptionInTearDownTest.php
    │           │   ├── ExceptionInTest.php
    │           │   ├── ExceptionInTestDetectedInTeardown.php
    │           │   ├── ExceptionNamespaceTest.php
    │           │   ├── ExceptionStackTest.php
    │           │   ├── ExceptionTest.php
    │           │   ├── ExceptionWithThrowable.php
    │           │   ├── Failure.php
    │           │   ├── FailureTest.php
    │           │   ├── FalsyConstraint.php
    │           │   ├── FatalTest.php
    │           │   ├── FinalClass.php
    │           │   ├── Foo.php
    │           │   ├── FunctionCallback.php
    │           │   ├── Go\ ogle-Sea.rch.wsdl
    │           │   ├── GoogleSearch.wsdl
    │           │   ├── IgnoreCodeCoverageClass.php
    │           │   ├── IgnoreCodeCoverageClassTest.php
    │           │   ├── IncompleteTest.php
    │           │   ├── Inheritance
    │           │   │   ├── InheritanceA.php
    │           │   │   └── InheritanceB.php
    │           │   ├── InheritedTestCase.php
    │           │   ├── IniTest.php
    │           │   ├── InterfaceWithSemiReservedMethodName.php
    │           │   ├── InterfaceWithStaticMethod.php
    │           │   ├── IsolationTest.php
    │           │   ├── JsonData
    │           │   │   ├── arrayObject.json
    │           │   │   └── simpleObject.json
    │           │   ├── MethodCallback.php
    │           │   ├── MethodCallbackByReference.php
    │           │   ├── MockRunner.php
    │           │   ├── MockTestInterface.php
    │           │   ├── Mockable.php
    │           │   ├── MultiDependencyTest.php
    │           │   ├── MultiDependencyTest_result_cache.txt
    │           │   ├── MultipleDataProviderTest.php
    │           │   ├── MyCommand.php
    │           │   ├── MyTestListener.php
    │           │   ├── NamedConstraint.php
    │           │   ├── NamespaceCoverageClassExtendedTest.php
    │           │   ├── NamespaceCoverageClassTest.php
    │           │   ├── NamespaceCoverageCoversClassPublicTest.php
    │           │   ├── NamespaceCoverageCoversClassTest.php
    │           │   ├── NamespaceCoverageMethodTest.php
    │           │   ├── NamespaceCoverageNotPrivateTest.php
    │           │   ├── NamespaceCoverageNotProtectedTest.php
    │           │   ├── NamespaceCoverageNotPublicTest.php
    │           │   ├── NamespaceCoveragePrivateTest.php
    │           │   ├── NamespaceCoverageProtectedTest.php
    │           │   ├── NamespaceCoveragePublicTest.php
    │           │   ├── NamespaceCoveredClass.php
    │           │   ├── NamespaceCoveredFunction.php
    │           │   ├── NoArgTestCaseTest.php
    │           │   ├── NoTestCaseClass.php
    │           │   ├── NoTestCases.php
    │           │   ├── NonStatic.php
    │           │   ├── NotExistingCoveredElementTest.php
    │           │   ├── NotPublicTestCase.php
    │           │   ├── NotSelfDescribingTest.php
    │           │   ├── NotVoidTestCase.php
    │           │   ├── NothingTest.php
    │           │   ├── NumericGroupAnnotationTest.php
    │           │   ├── OneTestCase.php
    │           │   ├── OutputTestCase.php
    │           │   ├── OverrideTestCase.php
    │           │   ├── ParseTestMethodAnnotationsMock.php
    │           │   ├── PartialMockTestClass.php
    │           │   ├── RequirementsClassBeforeClassHookTest.php
    │           │   ├── RequirementsClassDocBlockTest.php
    │           │   ├── RequirementsTest.php
    │           │   ├── RouterTest.php
    │           │   ├── SampleArrayAccess.php
    │           │   ├── SampleClass.php
    │           │   ├── Singleton.php
    │           │   ├── SingletonClass.php
    │           │   ├── SomeClass.php
    │           │   ├── StackTest.php
    │           │   ├── StaticMockTestClass.php
    │           │   ├── StatusTest.php
    │           │   ├── StopOnErrorTestSuite.php
    │           │   ├── StopOnWarningTestSuite.php
    │           │   ├── StopsOnWarningTest.php
    │           │   ├── StringableClass.php
    │           │   ├── Struct.php
    │           │   ├── Success.php
    │           │   ├── TemplateMethodsTest.php
    │           │   ├── TestAutoreferenced.php
    │           │   ├── TestDoxGroupTest.php
    │           │   ├── TestGeneratorMaker.php
    │           │   ├── TestIncomplete.php
    │           │   ├── TestIterator.php
    │           │   ├── TestIterator2.php
    │           │   ├── TestIteratorAggregate.php
    │           │   ├── TestIteratorAggregate2.php
    │           │   ├── TestProxyFixture.php
    │           │   ├── TestRisky.php
    │           │   ├── TestSkipped.php
    │           │   ├── TestTestError.php
    │           │   ├── TestWarning.php
    │           │   ├── TestWithTest.php
    │           │   ├── TestableCliTestDoxPrinter.php
    │           │   ├── ThrowExceptionTestCase.php
    │           │   ├── ThrowNoExceptionTestCase.php
    │           │   ├── TraversableMockTestInterface.php
    │           │   ├── TruthyConstraint.php
    │           │   ├── VariousIterableDataProviderTest.php
    │           │   ├── WasRun.php
    │           │   ├── WrapperIteratorAggregate.php
    │           │   ├── bar.xml
    │           │   ├── configuration.colors.empty.xml
    │           │   ├── configuration.colors.false.xml
    │           │   ├── configuration.colors.invalid.xml
    │           │   ├── configuration.colors.true.xml
    │           │   ├── configuration.columns.default.xml
    │           │   ├── configuration.custom-printer.xml
    │           │   ├── configuration.defaulttestsuite.xml
    │           │   ├── configuration.one-file-suite.xml
    │           │   ├── configuration.suites.xml
    │           │   ├── configuration.xml
    │           │   ├── configuration_empty.xml
    │           │   ├── configuration_execution_order_options.xml
    │           │   ├── configuration_stop_on_defect.xml
    │           │   ├── configuration_stop_on_error.xml
    │           │   ├── configuration_stop_on_incomplete.xml
    │           │   ├── configuration_stop_on_warning.xml
    │           │   ├── configuration_whitelist.xml
    │           │   ├── configuration_xinclude.xml
    │           │   ├── expectedFileFormat.txt
    │           │   ├── foo.xml
    │           │   ├── phpt-for-coverage.phpt
    │           │   ├── phpt-unsupported-section.phpt
    │           │   ├── phpt-xfail.phpt
    │           │   ├── phpunit-example-extension
    │           │   │   ├── phpunit.xml
    │           │   │   ├── tests
    │           │   │   │   └── OneTest.php
    │           │   │   └── tools
    │           │   │       └── phpunit.d
    │           │   │           └── phpunit-example-extension-3.0.3.phar
    │           │   ├── structureAttributesAreSameButValuesAreNot.xml
    │           │   ├── structureExpected.xml
    │           │   ├── structureIgnoreTextNodes.xml
    │           │   ├── structureIsSameButDataIsNot.xml
    │           │   ├── structureWrongNumberOfAttributes.xml
    │           │   └── structureWrongNumberOfNodes.xml
    │           ├── bootstrap.php
    │           ├── end-to-end
    │           │   ├── _files
    │           │   │   ├── Extension.php
    │           │   │   ├── HookTest.php
    │           │   │   ├── NullPrinter.php
    │           │   │   ├── expect_external.txt
    │           │   │   ├── hooks.xml
    │           │   │   ├── phpt-env.expected.txt
    │           │   │   └── phpt_external.php
    │           │   ├── abstract-test-class.phpt
    │           │   ├── assertion.phpt
    │           │   ├── cache-result.phpt
    │           │   ├── code-coverage-ignore.phpt
    │           │   ├── code-coverage-phpt.phpt
    │           │   ├── colors-always.phpt
    │           │   ├── concrete-test-class.phpt
    │           │   ├── custom-printer-debug.phpt
    │           │   ├── custom-printer-verbose.phpt
    │           │   ├── dataprovider-debug.phpt
    │           │   ├── dataprovider-issue-2833.phpt
    │           │   ├── dataprovider-issue-2859.phpt
    │           │   ├── dataprovider-issue-2922.phpt
    │           │   ├── dataprovider-log-xml-isolation.phpt
    │           │   ├── dataprovider-log-xml.phpt
    │           │   ├── dataprovider-testdox.phpt
    │           │   ├── debug.phpt
    │           │   ├── default-isolation.phpt
    │           │   ├── default.phpt
    │           │   ├── defaulttestsuite-using-testsuite.phpt
    │           │   ├── defaulttestsuite.phpt
    │           │   ├── defects-first-order-via-cli.phpt
    │           │   ├── dependencies-clone.phpt
    │           │   ├── dependencies-isolation.phpt
    │           │   ├── dependencies.phpt
    │           │   ├── dependencies2-isolation.phpt
    │           │   ├── dependencies2.phpt
    │           │   ├── dependencies3-isolation.phpt
    │           │   ├── dependencies3.phpt
    │           │   ├── disable-code-coverage-ignore.phpt
    │           │   ├── dump-xdebug-filter.phpt
    │           │   ├── empty-testcase.phpt
    │           │   ├── exception-stack.phpt
    │           │   ├── exclude-group-isolation.phpt
    │           │   ├── exclude-group.phpt
    │           │   ├── execution-order-options-via-config.phpt
    │           │   ├── failure-isolation.phpt
    │           │   ├── failure-reverse-list.phpt
    │           │   ├── failure.phpt
    │           │   ├── fatal-isolation.phpt
    │           │   ├── filter-class-isolation.phpt
    │           │   ├── filter-class.phpt
    │           │   ├── filter-dataprovider-by-classname-and-range-isolation.phpt
    │           │   ├── filter-dataprovider-by-classname-and-range.phpt
    │           │   ├── filter-dataprovider-by-number-isolation.phpt
    │           │   ├── filter-dataprovider-by-number.phpt
    │           │   ├── filter-dataprovider-by-only-range-isolation.phpt
    │           │   ├── filter-dataprovider-by-only-range.phpt
    │           │   ├── filter-dataprovider-by-only-regexp-isolation.phpt
    │           │   ├── filter-dataprovider-by-only-regexp.phpt
    │           │   ├── filter-dataprovider-by-only-string-isolation.phpt
    │           │   ├── filter-dataprovider-by-only-string.phpt
    │           │   ├── filter-dataprovider-by-range-isolation.phpt
    │           │   ├── filter-dataprovider-by-range.phpt
    │           │   ├── filter-dataprovider-by-regexp-isolation.phpt
    │           │   ├── filter-dataprovider-by-regexp.phpt
    │           │   ├── filter-dataprovider-by-string-isolation.phpt
    │           │   ├── filter-dataprovider-by-string.phpt
    │           │   ├── filter-method-case-insensitive.phpt
    │           │   ├── filter-method-case-sensitive-no-result.phpt
    │           │   ├── filter-method-isolation.phpt
    │           │   ├── filter-method.phpt
    │           │   ├── filter-no-results.phpt
    │           │   ├── forward-compatibility.phpt
    │           │   ├── group-isolation.phpt
    │           │   ├── group.phpt
    │           │   ├── help.phpt
    │           │   ├── help2.phpt
    │           │   ├── hooks.phpt
    │           │   ├── ini-isolation.phpt
    │           │   ├── list-groups.phpt
    │           │   ├── list-suites.phpt
    │           │   ├── list-tests-dataprovider.phpt
    │           │   ├── list-tests-xml-dataprovider.phpt
    │           │   ├── log-junit-phpt.phpt
    │           │   ├── log-junit.phpt
    │           │   ├── log-teamcity-phpt.phpt
    │           │   ├── log-teamcity.phpt
    │           │   ├── mock-objects
    │           │   │   ├── generator
    │           │   │   │   ├── 232.phpt
    │           │   │   │   ├── 3154_namespaced_constant_resolving.phpt
    │           │   │   │   ├── 3530.phpt
    │           │   │   │   ├── 397.phpt
    │           │   │   │   ├── abstract_class.phpt
    │           │   │   │   ├── class.phpt
    │           │   │   │   ├── class_call_parent_clone.phpt
    │           │   │   │   ├── class_call_parent_constructor.phpt
    │           │   │   │   ├── class_dont_call_parent_clone.phpt
    │           │   │   │   ├── class_dont_call_parent_constructor.phpt
    │           │   │   │   ├── class_implementing_interface_call_parent_constructor.phpt
    │           │   │   │   ├── class_implementing_interface_dont_call_parent_constructor.phpt
    │           │   │   │   ├── class_nonexistent_method.phpt
    │           │   │   │   ├── class_partial.phpt
    │           │   │   │   ├── class_with_deprecated_method.phpt
    │           │   │   │   ├── class_with_final_method.phpt
    │           │   │   │   ├── class_with_method_named_method.phpt
    │           │   │   │   ├── class_with_method_with_nullable_typehinted_variadic_arguments.phpt
    │           │   │   │   ├── class_with_method_with_typehinted_variadic_arguments.phpt
    │           │   │   │   ├── class_with_method_with_variadic_arguments.phpt
    │           │   │   │   ├── constant_as_parameter_default_value.phpt
    │           │   │   │   ├── interface.phpt
    │           │   │   │   ├── invocation_object_clone_object.phpt
    │           │   │   │   ├── namespaced_class.phpt
    │           │   │   │   ├── namespaced_class_call_parent_clone.phpt
    │           │   │   │   ├── namespaced_class_call_parent_constructor.phpt
    │           │   │   │   ├── namespaced_class_dont_call_parent_clone.phpt
    │           │   │   │   ├── namespaced_class_dont_call_parent_constructor.phpt
    │           │   │   │   ├── namespaced_class_implementing_interface_call_parent_constructor.phpt
    │           │   │   │   ├── namespaced_class_implementing_interface_dont_call_parent_constructor.phpt
    │           │   │   │   ├── namespaced_class_partial.phpt
    │           │   │   │   ├── namespaced_interface.phpt
    │           │   │   │   ├── nonexistent_class.phpt
    │           │   │   │   ├── nonexistent_class_with_namespace.phpt
    │           │   │   │   ├── nonexistent_class_with_namespace_starting_with_separator.phpt
    │           │   │   │   ├── nullable_types.phpt
    │           │   │   │   ├── proxy.phpt
    │           │   │   │   ├── return_type_declarations_closure.phpt
    │           │   │   │   ├── return_type_declarations_final.phpt
    │           │   │   │   ├── return_type_declarations_generator.phpt
    │           │   │   │   ├── return_type_declarations_nullable.phpt
    │           │   │   │   ├── return_type_declarations_object_method.phpt
    │           │   │   │   ├── return_type_declarations_parent.phpt
    │           │   │   │   ├── return_type_declarations_self.phpt
    │           │   │   │   ├── return_type_declarations_static_method.phpt
    │           │   │   │   ├── return_type_declarations_void.phpt
    │           │   │   │   ├── scalar_type_declarations.phpt
    │           │   │   │   ├── wsdl_class.phpt
    │           │   │   │   ├── wsdl_class_namespace.phpt
    │           │   │   │   └── wsdl_class_partial.phpt
    │           │   │   └── mock-method
    │           │   │       ├── call_original.phpt
    │           │   │       ├── call_original_with_argument.phpt
    │           │   │       ├── call_original_with_argument_variadic.phpt
    │           │   │       ├── call_original_with_return_type_void.phpt
    │           │   │       ├── clone_method_arguments.phpt
    │           │   │       ├── deprecated_with_description.phpt
    │           │   │       ├── deprecated_without_description.phpt
    │           │   │       ├── private_method.phpt
    │           │   │       ├── protected_method.phpt
    │           │   │       ├── return_by_reference.phpt
    │           │   │       ├── return_by_reference_with_return_type.phpt
    │           │   │       ├── return_type.phpt
    │           │   │       ├── return_type_parent.phpt
    │           │   │       ├── return_type_self.phpt
    │           │   │       ├── static_method.phpt
    │           │   │       ├── static_method_with_return_type.phpt
    │           │   │       ├── with_argument.phpt
    │           │   │       ├── with_argument_default.phpt
    │           │   │       ├── with_argument_default_constant.phpt
    │           │   │       ├── with_argument_default_null.phpt
    │           │   │       ├── with_argument_nullable.phpt
    │           │   │       ├── with_argument_reference.phpt
    │           │   │       ├── with_argument_typed_array.phpt
    │           │   │       ├── with_argument_typed_callable.phpt
    │           │   │       ├── with_argument_typed_class.phpt
    │           │   │       ├── with_argument_typed_scalar.phpt
    │           │   │       ├── with_argument_typed_self.phpt
    │           │   │       ├── with_argument_typed_unkown_class.phpt
    │           │   │       ├── with_argument_typed_variadic.phpt
    │           │   │       ├── with_argument_variadic.phpt
    │           │   │       └── with_arguments.phpt
    │           │   ├── mycommand.phpt
    │           │   ├── options-after-arguments.phpt
    │           │   ├── order-by-default-invalid-via-cli.phpt
    │           │   ├── output-isolation.phpt
    │           │   ├── phar-extension-suppressed.phpt
    │           │   ├── phar-extension.phpt
    │           │   ├── phpt-args.phpt
    │           │   ├── phpt-env.phpt
    │           │   ├── phpt-external.phpt
    │           │   ├── phpt-parsing.phpt
    │           │   ├── phpt-stderr.phpt
    │           │   ├── phpt-stdin.phpt
    │           │   ├── phpt-xfail.phpt
    │           │   ├── regression
    │           │   │   ├── GitHub
    │           │   │   │   ├── 1149
    │           │   │   │   │   └── Issue1149Test.php
    │           │   │   │   ├── 1149.phpt
    │           │   │   │   ├── 1216
    │           │   │   │   │   ├── Issue1216Test.php
    │           │   │   │   │   ├── bootstrap1216.php
    │           │   │   │   │   └── phpunit1216.xml
    │           │   │   │   ├── 1216.phpt
    │           │   │   │   ├── 1265
    │           │   │   │   │   ├── Issue1265Test.php
    │           │   │   │   │   └── phpunit1265.xml
    │           │   │   │   ├── 1265.phpt
    │           │   │   │   ├── 1330
    │           │   │   │   │   ├── Issue1330Test.php
    │           │   │   │   │   └── phpunit1330.xml
    │           │   │   │   ├── 1330.phpt
    │           │   │   │   ├── 1335
    │           │   │   │   │   ├── Issue1335Test.php
    │           │   │   │   │   └── bootstrap1335.php
    │           │   │   │   ├── 1335.phpt
    │           │   │   │   ├── 1337
    │           │   │   │   │   └── Issue1337Test.php
    │           │   │   │   ├── 1337.phpt
    │           │   │   │   ├── 1348
    │           │   │   │   │   └── Issue1348Test.php
    │           │   │   │   ├── 1348.phpt
    │           │   │   │   ├── 1351
    │           │   │   │   │   ├── ChildProcessClass1351.php
    │           │   │   │   │   └── Issue1351Test.php
    │           │   │   │   ├── 1351.phpt
    │           │   │   │   ├── 1374
    │           │   │   │   │   └── Issue1374Test.php
    │           │   │   │   ├── 1374.phpt
    │           │   │   │   ├── 1437
    │           │   │   │   │   └── Issue1437Test.php
    │           │   │   │   ├── 1437.phpt
    │           │   │   │   ├── 1468
    │           │   │   │   │   └── Issue1468Test.php
    │           │   │   │   ├── 1468.phpt
    │           │   │   │   ├── 1471
    │           │   │   │   │   └── Issue1471Test.php
    │           │   │   │   ├── 1471.phpt
    │           │   │   │   ├── 1472
    │           │   │   │   │   └── Issue1472Test.php
    │           │   │   │   ├── 1472.phpt
    │           │   │   │   ├── 1570
    │           │   │   │   │   └── Issue1570Test.php
    │           │   │   │   ├── 1570.phpt
    │           │   │   │   ├── 2085
    │           │   │   │   │   ├── Issue2085Test.php
    │           │   │   │   │   └── configuration_enforce_time_limit_options.xml
    │           │   │   │   ├── 2085-enforce-time-limit-options-via-config-without-invoker.phpt
    │           │   │   │   ├── 2085-without-invoker.phpt
    │           │   │   │   ├── 2085.phpt
    │           │   │   │   ├── 2137
    │           │   │   │   │   └── Issue2137Test.php
    │           │   │   │   ├── 2137-filter.phpt
    │           │   │   │   ├── 2137-no_filter.phpt
    │           │   │   │   ├── 2145
    │           │   │   │   │   └── Issue2145Test.php
    │           │   │   │   ├── 2145.phpt
    │           │   │   │   ├── 2158
    │           │   │   │   │   ├── Issue2158Test.php
    │           │   │   │   │   └── constant.inc
    │           │   │   │   ├── 2158.phpt
    │           │   │   │   ├── 2366
    │           │   │   │   │   └── Issue2366Test.php
    │           │   │   │   ├── 2366.phpt
    │           │   │   │   ├── 2380
    │           │   │   │   │   └── Issue2380Test.php
    │           │   │   │   ├── 2380.phpt
    │           │   │   │   ├── 2382
    │           │   │   │   │   └── Issue2382Test.php
    │           │   │   │   ├── 2382.phpt
    │           │   │   │   ├── 2435
    │           │   │   │   │   └── Issue2435Test.php
    │           │   │   │   ├── 2435.phpt
    │           │   │   │   ├── 244
    │           │   │   │   │   └── Issue244Test.php
    │           │   │   │   ├── 244.phpt
    │           │   │   │   ├── 2448
    │           │   │   │   │   └── Test.php
    │           │   │   │   ├── 2448-existing-test.phpt
    │           │   │   │   ├── 2448-not-existing-test.phpt
    │           │   │   │   ├── 2591
    │           │   │   │   │   ├── SeparateClassPreserveTest.php
    │           │   │   │   │   ├── SeparateFunctionNoPreserveTest.php
    │           │   │   │   │   ├── SeparateFunctionPreserveTest.php
    │           │   │   │   │   ├── bootstrapNoBootstrap.php
    │           │   │   │   │   ├── bootstrapWithBootstrap.php
    │           │   │   │   │   └── bootstrapWithBootstrapNoGlobal.php
    │           │   │   │   ├── 2591-separate-class-preserve-no-bootstrap.phpt
    │           │   │   │   ├── 2591-separate-class-preserve.phpt
    │           │   │   │   ├── 2591-separate-function-no-preserve-no-bootstrap-php73.phpt
    │           │   │   │   ├── 2591-separate-function-no-preserve-no-bootstrap-xdebug.phpt
    │           │   │   │   ├── 2591-separate-function-no-preserve-no-bootstrap.phpt
    │           │   │   │   ├── 2591-separate-function-no-preserve.phpt
    │           │   │   │   ├── 2591-separate-function-preserve.phpt
    │           │   │   │   ├── 2724
    │           │   │   │   │   └── SeparateClassRunMethodInNewProcessTest.php
    │           │   │   │   ├── 2724-diff-pid-from-master-process.phpt
    │           │   │   │   ├── 2725
    │           │   │   │   │   └── BeforeAfterClassPidTest.php
    │           │   │   │   ├── 2725-separate-class-before-after-pid.phpt
    │           │   │   │   ├── 2731
    │           │   │   │   │   └── Issue2731Test.php
    │           │   │   │   ├── 2731.phpt
    │           │   │   │   ├── 2811
    │           │   │   │   │   └── Issue2811Test.php
    │           │   │   │   ├── 2811.phpt
    │           │   │   │   ├── 2830
    │           │   │   │   │   └── Issue2830Test.php
    │           │   │   │   ├── 2830.phpt
    │           │   │   │   ├── 2972
    │           │   │   │   │   ├── issue-2972-test.phpt
    │           │   │   │   │   └── unconventiallyNamedIssue2972Test.php
    │           │   │   │   ├── 2972.phpt
    │           │   │   │   ├── 3093
    │           │   │   │   │   ├── Issue3093Test.php
    │           │   │   │   │   └── issue-3093-test.phpt
    │           │   │   │   ├── 3107
    │           │   │   │   │   ├── Issue3107Test.php
    │           │   │   │   │   └── issue-3107-test.phpt
    │           │   │   │   ├── 3156
    │           │   │   │   │   └── Issue3156Test.php
    │           │   │   │   ├── 322
    │           │   │   │   │   ├── Issue322Test.php
    │           │   │   │   │   └── phpunit322.xml
    │           │   │   │   ├── 322.phpt
    │           │   │   │   ├── 3364
    │           │   │   │   │   ├── issue-3364-test.phpt
    │           │   │   │   │   └── tests
    │           │   │   │   │       ├── Issue3364SetupBeforeClassTest.php
    │           │   │   │   │       └── Issue3364SetupTest.php
    │           │   │   │   ├── 3379
    │           │   │   │   │   ├── Issue3379Test.php
    │           │   │   │   │   ├── Issue3379TestListener.php
    │           │   │   │   │   └── phpunit.xml
    │           │   │   │   ├── 3379.phpt
    │           │   │   │   ├── 3380
    │           │   │   │   │   └── issue-3380-test.phpt
    │           │   │   │   ├── 3396
    │           │   │   │   │   └── issue-3396-test.phpt
    │           │   │   │   ├── 433
    │           │   │   │   │   └── Issue433Test.php
    │           │   │   │   ├── 433.phpt
    │           │   │   │   ├── 445
    │           │   │   │   │   └── Issue445Test.php
    │           │   │   │   ├── 445.phpt
    │           │   │   │   ├── 498
    │           │   │   │   │   └── Issue498Test.php
    │           │   │   │   ├── 498.phpt
    │           │   │   │   ├── 503
    │           │   │   │   │   └── Issue503Test.php
    │           │   │   │   ├── 503.phpt
    │           │   │   │   ├── 581
    │           │   │   │   │   └── Issue581Test.php
    │           │   │   │   ├── 581.phpt
    │           │   │   │   ├── 74
    │           │   │   │   │   ├── Issue74Test.php
    │           │   │   │   │   └── NewException.php
    │           │   │   │   ├── 74.phpt
    │           │   │   │   ├── 765
    │           │   │   │   │   └── Issue765Test.php
    │           │   │   │   ├── 765.phpt
    │           │   │   │   ├── 797
    │           │   │   │   │   ├── Issue797Test.php
    │           │   │   │   │   └── bootstrap797.php
    │           │   │   │   ├── 797.phpt
    │           │   │   │   ├── 863.phpt
    │           │   │   │   ├── 873
    │           │   │   │   │   └── Issue873Test.php
    │           │   │   │   └── 873.phpt
    │           │   │   └── Trac
    │           │   │       ├── 1021
    │           │   │       │   └── Issue1021Test.php
    │           │   │       ├── 1021.phpt
    │           │   │       ├── 523
    │           │   │       │   └── Issue523Test.php
    │           │   │       ├── 523.phpt
    │           │   │       ├── 578
    │           │   │       │   └── Issue578Test.php
    │           │   │       ├── 578.phpt
    │           │   │       ├── 684
    │           │   │       │   └── Issue684Test.php
    │           │   │       ├── 684.phpt
    │           │   │       ├── 783
    │           │   │       │   ├── ChildSuite.php
    │           │   │       │   ├── OneTest.php
    │           │   │       │   ├── ParentSuite.php
    │           │   │       │   └── TwoTest.php
    │           │   │       └── 783.phpt
    │           │   ├── repeat.phpt
    │           │   ├── report-tests-performing-assertions-when-annotated-with-does-not-perform-assertions.phpt
    │           │   ├── report-useless-tests-incomplete.phpt
    │           │   ├── report-useless-tests-isolation.phpt
    │           │   ├── report-useless-tests.phpt
    │           │   ├── stop-on-defect-via-cli.phpt
    │           │   ├── stop-on-defect-via-config.phpt
    │           │   ├── stop-on-error-via-cli.phpt
    │           │   ├── stop-on-error-via-config.phpt
    │           │   ├── stop-on-incomplete-via-cli.phpt
    │           │   ├── stop-on-incomplete-via-config.phpt
    │           │   ├── stop-on-warning-via-cli.phpt
    │           │   ├── stop-on-warning-via-config.phpt
    │           │   ├── teamcity-inner-exceptions.phpt
    │           │   ├── teamcity.phpt
    │           │   ├── test-order-randomized-seed-with-dependency-resolution.phpt
    │           │   ├── test-order-randomized-with-dependency-resolution.phpt
    │           │   ├── test-order-reversed-with-dependency-resolution.phpt
    │           │   ├── test-order-reversed-without-dependency-resolution.phpt
    │           │   ├── test-suffix-multiple.phpt
    │           │   ├── test-suffix-single.phpt
    │           │   ├── testdox-dataprovider-placeholder.phpt
    │           │   ├── testdox-exclude-group.phpt
    │           │   ├── testdox-group.phpt
    │           │   ├── testdox-html.phpt
    │           │   ├── testdox-text.phpt
    │           │   ├── testdox-verbose.phpt
    │           │   ├── testdox-xml.phpt
    │           │   └── testdox.phpt
    │           ├── fail
    │           │   └── fail.phpt
    │           └── unit
    │               ├── Framework
    │               │   ├── AssertTest.php
    │               │   ├── Constraint
    │               │   │   ├── ArrayHasKeyTest.php
    │               │   │   ├── ArraySubsetTest.php
    │               │   │   ├── AttributeTest.php
    │               │   │   ├── CallbackTest.php
    │               │   │   ├── ClassHasAttributeTest.php
    │               │   │   ├── ClassHasStaticAttributeTest.php
    │               │   │   ├── ConstraintTestCase.php
    │               │   │   ├── CountTest.php
    │               │   │   ├── DirectoryExistsTest.php
    │               │   │   ├── ExceptionMessageRegExpTest.php
    │               │   │   ├── ExceptionMessageTest.php
    │               │   │   ├── FileExistsTest.php
    │               │   │   ├── GreaterThanTest.php
    │               │   │   ├── IsEmptyTest.php
    │               │   │   ├── IsEqualTest.php
    │               │   │   ├── IsIdenticalTest.php
    │               │   │   ├── IsInstanceOfTest.php
    │               │   │   ├── IsJsonTest.php
    │               │   │   ├── IsNullTest.php
    │               │   │   ├── IsReadableTest.php
    │               │   │   ├── IsTypeTest.php
    │               │   │   ├── IsWritableTest.php
    │               │   │   ├── JsonMatchesErrorMessageProviderTest.php
    │               │   │   ├── JsonMatchesTest.php
    │               │   │   ├── LessThanTest.php
    │               │   │   ├── LogicalAndTest.php
    │               │   │   ├── LogicalOrTest.php
    │               │   │   ├── LogicalXorTest.php
    │               │   │   ├── ObjectHasAttributeTest.php
    │               │   │   ├── RegularExpressionTest.php
    │               │   │   ├── SameSizeTest.php
    │               │   │   ├── StringContainsTest.php
    │               │   │   ├── StringEndsWithTest.php
    │               │   │   ├── StringMatchesFormatDescriptionTest.php
    │               │   │   ├── StringStartsWithTest.php
    │               │   │   └── TraversableContainsTest.php
    │               │   ├── ConstraintTest.php
    │               │   ├── ExceptionWrapperTest.php
    │               │   ├── MockObject
    │               │   │   ├── Builder
    │               │   │   │   └── InvocationMockerTest.php
    │               │   │   ├── GeneratorTest.php
    │               │   │   ├── Invocation
    │               │   │   │   ├── ObjectInvocationTest.php
    │               │   │   │   └── StaticInvocationTest.php
    │               │   │   ├── Matcher
    │               │   │   │   └── ConsecutiveParametersTest.php
    │               │   │   ├── MockBuilderTest.php
    │               │   │   ├── MockMethodTest.php
    │               │   │   ├── MockObjectTest.php
    │               │   │   └── ProxyObjectTest.php
    │               │   ├── TestCaseTest.php
    │               │   ├── TestFailureTest.php
    │               │   ├── TestImplementorTest.php
    │               │   ├── TestListenerTest.php
    │               │   ├── TestResultTest.php
    │               │   └── TestSuiteTest.php
    │               ├── Runner
    │               │   ├── Filter
    │               │   │   └── NameFilterIteratorTest.php
    │               │   ├── PhptTestCaseTest.php
    │               │   ├── ResultCacheExtensionTest.php
    │               │   └── TestSuiteSorterTest.php
    │               ├── TextUI
    │               │   └── TestRunnerTest.php
    │               └── Util
    │                   ├── ConfigurationGeneratorTest.php
    │                   ├── ConfigurationTest.php
    │                   ├── GetoptTest.php
    │                   ├── GlobalStateTest.php
    │                   ├── JsonTest.php
    │                   ├── NullTestResultCacheTest.php
    │                   ├── PHP
    │                   │   └── AbstractPhpProcessTest.php
    │                   ├── RegularExpressionTest.php
    │                   ├── TestDox
    │                   │   ├── CliTestDoxPrinterTest.php
    │                   │   └── NamePrettifierTest.php
    │                   ├── TestResultCacheTest.php
    │                   ├── TestTest.php
    │                   ├── XDebugFilterScriptGeneratorTest.php
    │                   └── XmlTest.php
    ├── plotly
    │   └── plotly.js
    │       ├── BUILDING.md
    │       ├── CHANGELOG.md
    │       ├── CONTRIBUTING.md
    │       ├── LICENSE
    │       ├── README.md
    │       ├── SECURITY.md
    │       ├── appveyor.yml
    │       ├── bower.json
    │       ├── build
    │       │   ├── README.md
    │       │   ├── plotcss.js
    │       │   └── ploticon.js
    │       ├── composer.json
    │       ├── devtools
    │       │   ├── image_viewer
    │       │   │   ├── index.html
    │       │   │   ├── server.js
    │       │   │   └── viewer.js
    │       │   └── test_dashboard
    │       │       ├── devtools.js
    │       │       ├── index.html
    │       │       ├── perf.js
    │       │       ├── server.js
    │       │       └── style.css
    │       ├── dist
    │       │   ├── README.md
    │       │   ├── extras
    │       │   │   ├── mathjax
    │       │   │   │   ├── MathJax.js
    │       │   │   │   ├── config
    │       │   │   │   │   └── TeX-AMS-MML_SVG.js
    │       │   │   │   ├── extensions
    │       │   │   │   │   ├── FontWarnings.js
    │       │   │   │   │   ├── HTML-CSS
    │       │   │   │   │   │   └── handle-floats.js
    │       │   │   │   │   ├── HelpDialog.js
    │       │   │   │   │   ├── MatchWebFonts.js
    │       │   │   │   │   ├── MathEvents.js
    │       │   │   │   │   ├── MathML
    │       │   │   │   │   │   └── content-mathml.js
    │       │   │   │   │   ├── MathMenu.js
    │       │   │   │   │   ├── MathZoom.js
    │       │   │   │   │   ├── Safe.js
    │       │   │   │   │   ├── TeX
    │       │   │   │   │   │   ├── AMScd.js
    │       │   │   │   │   │   ├── AMSmath.js
    │       │   │   │   │   │   ├── AMSsymbols.js
    │       │   │   │   │   │   ├── HTML.js
    │       │   │   │   │   │   ├── action.js
    │       │   │   │   │   │   ├── autobold.js
    │       │   │   │   │   │   ├── autoload-all.js
    │       │   │   │   │   │   ├── bbox.js
    │       │   │   │   │   │   ├── begingroup.js
    │       │   │   │   │   │   ├── boldsymbol.js
    │       │   │   │   │   │   ├── cancel.js
    │       │   │   │   │   │   ├── color.js
    │       │   │   │   │   │   ├── enclose.js
    │       │   │   │   │   │   ├── extpfeil.js
    │       │   │   │   │   │   ├── mathchoice.js
    │       │   │   │   │   │   ├── mhchem.js
    │       │   │   │   │   │   ├── newcommand.js
    │       │   │   │   │   │   ├── noErrors.js
    │       │   │   │   │   │   ├── noUndefined.js
    │       │   │   │   │   │   ├── unicode.js
    │       │   │   │   │   │   └── verb.js
    │       │   │   │   │   ├── asciimath2jax.js
    │       │   │   │   │   ├── jsMath2jax.js
    │       │   │   │   │   ├── mml2jax.js
    │       │   │   │   │   ├── tex2jax.js
    │       │   │   │   │   └── toMathML.js
    │       │   │   │   ├── images
    │       │   │   │   │   ├── CloseX-31.png
    │       │   │   │   │   └── MenuArrow-15.png
    │       │   │   │   ├── jax
    │       │   │   │   │   ├── element
    │       │   │   │   │   │   └── mml
    │       │   │   │   │   │       ├── jax.js
    │       │   │   │   │   │       └── optable
    │       │   │   │   │   │           ├── Arrows.js
    │       │   │   │   │   │           ├── BasicLatin.js
    │       │   │   │   │   │           ├── CombDiacritMarks.js
    │       │   │   │   │   │           ├── CombDiactForSymbols.js
    │       │   │   │   │   │           ├── Dingbats.js
    │       │   │   │   │   │           ├── GeneralPunctuation.js
    │       │   │   │   │   │           ├── GeometricShapes.js
    │       │   │   │   │   │           ├── GreekAndCoptic.js
    │       │   │   │   │   │           ├── Latin1Supplement.js
    │       │   │   │   │   │           ├── LetterlikeSymbols.js
    │       │   │   │   │   │           ├── MathOperators.js
    │       │   │   │   │   │           ├── MiscMathSymbolsA.js
    │       │   │   │   │   │           ├── MiscMathSymbolsB.js
    │       │   │   │   │   │           ├── MiscSymbolsAndArrows.js
    │       │   │   │   │   │           ├── MiscTechnical.js
    │       │   │   │   │   │           ├── SpacingModLetters.js
    │       │   │   │   │   │           ├── SuppMathOperators.js
    │       │   │   │   │   │           ├── SupplementalArrowsA.js
    │       │   │   │   │   │           └── SupplementalArrowsB.js
    │       │   │   │   │   ├── input
    │       │   │   │   │   │   ├── AsciiMath
    │       │   │   │   │   │   │   ├── config.js
    │       │   │   │   │   │   │   └── jax.js
    │       │   │   │   │   │   ├── MathML
    │       │   │   │   │   │   │   ├── config.js
    │       │   │   │   │   │   │   ├── entities
    │       │   │   │   │   │   │   │   ├── a.js
    │       │   │   │   │   │   │   │   ├── b.js
    │       │   │   │   │   │   │   │   ├── c.js
    │       │   │   │   │   │   │   │   ├── d.js
    │       │   │   │   │   │   │   │   ├── e.js
    │       │   │   │   │   │   │   │   ├── f.js
    │       │   │   │   │   │   │   │   ├── fr.js
    │       │   │   │   │   │   │   │   ├── g.js
    │       │   │   │   │   │   │   │   ├── h.js
    │       │   │   │   │   │   │   │   ├── i.js
    │       │   │   │   │   │   │   │   ├── j.js
    │       │   │   │   │   │   │   │   ├── k.js
    │       │   │   │   │   │   │   │   ├── l.js
    │       │   │   │   │   │   │   │   ├── m.js
    │       │   │   │   │   │   │   │   ├── n.js
    │       │   │   │   │   │   │   │   ├── o.js
    │       │   │   │   │   │   │   │   ├── opf.js
    │       │   │   │   │   │   │   │   ├── p.js
    │       │   │   │   │   │   │   │   ├── q.js
    │       │   │   │   │   │   │   │   ├── r.js
    │       │   │   │   │   │   │   │   ├── s.js
    │       │   │   │   │   │   │   │   ├── scr.js
    │       │   │   │   │   │   │   │   ├── t.js
    │       │   │   │   │   │   │   │   ├── u.js
    │       │   │   │   │   │   │   │   ├── v.js
    │       │   │   │   │   │   │   │   ├── w.js
    │       │   │   │   │   │   │   │   ├── x.js
    │       │   │   │   │   │   │   │   ├── y.js
    │       │   │   │   │   │   │   │   └── z.js
    │       │   │   │   │   │   │   └── jax.js
    │       │   │   │   │   │   └── TeX
    │       │   │   │   │   │       ├── config.js
    │       │   │   │   │   │       └── jax.js
    │       │   │   │   │   └── output
    │       │   │   │   │       └── SVG
    │       │   │   │   │           ├── autoload
    │       │   │   │   │           │   ├── annotation-xml.js
    │       │   │   │   │           │   ├── maction.js
    │       │   │   │   │           │   ├── menclose.js
    │       │   │   │   │           │   ├── mglyph.js
    │       │   │   │   │           │   ├── mmultiscripts.js
    │       │   │   │   │           │   ├── ms.js
    │       │   │   │   │           │   ├── mtable.js
    │       │   │   │   │           │   └── multiline.js
    │       │   │   │   │           ├── config.js
    │       │   │   │   │           ├── fonts
    │       │   │   │   │           │   ├── Asana-Math
    │       │   │   │   │           │   │   ├── Alphabets
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Arrows
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── DoubleStruck
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Fraktur
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Latin
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Main
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Marks
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Misc
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Monospace
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── NonUnicode
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Normal
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Operators
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── SansSerif
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Script
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Shapes
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Size1
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Size2
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Size3
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Size4
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Size5
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Size6
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Symbols
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Variants
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── fontdata-extra.js
    │       │   │   │   │           │   │   └── fontdata.js
    │       │   │   │   │           │   ├── Gyre-Pagella
    │       │   │   │   │           │   │   ├── Alphabets
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Arrows
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── DoubleStruck
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Fraktur
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Latin
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Main
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Marks
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Misc
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Monospace
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── NonUnicode
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Normal
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Operators
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── SansSerif
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Script
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Shapes
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Size1
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Size2
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Size3
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Size4
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Size5
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Size6
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Symbols
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Variants
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── fontdata-extra.js
    │       │   │   │   │           │   │   └── fontdata.js
    │       │   │   │   │           │   ├── Gyre-Termes
    │       │   │   │   │           │   │   ├── Alphabets
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Arrows
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── DoubleStruck
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Fraktur
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Latin
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Main
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Marks
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Misc
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Monospace
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── NonUnicode
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Normal
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Operators
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── SansSerif
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Script
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Shapes
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Size1
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Size2
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Size3
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Size4
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Size5
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Size6
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Symbols
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Variants
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── fontdata-extra.js
    │       │   │   │   │           │   │   └── fontdata.js
    │       │   │   │   │           │   ├── Latin-Modern
    │       │   │   │   │           │   │   ├── Alphabets
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Arrows
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── DoubleStruck
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Fraktur
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Latin
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Main
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Marks
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Misc
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Monospace
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── NonUnicode
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Normal
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Operators
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── SansSerif
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Script
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Shapes
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Size1
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Size2
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Size3
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Size4
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Size5
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Size6
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Size7
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Symbols
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Variants
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── fontdata-extra.js
    │       │   │   │   │           │   │   └── fontdata.js
    │       │   │   │   │           │   ├── Neo-Euler
    │       │   │   │   │           │   │   ├── Alphabets
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Arrows
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Fraktur
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Main
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Marks
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── NonUnicode
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Normal
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Operators
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Script
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Shapes
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Size1
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Size2
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Size3
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Size4
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Size5
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Symbols
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Variants
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── fontdata-extra.js
    │       │   │   │   │           │   │   └── fontdata.js
    │       │   │   │   │           │   ├── STIX-Web
    │       │   │   │   │           │   │   ├── Alphabets
    │       │   │   │   │           │   │   │   ├── Bold
    │       │   │   │   │           │   │   │   │   └── Main.js
    │       │   │   │   │           │   │   │   ├── BoldItalic
    │       │   │   │   │           │   │   │   │   └── Main.js
    │       │   │   │   │           │   │   │   ├── Italic
    │       │   │   │   │           │   │   │   │   └── Main.js
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Arrows
    │       │   │   │   │           │   │   │   ├── Bold
    │       │   │   │   │           │   │   │   │   └── Main.js
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── DoubleStruck
    │       │   │   │   │           │   │   │   ├── Bold
    │       │   │   │   │           │   │   │   │   └── Main.js
    │       │   │   │   │           │   │   │   ├── BoldItalic
    │       │   │   │   │           │   │   │   │   └── Main.js
    │       │   │   │   │           │   │   │   ├── Italic
    │       │   │   │   │           │   │   │   │   └── Main.js
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Fraktur
    │       │   │   │   │           │   │   │   ├── Bold
    │       │   │   │   │           │   │   │   │   └── Main.js
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Latin
    │       │   │   │   │           │   │   │   ├── Bold
    │       │   │   │   │           │   │   │   │   └── Main.js
    │       │   │   │   │           │   │   │   ├── BoldItalic
    │       │   │   │   │           │   │   │   │   └── Main.js
    │       │   │   │   │           │   │   │   ├── Italic
    │       │   │   │   │           │   │   │   │   └── Main.js
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Main
    │       │   │   │   │           │   │   │   ├── Bold
    │       │   │   │   │           │   │   │   │   └── Main.js
    │       │   │   │   │           │   │   │   ├── BoldItalic
    │       │   │   │   │           │   │   │   │   └── Main.js
    │       │   │   │   │           │   │   │   ├── Italic
    │       │   │   │   │           │   │   │   │   └── Main.js
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Marks
    │       │   │   │   │           │   │   │   ├── Bold
    │       │   │   │   │           │   │   │   │   └── Main.js
    │       │   │   │   │           │   │   │   ├── BoldItalic
    │       │   │   │   │           │   │   │   │   └── Main.js
    │       │   │   │   │           │   │   │   ├── Italic
    │       │   │   │   │           │   │   │   │   └── Main.js
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Misc
    │       │   │   │   │           │   │   │   ├── Bold
    │       │   │   │   │           │   │   │   │   └── Main.js
    │       │   │   │   │           │   │   │   ├── BoldItalic
    │       │   │   │   │           │   │   │   │   └── Main.js
    │       │   │   │   │           │   │   │   ├── Italic
    │       │   │   │   │           │   │   │   │   └── Main.js
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Monospace
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Normal
    │       │   │   │   │           │   │   │   ├── Bold
    │       │   │   │   │           │   │   │   │   └── Main.js
    │       │   │   │   │           │   │   │   ├── BoldItalic
    │       │   │   │   │           │   │   │   │   └── Main.js
    │       │   │   │   │           │   │   │   └── Italic
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Operators
    │       │   │   │   │           │   │   │   ├── Bold
    │       │   │   │   │           │   │   │   │   └── Main.js
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── SansSerif
    │       │   │   │   │           │   │   │   ├── Bold
    │       │   │   │   │           │   │   │   │   └── Main.js
    │       │   │   │   │           │   │   │   ├── BoldItalic
    │       │   │   │   │           │   │   │   │   └── Main.js
    │       │   │   │   │           │   │   │   ├── Italic
    │       │   │   │   │           │   │   │   │   └── Main.js
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Script
    │       │   │   │   │           │   │   │   ├── BoldItalic
    │       │   │   │   │           │   │   │   │   └── Main.js
    │       │   │   │   │           │   │   │   ├── Italic
    │       │   │   │   │           │   │   │   │   └── Main.js
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Shapes
    │       │   │   │   │           │   │   │   ├── Bold
    │       │   │   │   │           │   │   │   │   └── Main.js
    │       │   │   │   │           │   │   │   ├── BoldItalic
    │       │   │   │   │           │   │   │   │   └── Main.js
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Size1
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Size2
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Size3
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Size4
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Size5
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Symbols
    │       │   │   │   │           │   │   │   ├── Bold
    │       │   │   │   │           │   │   │   │   └── Main.js
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── Variants
    │       │   │   │   │           │   │   │   ├── Bold
    │       │   │   │   │           │   │   │   │   └── Main.js
    │       │   │   │   │           │   │   │   ├── BoldItalic
    │       │   │   │   │           │   │   │   │   └── Main.js
    │       │   │   │   │           │   │   │   ├── Italic
    │       │   │   │   │           │   │   │   │   └── Main.js
    │       │   │   │   │           │   │   │   └── Regular
    │       │   │   │   │           │   │   │       └── Main.js
    │       │   │   │   │           │   │   ├── fontdata-extra.js
    │       │   │   │   │           │   │   └── fontdata.js
    │       │   │   │   │           │   └── TeX
    │       │   │   │   │           │       ├── AMS
    │       │   │   │   │           │       │   └── Regular
    │       │   │   │   │           │       │       ├── Arrows.js
    │       │   │   │   │           │       │       ├── BoxDrawing.js
    │       │   │   │   │           │       │       ├── CombDiacritMarks.js
    │       │   │   │   │           │       │       ├── Dingbats.js
    │       │   │   │   │           │       │       ├── EnclosedAlphanum.js
    │       │   │   │   │           │       │       ├── GeneralPunctuation.js
    │       │   │   │   │           │       │       ├── GeometricShapes.js
    │       │   │   │   │           │       │       ├── GreekAndCoptic.js
    │       │   │   │   │           │       │       ├── Latin1Supplement.js
    │       │   │   │   │           │       │       ├── LatinExtendedA.js
    │       │   │   │   │           │       │       ├── LetterlikeSymbols.js
    │       │   │   │   │           │       │       ├── Main.js
    │       │   │   │   │           │       │       ├── MathOperators.js
    │       │   │   │   │           │       │       ├── MiscMathSymbolsB.js
    │       │   │   │   │           │       │       ├── MiscSymbols.js
    │       │   │   │   │           │       │       ├── MiscTechnical.js
    │       │   │   │   │           │       │       ├── PUA.js
    │       │   │   │   │           │       │       ├── SpacingModLetters.js
    │       │   │   │   │           │       │       └── SuppMathOperators.js
    │       │   │   │   │           │       ├── Caligraphic
    │       │   │   │   │           │       │   ├── Bold
    │       │   │   │   │           │       │   │   └── Main.js
    │       │   │   │   │           │       │   └── Regular
    │       │   │   │   │           │       │       └── Main.js
    │       │   │   │   │           │       ├── Fraktur
    │       │   │   │   │           │       │   ├── Bold
    │       │   │   │   │           │       │   │   ├── BasicLatin.js
    │       │   │   │   │           │       │   │   ├── Main.js
    │       │   │   │   │           │       │   │   ├── Other.js
    │       │   │   │   │           │       │   │   └── PUA.js
    │       │   │   │   │           │       │   └── Regular
    │       │   │   │   │           │       │       ├── BasicLatin.js
    │       │   │   │   │           │       │       ├── Main.js
    │       │   │   │   │           │       │       ├── Other.js
    │       │   │   │   │           │       │       └── PUA.js
    │       │   │   │   │           │       ├── Main
    │       │   │   │   │           │       │   ├── Bold
    │       │   │   │   │           │       │   │   ├── Arrows.js
    │       │   │   │   │           │       │   │   ├── BasicLatin.js
    │       │   │   │   │           │       │   │   ├── CombDiacritMarks.js
    │       │   │   │   │           │       │   │   ├── CombDiactForSymbols.js
    │       │   │   │   │           │       │   │   ├── GeneralPunctuation.js
    │       │   │   │   │           │       │   │   ├── GeometricShapes.js
    │       │   │   │   │           │       │   │   ├── GreekAndCoptic.js
    │       │   │   │   │           │       │   │   ├── Latin1Supplement.js
    │       │   │   │   │           │       │   │   ├── LatinExtendedA.js
    │       │   │   │   │           │       │   │   ├── LatinExtendedB.js
    │       │   │   │   │           │       │   │   ├── LetterlikeSymbols.js
    │       │   │   │   │           │       │   │   ├── Main.js
    │       │   │   │   │           │       │   │   ├── MathOperators.js
    │       │   │   │   │           │       │   │   ├── MiscMathSymbolsA.js
    │       │   │   │   │           │       │   │   ├── MiscSymbols.js
    │       │   │   │   │           │       │   │   ├── MiscTechnical.js
    │       │   │   │   │           │       │   │   ├── SpacingModLetters.js
    │       │   │   │   │           │       │   │   ├── SuppMathOperators.js
    │       │   │   │   │           │       │   │   └── SupplementalArrowsA.js
    │       │   │   │   │           │       │   ├── Italic
    │       │   │   │   │           │       │   │   ├── BasicLatin.js
    │       │   │   │   │           │       │   │   ├── CombDiacritMarks.js
    │       │   │   │   │           │       │   │   ├── GeneralPunctuation.js
    │       │   │   │   │           │       │   │   ├── GreekAndCoptic.js
    │       │   │   │   │           │       │   │   ├── LatinExtendedA.js
    │       │   │   │   │           │       │   │   ├── LatinExtendedB.js
    │       │   │   │   │           │       │   │   ├── LetterlikeSymbols.js
    │       │   │   │   │           │       │   │   ├── Main.js
    │       │   │   │   │           │       │   │   └── MathOperators.js
    │       │   │   │   │           │       │   └── Regular
    │       │   │   │   │           │       │       ├── BasicLatin.js
    │       │   │   │   │           │       │       ├── CombDiacritMarks.js
    │       │   │   │   │           │       │       ├── GeometricShapes.js
    │       │   │   │   │           │       │       ├── GreekAndCoptic.js
    │       │   │   │   │           │       │       ├── LatinExtendedA.js
    │       │   │   │   │           │       │       ├── LatinExtendedB.js
    │       │   │   │   │           │       │       ├── LetterlikeSymbols.js
    │       │   │   │   │           │       │       ├── Main.js
    │       │   │   │   │           │       │       ├── MathOperators.js
    │       │   │   │   │           │       │       ├── MiscSymbols.js
    │       │   │   │   │           │       │       ├── SpacingModLetters.js
    │       │   │   │   │           │       │       └── SuppMathOperators.js
    │       │   │   │   │           │       ├── Math
    │       │   │   │   │           │       │   ├── BoldItalic
    │       │   │   │   │           │       │   │   └── Main.js
    │       │   │   │   │           │       │   └── Italic
    │       │   │   │   │           │       │       └── Main.js
    │       │   │   │   │           │       ├── SansSerif
    │       │   │   │   │           │       │   ├── Bold
    │       │   │   │   │           │       │   │   ├── BasicLatin.js
    │       │   │   │   │           │       │   │   ├── CombDiacritMarks.js
    │       │   │   │   │           │       │   │   ├── Main.js
    │       │   │   │   │           │       │   │   └── Other.js
    │       │   │   │   │           │       │   ├── Italic
    │       │   │   │   │           │       │   │   ├── BasicLatin.js
    │       │   │   │   │           │       │   │   ├── CombDiacritMarks.js
    │       │   │   │   │           │       │   │   ├── Main.js
    │       │   │   │   │           │       │   │   └── Other.js
    │       │   │   │   │           │       │   └── Regular
    │       │   │   │   │           │       │       ├── BasicLatin.js
    │       │   │   │   │           │       │       ├── CombDiacritMarks.js
    │       │   │   │   │           │       │       ├── Main.js
    │       │   │   │   │           │       │       └── Other.js
    │       │   │   │   │           │       ├── Script
    │       │   │   │   │           │       │   └── Regular
    │       │   │   │   │           │       │       ├── BasicLatin.js
    │       │   │   │   │           │       │       └── Main.js
    │       │   │   │   │           │       ├── Size1
    │       │   │   │   │           │       │   └── Regular
    │       │   │   │   │           │       │       └── Main.js
    │       │   │   │   │           │       ├── Size2
    │       │   │   │   │           │       │   └── Regular
    │       │   │   │   │           │       │       └── Main.js
    │       │   │   │   │           │       ├── Size3
    │       │   │   │   │           │       │   └── Regular
    │       │   │   │   │           │       │       └── Main.js
    │       │   │   │   │           │       ├── Size4
    │       │   │   │   │           │       │   └── Regular
    │       │   │   │   │           │       │       └── Main.js
    │       │   │   │   │           │       ├── Typewriter
    │       │   │   │   │           │       │   └── Regular
    │       │   │   │   │           │       │       ├── BasicLatin.js
    │       │   │   │   │           │       │       ├── CombDiacritMarks.js
    │       │   │   │   │           │       │       ├── Main.js
    │       │   │   │   │           │       │       └── Other.js
    │       │   │   │   │           │       ├── fontdata-extra.js
    │       │   │   │   │           │       └── fontdata.js
    │       │   │   │   │           └── jax.js
    │       │   │   │   └── localization
    │       │   │   │       ├── de
    │       │   │   │       │   ├── FontWarnings.js
    │       │   │   │       │   ├── HTML-CSS.js
    │       │   │   │       │   ├── HelpDialog.js
    │       │   │   │       │   ├── MathML.js
    │       │   │   │       │   ├── MathMenu.js
    │       │   │   │       │   ├── TeX.js
    │       │   │   │       │   └── de.js
    │       │   │   │       ├── en
    │       │   │   │       │   ├── FontWarnings.js
    │       │   │   │       │   ├── HTML-CSS.js
    │       │   │   │       │   ├── HelpDialog.js
    │       │   │   │       │   ├── MathML.js
    │       │   │   │       │   ├── MathMenu.js
    │       │   │   │       │   ├── TeX.js
    │       │   │   │       │   └── en.js
    │       │   │   │       └── fr
    │       │   │   │           ├── FontWarnings.js
    │       │   │   │           ├── HTML-CSS.js
    │       │   │   │           ├── HelpDialog.js
    │       │   │   │           ├── MathML.js
    │       │   │   │           ├── MathMenu.js
    │       │   │   │           ├── TeX.js
    │       │   │   │           └── fr.js
    │       │   │   ├── request_animation_frame.js
    │       │   │   └── typedarray.min.js
    │       │   ├── plot-schema.json
    │       │   ├── plotly-basic.js
    │       │   ├── plotly-basic.min.js
    │       │   ├── plotly-cartesian.js
    │       │   ├── plotly-cartesian.min.js
    │       │   ├── plotly-finance.js
    │       │   ├── plotly-finance.min.js
    │       │   ├── plotly-geo-assets.js
    │       │   ├── plotly-geo.js
    │       │   ├── plotly-geo.min.js
    │       │   ├── plotly-gl2d.js
    │       │   ├── plotly-gl2d.min.js
    │       │   ├── plotly-gl3d.js
    │       │   ├── plotly-gl3d.min.js
    │       │   ├── plotly-locale-af.js
    │       │   ├── plotly-locale-am.js
    │       │   ├── plotly-locale-ar-dz.js
    │       │   ├── plotly-locale-ar-eg.js
    │       │   ├── plotly-locale-ar.js
    │       │   ├── plotly-locale-az.js
    │       │   ├── plotly-locale-bg.js
    │       │   ├── plotly-locale-bs.js
    │       │   ├── plotly-locale-ca.js
    │       │   ├── plotly-locale-cs.js
    │       │   ├── plotly-locale-cy.js
    │       │   ├── plotly-locale-da.js
    │       │   ├── plotly-locale-de-ch.js
    │       │   ├── plotly-locale-de.js
    │       │   ├── plotly-locale-el.js
    │       │   ├── plotly-locale-eo.js
    │       │   ├── plotly-locale-es-ar.js
    │       │   ├── plotly-locale-es-pe.js
    │       │   ├── plotly-locale-es.js
    │       │   ├── plotly-locale-et.js
    │       │   ├── plotly-locale-eu.js
    │       │   ├── plotly-locale-fa.js
    │       │   ├── plotly-locale-fi.js
    │       │   ├── plotly-locale-fo.js
    │       │   ├── plotly-locale-fr-ch.js
    │       │   ├── plotly-locale-fr.js
    │       │   ├── plotly-locale-gl.js
    │       │   ├── plotly-locale-gu.js
    │       │   ├── plotly-locale-he.js
    │       │   ├── plotly-locale-hi-in.js
    │       │   ├── plotly-locale-hr.js
    │       │   ├── plotly-locale-hu.js
    │       │   ├── plotly-locale-hy.js
    │       │   ├── plotly-locale-id.js
    │       │   ├── plotly-locale-is.js
    │       │   ├── plotly-locale-it.js
    │       │   ├── plotly-locale-ja.js
    │       │   ├── plotly-locale-ka.js
    │       │   ├── plotly-locale-km.js
    │       │   ├── plotly-locale-ko.js
    │       │   ├── plotly-locale-lt.js
    │       │   ├── plotly-locale-lv.js
    │       │   ├── plotly-locale-me-me.js
    │       │   ├── plotly-locale-me.js
    │       │   ├── plotly-locale-mk.js
    │       │   ├── plotly-locale-ml.js
    │       │   ├── plotly-locale-ms.js
    │       │   ├── plotly-locale-mt.js
    │       │   ├── plotly-locale-nl-be.js
    │       │   ├── plotly-locale-nl.js
    │       │   ├── plotly-locale-no.js
    │       │   ├── plotly-locale-pa.js
    │       │   ├── plotly-locale-pl.js
    │       │   ├── plotly-locale-pt-br.js
    │       │   ├── plotly-locale-rm.js
    │       │   ├── plotly-locale-ro.js
    │       │   ├── plotly-locale-ru.js
    │       │   ├── plotly-locale-sk.js
    │       │   ├── plotly-locale-sl.js
    │       │   ├── plotly-locale-sq.js
    │       │   ├── plotly-locale-sr-sr.js
    │       │   ├── plotly-locale-sr.js
    │       │   ├── plotly-locale-sv.js
    │       │   ├── plotly-locale-sw.js
    │       │   ├── plotly-locale-ta.js
    │       │   ├── plotly-locale-th.js
    │       │   ├── plotly-locale-tr.js
    │       │   ├── plotly-locale-tt.js
    │       │   ├── plotly-locale-uk.js
    │       │   ├── plotly-locale-ur.js
    │       │   ├── plotly-locale-vi.js
    │       │   ├── plotly-locale-zh-cn.js
    │       │   ├── plotly-locale-zh-hk.js
    │       │   ├── plotly-locale-zh-tw.js
    │       │   ├── plotly-mapbox.js
    │       │   ├── plotly-mapbox.min.js
    │       │   ├── plotly-with-meta.js
    │       │   ├── plotly.js
    │       │   ├── plotly.min.js
    │       │   ├── topojson
    │       │   │   ├── africa_110m.json
    │       │   │   ├── africa_50m.json
    │       │   │   ├── asia_110m.json
    │       │   │   ├── asia_50m.json
    │       │   │   ├── europe_110m.json
    │       │   │   ├── europe_50m.json
    │       │   │   ├── north-america_110m.json
    │       │   │   ├── north-america_50m.json
    │       │   │   ├── south-america_110m.json
    │       │   │   ├── south-america_50m.json
    │       │   │   ├── usa_110m.json
    │       │   │   ├── usa_50m.json
    │       │   │   ├── world_110m.json
    │       │   │   └── world_50m.json
    │       │   └── translation-keys.txt
    │       ├── lib
    │       │   ├── aggregate.js
    │       │   ├── bar.js
    │       │   ├── barpolar.js
    │       │   ├── box.js
    │       │   ├── calendars.js
    │       │   ├── candlestick.js
    │       │   ├── carpet.js
    │       │   ├── choropleth.js
    │       │   ├── cone.js
    │       │   ├── contour.js
    │       │   ├── contourcarpet.js
    │       │   ├── contourgl.js
    │       │   ├── core.js
    │       │   ├── filter.js
    │       │   ├── groupby.js
    │       │   ├── heatmap.js
    │       │   ├── heatmapgl.js
    │       │   ├── histogram.js
    │       │   ├── histogram2d.js
    │       │   ├── histogram2dcontour.js
    │       │   ├── index-basic.js
    │       │   ├── index-cartesian.js
    │       │   ├── index-finance.js
    │       │   ├── index-geo.js
    │       │   ├── index-gl2d.js
    │       │   ├── index-gl3d.js
    │       │   ├── index-mapbox.js
    │       │   ├── index.js
    │       │   ├── isosurface.js
    │       │   ├── locales
    │       │   │   ├── af.js
    │       │   │   ├── am.js
    │       │   │   ├── ar-dz.js
    │       │   │   ├── ar-eg.js
    │       │   │   ├── ar.js
    │       │   │   ├── az.js
    │       │   │   ├── bg.js
    │       │   │   ├── bs.js
    │       │   │   ├── ca.js
    │       │   │   ├── cs.js
    │       │   │   ├── cy.js
    │       │   │   ├── da.js
    │       │   │   ├── de-ch.js
    │       │   │   ├── de.js
    │       │   │   ├── el.js
    │       │   │   ├── eo.js
    │       │   │   ├── es-ar.js
    │       │   │   ├── es-pe.js
    │       │   │   ├── es.js
    │       │   │   ├── et.js
    │       │   │   ├── eu.js
    │       │   │   ├── fa.js
    │       │   │   ├── fi.js
    │       │   │   ├── fo.js
    │       │   │   ├── fr-ch.js
    │       │   │   ├── fr.js
    │       │   │   ├── gl.js
    │       │   │   ├── gu.js
    │       │   │   ├── he.js
    │       │   │   ├── hi-in.js
    │       │   │   ├── hr.js
    │       │   │   ├── hu.js
    │       │   │   ├── hy.js
    │       │   │   ├── id.js
    │       │   │   ├── is.js
    │       │   │   ├── it.js
    │       │   │   ├── ja.js
    │       │   │   ├── ka.js
    │       │   │   ├── km.js
    │       │   │   ├── ko.js
    │       │   │   ├── lt.js
    │       │   │   ├── lv.js
    │       │   │   ├── me-me.js
    │       │   │   ├── me.js
    │       │   │   ├── mk.js
    │       │   │   ├── ml.js
    │       │   │   ├── ms.js
    │       │   │   ├── mt.js
    │       │   │   ├── nl-be.js
    │       │   │   ├── nl.js
    │       │   │   ├── no.js
    │       │   │   ├── pa.js
    │       │   │   ├── pl.js
    │       │   │   ├── pt-br.js
    │       │   │   ├── rm.js
    │       │   │   ├── ro.js
    │       │   │   ├── ru.js
    │       │   │   ├── sk.js
    │       │   │   ├── sl.js
    │       │   │   ├── sq.js
    │       │   │   ├── sr-sr.js
    │       │   │   ├── sr.js
    │       │   │   ├── sv.js
    │       │   │   ├── sw.js
    │       │   │   ├── ta.js
    │       │   │   ├── th.js
    │       │   │   ├── tr.js
    │       │   │   ├── tt.js
    │       │   │   ├── uk.js
    │       │   │   ├── ur.js
    │       │   │   ├── vi.js
    │       │   │   ├── zh-cn.js
    │       │   │   ├── zh-hk.js
    │       │   │   └── zh-tw.js
    │       │   ├── mesh3d.js
    │       │   ├── ohlc.js
    │       │   ├── parcats.js
    │       │   ├── parcoords.js
    │       │   ├── pie.js
    │       │   ├── pointcloud.js
    │       │   ├── sankey.js
    │       │   ├── scatter.js
    │       │   ├── scatter3d.js
    │       │   ├── scattercarpet.js
    │       │   ├── scattergeo.js
    │       │   ├── scattergl.js
    │       │   ├── scattermapbox.js
    │       │   ├── scatterpolar.js
    │       │   ├── scatterpolargl.js
    │       │   ├── scatterternary.js
    │       │   ├── sort.js
    │       │   ├── splom.js
    │       │   ├── streamtube.js
    │       │   ├── sunburst.js
    │       │   ├── surface.js
    │       │   ├── table.js
    │       │   ├── violin.js
    │       │   ├── volume.js
    │       │   └── waterfall.js
    │       ├── package-lock.json
    │       ├── package.json
    │       ├── src
    │       │   ├── assets
    │       │   │   └── geo_assets.js
    │       │   ├── components
    │       │   │   ├── annotations
    │       │   │   │   ├── arrow_paths.js
    │       │   │   │   ├── attributes.js
    │       │   │   │   ├── calc_autorange.js
    │       │   │   │   ├── click.js
    │       │   │   │   ├── common_defaults.js
    │       │   │   │   ├── convert_coords.js
    │       │   │   │   ├── defaults.js
    │       │   │   │   ├── draw.js
    │       │   │   │   ├── draw_arrow_head.js
    │       │   │   │   └── index.js
    │       │   │   ├── annotations3d
    │       │   │   │   ├── attributes.js
    │       │   │   │   ├── convert.js
    │       │   │   │   ├── defaults.js
    │       │   │   │   ├── draw.js
    │       │   │   │   └── index.js
    │       │   │   ├── calendars
    │       │   │   │   ├── calendars.js
    │       │   │   │   └── index.js
    │       │   │   ├── color
    │       │   │   │   ├── attributes.js
    │       │   │   │   └── index.js
    │       │   │   ├── colorbar
    │       │   │   │   ├── attributes.js
    │       │   │   │   ├── connect.js
    │       │   │   │   ├── constants.js
    │       │   │   │   ├── defaults.js
    │       │   │   │   ├── draw.js
    │       │   │   │   ├── has_colorbar.js
    │       │   │   │   └── index.js
    │       │   │   ├── colorscale
    │       │   │   │   ├── attributes.js
    │       │   │   │   ├── calc.js
    │       │   │   │   ├── cross_trace_defaults.js
    │       │   │   │   ├── defaults.js
    │       │   │   │   ├── helpers.js
    │       │   │   │   ├── index.js
    │       │   │   │   ├── layout_attributes.js
    │       │   │   │   ├── layout_defaults.js
    │       │   │   │   └── scales.js
    │       │   │   ├── dragelement
    │       │   │   │   ├── align.js
    │       │   │   │   ├── cursor.js
    │       │   │   │   ├── index.js
    │       │   │   │   └── unhover.js
    │       │   │   ├── drawing
    │       │   │   │   ├── attributes.js
    │       │   │   │   ├── index.js
    │       │   │   │   └── symbol_defs.js
    │       │   │   ├── errorbars
    │       │   │   │   ├── attributes.js
    │       │   │   │   ├── calc.js
    │       │   │   │   ├── compute_error.js
    │       │   │   │   ├── defaults.js
    │       │   │   │   ├── index.js
    │       │   │   │   ├── plot.js
    │       │   │   │   └── style.js
    │       │   │   ├── fx
    │       │   │   │   ├── attributes.js
    │       │   │   │   ├── calc.js
    │       │   │   │   ├── click.js
    │       │   │   │   ├── constants.js
    │       │   │   │   ├── defaults.js
    │       │   │   │   ├── helpers.js
    │       │   │   │   ├── hover.js
    │       │   │   │   ├── hoverlabel_defaults.js
    │       │   │   │   ├── hovertemplate_attributes.js
    │       │   │   │   ├── index.js
    │       │   │   │   ├── layout_attributes.js
    │       │   │   │   ├── layout_defaults.js
    │       │   │   │   └── layout_global_defaults.js
    │       │   │   ├── grid
    │       │   │   │   └── index.js
    │       │   │   ├── images
    │       │   │   │   ├── attributes.js
    │       │   │   │   ├── convert_coords.js
    │       │   │   │   ├── defaults.js
    │       │   │   │   ├── draw.js
    │       │   │   │   └── index.js
    │       │   │   ├── legend
    │       │   │   │   ├── anchor_utils.js
    │       │   │   │   ├── attributes.js
    │       │   │   │   ├── constants.js
    │       │   │   │   ├── defaults.js
    │       │   │   │   ├── draw.js
    │       │   │   │   ├── get_legend_data.js
    │       │   │   │   ├── handle_click.js
    │       │   │   │   ├── helpers.js
    │       │   │   │   ├── index.js
    │       │   │   │   └── style.js
    │       │   │   ├── modebar
    │       │   │   │   ├── buttons.js
    │       │   │   │   ├── index.js
    │       │   │   │   ├── manage.js
    │       │   │   │   └── modebar.js
    │       │   │   ├── rangeselector
    │       │   │   │   ├── attributes.js
    │       │   │   │   ├── constants.js
    │       │   │   │   ├── defaults.js
    │       │   │   │   ├── draw.js
    │       │   │   │   ├── get_update_object.js
    │       │   │   │   └── index.js
    │       │   │   ├── rangeslider
    │       │   │   │   ├── attributes.js
    │       │   │   │   ├── calc_autorange.js
    │       │   │   │   ├── constants.js
    │       │   │   │   ├── defaults.js
    │       │   │   │   ├── draw.js
    │       │   │   │   ├── helpers.js
    │       │   │   │   ├── index.js
    │       │   │   │   └── oppaxis_attributes.js
    │       │   │   ├── shapes
    │       │   │   │   ├── attributes.js
    │       │   │   │   ├── calc_autorange.js
    │       │   │   │   ├── constants.js
    │       │   │   │   ├── defaults.js
    │       │   │   │   ├── draw.js
    │       │   │   │   ├── helpers.js
    │       │   │   │   └── index.js
    │       │   │   ├── sliders
    │       │   │   │   ├── attributes.js
    │       │   │   │   ├── constants.js
    │       │   │   │   ├── defaults.js
    │       │   │   │   ├── draw.js
    │       │   │   │   └── index.js
    │       │   │   ├── titles
    │       │   │   │   └── index.js
    │       │   │   └── updatemenus
    │       │   │       ├── attributes.js
    │       │   │       ├── constants.js
    │       │   │       ├── defaults.js
    │       │   │       ├── draw.js
    │       │   │       ├── index.js
    │       │   │       └── scrollbox.js
    │       │   ├── constants
    │       │   │   ├── alignment.js
    │       │   │   ├── filter_ops.js
    │       │   │   ├── gl3d_dashes.js
    │       │   │   ├── gl3d_markers.js
    │       │   │   ├── interactions.js
    │       │   │   ├── numerical.js
    │       │   │   └── xmlns_namespaces.js
    │       │   ├── core.js
    │       │   ├── css
    │       │   │   ├── _base.scss
    │       │   │   ├── _cursor.scss
    │       │   │   ├── _drag.scss
    │       │   │   ├── _mixins.scss
    │       │   │   ├── _modebar.scss
    │       │   │   ├── _notifier.scss
    │       │   │   ├── _tooltip.scss
    │       │   │   ├── _vars.scss
    │       │   │   └── style.scss
    │       │   ├── fonts
    │       │   │   ├── mathjax_config.js
    │       │   │   └── ploticon
    │       │   │       ├── _ploticon.scss
    │       │   │       ├── config.json
    │       │   │       ├── ploticon.eot
    │       │   │       ├── ploticon.svg
    │       │   │       ├── ploticon.ttf
    │       │   │       └── ploticon.woff
    │       │   ├── lib
    │       │   │   ├── anchor_utils.js
    │       │   │   ├── angles.js
    │       │   │   ├── array.js
    │       │   │   ├── clean_number.js
    │       │   │   ├── clear_gl_canvases.js
    │       │   │   ├── clear_responsive.js
    │       │   │   ├── coerce.js
    │       │   │   ├── dates.js
    │       │   │   ├── events.js
    │       │   │   ├── extend.js
    │       │   │   ├── filter_unique.js
    │       │   │   ├── filter_visible.js
    │       │   │   ├── geo_location_utils.js
    │       │   │   ├── geojson_utils.js
    │       │   │   ├── geometry2d.js
    │       │   │   ├── get_graph_div.js
    │       │   │   ├── gl_format_color.js
    │       │   │   ├── gup.js
    │       │   │   ├── identity.js
    │       │   │   ├── index.js
    │       │   │   ├── is_plain_object.js
    │       │   │   ├── keyed_container.js
    │       │   │   ├── localize.js
    │       │   │   ├── loggers.js
    │       │   │   ├── make_trace_groups.js
    │       │   │   ├── matrix.js
    │       │   │   ├── mod.js
    │       │   │   ├── nested_property.js
    │       │   │   ├── noop.js
    │       │   │   ├── notifier.js
    │       │   │   ├── override_cursor.js
    │       │   │   ├── polygon.js
    │       │   │   ├── prepare_regl.js
    │       │   │   ├── push_unique.js
    │       │   │   ├── queue.js
    │       │   │   ├── regex.js
    │       │   │   ├── relative_attr.js
    │       │   │   ├── relink_private.js
    │       │   │   ├── search.js
    │       │   │   ├── setcursor.js
    │       │   │   ├── show_no_webgl_msg.js
    │       │   │   ├── stats.js
    │       │   │   ├── str2rgbarray.js
    │       │   │   ├── svg_text_utils.js
    │       │   │   ├── throttle.js
    │       │   │   ├── to_log_range.js
    │       │   │   └── topojson_utils.js
    │       │   ├── locale-en-us.js
    │       │   ├── locale-en.js
    │       │   ├── plot_api
    │       │   │   ├── container_array_match.js
    │       │   │   ├── edit_types.js
    │       │   │   ├── helpers.js
    │       │   │   ├── index.js
    │       │   │   ├── manage_arrays.js
    │       │   │   ├── plot_api.js
    │       │   │   ├── plot_config.js
    │       │   │   ├── plot_schema.js
    │       │   │   ├── plot_template.js
    │       │   │   ├── subroutines.js
    │       │   │   ├── template_api.js
    │       │   │   ├── to_image.js
    │       │   │   └── validate.js
    │       │   ├── plots
    │       │   │   ├── animation_attributes.js
    │       │   │   ├── array_container_defaults.js
    │       │   │   ├── attributes.js
    │       │   │   ├── cartesian
    │       │   │   │   ├── attributes.js
    │       │   │   │   ├── autorange.js
    │       │   │   │   ├── axes.js
    │       │   │   │   ├── axis_autotype.js
    │       │   │   │   ├── axis_defaults.js
    │       │   │   │   ├── axis_ids.js
    │       │   │   │   ├── category_order_defaults.js
    │       │   │   │   ├── clean_ticks.js
    │       │   │   │   ├── constants.js
    │       │   │   │   ├── constraints.js
    │       │   │   │   ├── dragbox.js
    │       │   │   │   ├── graph_interact.js
    │       │   │   │   ├── include_components.js
    │       │   │   │   ├── index.js
    │       │   │   │   ├── layout_attributes.js
    │       │   │   │   ├── layout_defaults.js
    │       │   │   │   ├── line_grid_defaults.js
    │       │   │   │   ├── position_defaults.js
    │       │   │   │   ├── scale_zoom.js
    │       │   │   │   ├── select.js
    │       │   │   │   ├── set_convert.js
    │       │   │   │   ├── tick_label_defaults.js
    │       │   │   │   ├── tick_mark_defaults.js
    │       │   │   │   ├── tick_value_defaults.js
    │       │   │   │   ├── transition_axes.js
    │       │   │   │   └── type_defaults.js
    │       │   │   ├── command.js
    │       │   │   ├── domain.js
    │       │   │   ├── font_attributes.js
    │       │   │   ├── frame_attributes.js
    │       │   │   ├── geo
    │       │   │   │   ├── constants.js
    │       │   │   │   ├── geo.js
    │       │   │   │   ├── index.js
    │       │   │   │   ├── layout_attributes.js
    │       │   │   │   ├── layout_defaults.js
    │       │   │   │   ├── projections.js
    │       │   │   │   └── zoom.js
    │       │   │   ├── get_data.js
    │       │   │   ├── gl2d
    │       │   │   │   ├── camera.js
    │       │   │   │   ├── convert.js
    │       │   │   │   ├── index.js
    │       │   │   │   └── scene2d.js
    │       │   │   ├── gl3d
    │       │   │   │   ├── camera.js
    │       │   │   │   ├── index.js
    │       │   │   │   ├── layout
    │       │   │   │   │   ├── attributes.js
    │       │   │   │   │   ├── axis_attributes.js
    │       │   │   │   │   ├── axis_defaults.js
    │       │   │   │   │   ├── convert.js
    │       │   │   │   │   ├── defaults.js
    │       │   │   │   │   ├── layout_attributes.js
    │       │   │   │   │   ├── spikes.js
    │       │   │   │   │   └── tick_marks.js
    │       │   │   │   ├── project.js
    │       │   │   │   ├── scene.js
    │       │   │   │   └── zip3.js
    │       │   │   ├── layout_attributes.js
    │       │   │   ├── mapbox
    │       │   │   │   ├── constants.js
    │       │   │   │   ├── convert_text_opts.js
    │       │   │   │   ├── index.js
    │       │   │   │   ├── layers.js
    │       │   │   │   ├── layout_attributes.js
    │       │   │   │   ├── layout_defaults.js
    │       │   │   │   └── mapbox.js
    │       │   │   ├── pad_attributes.js
    │       │   │   ├── plots.js
    │       │   │   ├── polar
    │       │   │   │   ├── constants.js
    │       │   │   │   ├── helpers.js
    │       │   │   │   ├── index.js
    │       │   │   │   ├── layout_attributes.js
    │       │   │   │   ├── layout_defaults.js
    │       │   │   │   ├── legacy
    │       │   │   │   │   ├── area_attributes.js
    │       │   │   │   │   ├── axis_attributes.js
    │       │   │   │   │   ├── index.js
    │       │   │   │   │   ├── micropolar.js
    │       │   │   │   │   ├── micropolar_manager.js
    │       │   │   │   │   └── undo_manager.js
    │       │   │   │   ├── polar.js
    │       │   │   │   └── set_convert.js
    │       │   │   ├── subplot_defaults.js
    │       │   │   └── ternary
    │       │   │       ├── index.js
    │       │   │       ├── layout_attributes.js
    │       │   │       ├── layout_defaults.js
    │       │   │       └── ternary.js
    │       │   ├── registry.js
    │       │   ├── snapshot
    │       │   │   ├── cloneplot.js
    │       │   │   ├── download.js
    │       │   │   ├── filesaver.js
    │       │   │   ├── helpers.js
    │       │   │   ├── index.js
    │       │   │   ├── svgtoimg.js
    │       │   │   ├── toimage.js
    │       │   │   └── tosvg.js
    │       │   ├── traces
    │       │   │   ├── bar
    │       │   │   │   ├── arrays_to_calcdata.js
    │       │   │   │   ├── attributes.js
    │       │   │   │   ├── calc.js
    │       │   │   │   ├── constants.js
    │       │   │   │   ├── cross_trace_calc.js
    │       │   │   │   ├── defaults.js
    │       │   │   │   ├── helpers.js
    │       │   │   │   ├── hover.js
    │       │   │   │   ├── index.js
    │       │   │   │   ├── layout_attributes.js
    │       │   │   │   ├── layout_defaults.js
    │       │   │   │   ├── plot.js
    │       │   │   │   ├── select.js
    │       │   │   │   ├── sieve.js
    │       │   │   │   ├── style.js
    │       │   │   │   └── style_defaults.js
    │       │   │   ├── barpolar
    │       │   │   │   ├── attributes.js
    │       │   │   │   ├── calc.js
    │       │   │   │   ├── defaults.js
    │       │   │   │   ├── hover.js
    │       │   │   │   ├── index.js
    │       │   │   │   ├── layout_attributes.js
    │       │   │   │   ├── layout_defaults.js
    │       │   │   │   └── plot.js
    │       │   │   ├── box
    │       │   │   │   ├── attributes.js
    │       │   │   │   ├── calc.js
    │       │   │   │   ├── cross_trace_calc.js
    │       │   │   │   ├── defaults.js
    │       │   │   │   ├── event_data.js
    │       │   │   │   ├── hover.js
    │       │   │   │   ├── index.js
    │       │   │   │   ├── layout_attributes.js
    │       │   │   │   ├── layout_defaults.js
    │       │   │   │   ├── plot.js
    │       │   │   │   ├── select.js
    │       │   │   │   └── style.js
    │       │   │   ├── candlestick
    │       │   │   │   ├── attributes.js
    │       │   │   │   ├── calc.js
    │       │   │   │   ├── defaults.js
    │       │   │   │   └── index.js
    │       │   │   ├── carpet
    │       │   │   │   ├── ab_defaults.js
    │       │   │   │   ├── array_minmax.js
    │       │   │   │   ├── attributes.js
    │       │   │   │   ├── axis_aligned_line.js
    │       │   │   │   ├── axis_attributes.js
    │       │   │   │   ├── axis_defaults.js
    │       │   │   │   ├── calc.js
    │       │   │   │   ├── calc_clippath.js
    │       │   │   │   ├── calc_gridlines.js
    │       │   │   │   ├── calc_labels.js
    │       │   │   │   ├── catmull_rom.js
    │       │   │   │   ├── cheater_basis.js
    │       │   │   │   ├── compute_control_points.js
    │       │   │   │   ├── constants.js
    │       │   │   │   ├── create_i_derivative_evaluator.js
    │       │   │   │   ├── create_j_derivative_evaluator.js
    │       │   │   │   ├── create_spline_evaluator.js
    │       │   │   │   ├── defaults.js
    │       │   │   │   ├── index.js
    │       │   │   │   ├── lookup_carpetid.js
    │       │   │   │   ├── makepath.js
    │       │   │   │   ├── map_1d_array.js
    │       │   │   │   ├── orient_text.js
    │       │   │   │   ├── plot.js
    │       │   │   │   ├── set_convert.js
    │       │   │   │   ├── smooth_fill_2d_array.js
    │       │   │   │   ├── smooth_fill_array.js
    │       │   │   │   └── xy_defaults.js
    │       │   │   ├── choropleth
    │       │   │   │   ├── attributes.js
    │       │   │   │   ├── calc.js
    │       │   │   │   ├── defaults.js
    │       │   │   │   ├── event_data.js
    │       │   │   │   ├── hover.js
    │       │   │   │   ├── index.js
    │       │   │   │   ├── plot.js
    │       │   │   │   ├── select.js
    │       │   │   │   └── style.js
    │       │   │   ├── cone
    │       │   │   │   ├── attributes.js
    │       │   │   │   ├── calc.js
    │       │   │   │   ├── convert.js
    │       │   │   │   ├── defaults.js
    │       │   │   │   └── index.js
    │       │   │   ├── contour
    │       │   │   │   ├── attributes.js
    │       │   │   │   ├── calc.js
    │       │   │   │   ├── close_boundaries.js
    │       │   │   │   ├── colorbar.js
    │       │   │   │   ├── constants.js
    │       │   │   │   ├── constraint_defaults.js
    │       │   │   │   ├── constraint_mapping.js
    │       │   │   │   ├── contours_defaults.js
    │       │   │   │   ├── convert_to_constraints.js
    │       │   │   │   ├── defaults.js
    │       │   │   │   ├── empty_pathinfo.js
    │       │   │   │   ├── end_plus.js
    │       │   │   │   ├── find_all_paths.js
    │       │   │   │   ├── hover.js
    │       │   │   │   ├── index.js
    │       │   │   │   ├── label_defaults.js
    │       │   │   │   ├── make_color_map.js
    │       │   │   │   ├── make_crossings.js
    │       │   │   │   ├── plot.js
    │       │   │   │   ├── set_contours.js
    │       │   │   │   ├── style.js
    │       │   │   │   └── style_defaults.js
    │       │   │   ├── contourcarpet
    │       │   │   │   ├── attributes.js
    │       │   │   │   ├── calc.js
    │       │   │   │   ├── defaults.js
    │       │   │   │   ├── index.js
    │       │   │   │   ├── join_all_paths.js
    │       │   │   │   ├── map_pathinfo.js
    │       │   │   │   └── plot.js
    │       │   │   ├── contourgl
    │       │   │   │   ├── convert.js
    │       │   │   │   └── index.js
    │       │   │   ├── heatmap
    │       │   │   │   ├── attributes.js
    │       │   │   │   ├── calc.js
    │       │   │   │   ├── clean_2d_array.js
    │       │   │   │   ├── colorbar.js
    │       │   │   │   ├── convert_column_xyz.js
    │       │   │   │   ├── defaults.js
    │       │   │   │   ├── find_empties.js
    │       │   │   │   ├── hover.js
    │       │   │   │   ├── index.js
    │       │   │   │   ├── interp2d.js
    │       │   │   │   ├── make_bound_array.js
    │       │   │   │   ├── plot.js
    │       │   │   │   ├── style.js
    │       │   │   │   ├── style_defaults.js
    │       │   │   │   └── xyz_defaults.js
    │       │   │   ├── heatmapgl
    │       │   │   │   ├── attributes.js
    │       │   │   │   ├── convert.js
    │       │   │   │   └── index.js
    │       │   │   ├── histogram
    │       │   │   │   ├── attributes.js
    │       │   │   │   ├── average.js
    │       │   │   │   ├── bin_attributes.js
    │       │   │   │   ├── bin_functions.js
    │       │   │   │   ├── bin_label_vals.js
    │       │   │   │   ├── calc.js
    │       │   │   │   ├── constants.js
    │       │   │   │   ├── cross_trace_defaults.js
    │       │   │   │   ├── defaults.js
    │       │   │   │   ├── event_data.js
    │       │   │   │   ├── hover.js
    │       │   │   │   ├── index.js
    │       │   │   │   └── norm_functions.js
    │       │   │   ├── histogram2d
    │       │   │   │   ├── attributes.js
    │       │   │   │   ├── calc.js
    │       │   │   │   ├── cross_trace_defaults.js
    │       │   │   │   ├── defaults.js
    │       │   │   │   ├── hover.js
    │       │   │   │   ├── index.js
    │       │   │   │   └── sample_defaults.js
    │       │   │   ├── histogram2dcontour
    │       │   │   │   ├── attributes.js
    │       │   │   │   ├── defaults.js
    │       │   │   │   └── index.js
    │       │   │   ├── isosurface
    │       │   │   │   ├── attributes.js
    │       │   │   │   ├── calc.js
    │       │   │   │   ├── convert.js
    │       │   │   │   ├── defaults.js
    │       │   │   │   └── index.js
    │       │   │   ├── mesh3d
    │       │   │   │   ├── attributes.js
    │       │   │   │   ├── calc.js
    │       │   │   │   ├── convert.js
    │       │   │   │   ├── defaults.js
    │       │   │   │   └── index.js
    │       │   │   ├── ohlc
    │       │   │   │   ├── attributes.js
    │       │   │   │   ├── calc.js
    │       │   │   │   ├── defaults.js
    │       │   │   │   ├── hover.js
    │       │   │   │   ├── index.js
    │       │   │   │   ├── ohlc_defaults.js
    │       │   │   │   ├── plot.js
    │       │   │   │   ├── select.js
    │       │   │   │   └── style.js
    │       │   │   ├── parcats
    │       │   │   │   ├── attributes.js
    │       │   │   │   ├── base_plot.js
    │       │   │   │   ├── calc.js
    │       │   │   │   ├── defaults.js
    │       │   │   │   ├── index.js
    │       │   │   │   ├── parcats.js
    │       │   │   │   └── plot.js
    │       │   │   ├── parcoords
    │       │   │   │   ├── attributes.js
    │       │   │   │   ├── axisbrush.js
    │       │   │   │   ├── base_plot.js
    │       │   │   │   ├── calc.js
    │       │   │   │   ├── constants.js
    │       │   │   │   ├── defaults.js
    │       │   │   │   ├── index.js
    │       │   │   │   ├── lines.js
    │       │   │   │   ├── merge_length.js
    │       │   │   │   ├── parcoords.js
    │       │   │   │   ├── plot.js
    │       │   │   │   └── shaders
    │       │   │   │       ├── context_vertex.glsl
    │       │   │   │       ├── fragment.glsl
    │       │   │   │       ├── pick_vertex.glsl
    │       │   │   │       ├── position.glsl
    │       │   │   │       ├── unfiltered_position.glsl
    │       │   │   │       ├── vertex.glsl
    │       │   │   │       └── y.glsl
    │       │   │   ├── pie
    │       │   │   │   ├── attributes.js
    │       │   │   │   ├── base_plot.js
    │       │   │   │   ├── calc.js
    │       │   │   │   ├── defaults.js
    │       │   │   │   ├── event_data.js
    │       │   │   │   ├── helpers.js
    │       │   │   │   ├── index.js
    │       │   │   │   ├── layout_attributes.js
    │       │   │   │   ├── layout_defaults.js
    │       │   │   │   ├── plot.js
    │       │   │   │   ├── style.js
    │       │   │   │   └── style_one.js
    │       │   │   ├── pointcloud
    │       │   │   │   ├── attributes.js
    │       │   │   │   ├── convert.js
    │       │   │   │   ├── defaults.js
    │       │   │   │   └── index.js
    │       │   │   ├── sankey
    │       │   │   │   ├── attributes.js
    │       │   │   │   ├── base_plot.js
    │       │   │   │   ├── calc.js
    │       │   │   │   ├── constants.js
    │       │   │   │   ├── defaults.js
    │       │   │   │   ├── index.js
    │       │   │   │   ├── plot.js
    │       │   │   │   ├── render.js
    │       │   │   │   └── select.js
    │       │   │   ├── scatter
    │       │   │   │   ├── arrays_to_calcdata.js
    │       │   │   │   ├── attributes.js
    │       │   │   │   ├── calc.js
    │       │   │   │   ├── calc_selection.js
    │       │   │   │   ├── colorscale_calc.js
    │       │   │   │   ├── constants.js
    │       │   │   │   ├── cross_trace_calc.js
    │       │   │   │   ├── cross_trace_defaults.js
    │       │   │   │   ├── defaults.js
    │       │   │   │   ├── fill_hover_text.js
    │       │   │   │   ├── fillcolor_defaults.js
    │       │   │   │   ├── get_trace_color.js
    │       │   │   │   ├── hover.js
    │       │   │   │   ├── index.js
    │       │   │   │   ├── line_defaults.js
    │       │   │   │   ├── line_points.js
    │       │   │   │   ├── line_shape_defaults.js
    │       │   │   │   ├── link_traces.js
    │       │   │   │   ├── make_bubble_size_func.js
    │       │   │   │   ├── marker_colorbar.js
    │       │   │   │   ├── marker_defaults.js
    │       │   │   │   ├── plot.js
    │       │   │   │   ├── select.js
    │       │   │   │   ├── stack_defaults.js
    │       │   │   │   ├── style.js
    │       │   │   │   ├── subtypes.js
    │       │   │   │   ├── text_defaults.js
    │       │   │   │   └── xy_defaults.js
    │       │   │   ├── scatter3d
    │       │   │   │   ├── attributes.js
    │       │   │   │   ├── calc.js
    │       │   │   │   ├── calc_errors.js
    │       │   │   │   ├── convert.js
    │       │   │   │   ├── defaults.js
    │       │   │   │   └── index.js
    │       │   │   ├── scattercarpet
    │       │   │   │   ├── attributes.js
    │       │   │   │   ├── calc.js
    │       │   │   │   ├── defaults.js
    │       │   │   │   ├── event_data.js
    │       │   │   │   ├── hover.js
    │       │   │   │   ├── index.js
    │       │   │   │   └── plot.js
    │       │   │   ├── scattergeo
    │       │   │   │   ├── attributes.js
    │       │   │   │   ├── calc.js
    │       │   │   │   ├── defaults.js
    │       │   │   │   ├── event_data.js
    │       │   │   │   ├── hover.js
    │       │   │   │   ├── index.js
    │       │   │   │   ├── plot.js
    │       │   │   │   ├── select.js
    │       │   │   │   └── style.js
    │       │   │   ├── scattergl
    │       │   │   │   ├── attributes.js
    │       │   │   │   ├── constants.js
    │       │   │   │   ├── convert.js
    │       │   │   │   ├── defaults.js
    │       │   │   │   └── index.js
    │       │   │   ├── scattermapbox
    │       │   │   │   ├── attributes.js
    │       │   │   │   ├── convert.js
    │       │   │   │   ├── defaults.js
    │       │   │   │   ├── event_data.js
    │       │   │   │   ├── hover.js
    │       │   │   │   ├── index.js
    │       │   │   │   ├── plot.js
    │       │   │   │   └── select.js
    │       │   │   ├── scatterpolar
    │       │   │   │   ├── attributes.js
    │       │   │   │   ├── calc.js
    │       │   │   │   ├── defaults.js
    │       │   │   │   ├── hover.js
    │       │   │   │   ├── index.js
    │       │   │   │   └── plot.js
    │       │   │   ├── scatterpolargl
    │       │   │   │   ├── attributes.js
    │       │   │   │   ├── defaults.js
    │       │   │   │   └── index.js
    │       │   │   ├── scatterternary
    │       │   │   │   ├── attributes.js
    │       │   │   │   ├── calc.js
    │       │   │   │   ├── defaults.js
    │       │   │   │   ├── event_data.js
    │       │   │   │   ├── hover.js
    │       │   │   │   ├── index.js
    │       │   │   │   └── plot.js
    │       │   │   ├── splom
    │       │   │   │   ├── attributes.js
    │       │   │   │   ├── base_plot.js
    │       │   │   │   ├── defaults.js
    │       │   │   │   └── index.js
    │       │   │   ├── streamtube
    │       │   │   │   ├── attributes.js
    │       │   │   │   ├── calc.js
    │       │   │   │   ├── convert.js
    │       │   │   │   ├── defaults.js
    │       │   │   │   └── index.js
    │       │   │   ├── sunburst
    │       │   │   │   ├── attributes.js
    │       │   │   │   ├── base_plot.js
    │       │   │   │   ├── calc.js
    │       │   │   │   ├── constants.js
    │       │   │   │   ├── defaults.js
    │       │   │   │   ├── index.js
    │       │   │   │   ├── layout_attributes.js
    │       │   │   │   ├── layout_defaults.js
    │       │   │   │   ├── plot.js
    │       │   │   │   └── style.js
    │       │   │   ├── surface
    │       │   │   │   ├── attributes.js
    │       │   │   │   ├── calc.js
    │       │   │   │   ├── convert.js
    │       │   │   │   ├── defaults.js
    │       │   │   │   └── index.js
    │       │   │   ├── table
    │       │   │   │   ├── attributes.js
    │       │   │   │   ├── base_plot.js
    │       │   │   │   ├── calc.js
    │       │   │   │   ├── constants.js
    │       │   │   │   ├── data_preparation_helper.js
    │       │   │   │   ├── data_split_helpers.js
    │       │   │   │   ├── defaults.js
    │       │   │   │   ├── index.js
    │       │   │   │   └── plot.js
    │       │   │   ├── violin
    │       │   │   │   ├── attributes.js
    │       │   │   │   ├── calc.js
    │       │   │   │   ├── cross_trace_calc.js
    │       │   │   │   ├── defaults.js
    │       │   │   │   ├── helpers.js
    │       │   │   │   ├── hover.js
    │       │   │   │   ├── index.js
    │       │   │   │   ├── layout_attributes.js
    │       │   │   │   ├── layout_defaults.js
    │       │   │   │   ├── plot.js
    │       │   │   │   └── style.js
    │       │   │   ├── volume
    │       │   │   │   ├── attributes.js
    │       │   │   │   ├── convert.js
    │       │   │   │   ├── defaults.js
    │       │   │   │   └── index.js
    │       │   │   └── waterfall
    │       │   │       ├── attributes.js
    │       │   │       ├── calc.js
    │       │   │       ├── cross_trace_calc.js
    │       │   │       ├── defaults.js
    │       │   │       ├── hover.js
    │       │   │       ├── index.js
    │       │   │       ├── layout_attributes.js
    │       │   │       ├── layout_defaults.js
    │       │   │       ├── plot.js
    │       │   │       └── style.js
    │       │   └── transforms
    │       │       ├── aggregate.js
    │       │       ├── filter.js
    │       │       ├── groupby.js
    │       │       ├── helpers.js
    │       │       └── sort.js
    │       ├── tasks
    │       │   ├── baseline.js
    │       │   ├── bundle.js
    │       │   ├── cibundle.js
    │       │   ├── compress_attributes.js
    │       │   ├── docker.js
    │       │   ├── find_locale_strings.js
    │       │   ├── header.js
    │       │   ├── noci_test.sh
    │       │   ├── preprocess.js
    │       │   ├── pretest.js
    │       │   ├── pull_date_format.js
    │       │   ├── shard_jasmine_tests.js
    │       │   ├── stats.js
    │       │   ├── sync_packages.js
    │       │   ├── test_bundle.js
    │       │   ├── test_export.js
    │       │   ├── test_image.js
    │       │   ├── test_syntax.js
    │       │   ├── util
    │       │   │   ├── browserify_wrapper.js
    │       │   │   ├── common.js
    │       │   │   ├── constants.js
    │       │   │   ├── container_commands.js
    │       │   │   ├── make_schema.js
    │       │   │   ├── pull_css.js
    │       │   │   ├── pull_font_svg.js
    │       │   │   ├── shortcut_paths.js
    │       │   │   ├── strict_d3.js
    │       │   │   ├── update_version.js
    │       │   │   ├── watchified_bundle.js
    │       │   │   └── wrap_locale.js
    │       │   └── watch.js
    │       └── test
    │           ├── image
    │           │   ├── README.md
    │           │   ├── assets
    │           │   │   ├── get_image_paths.js
    │           │   │   ├── get_image_request_options.js
    │           │   │   └── get_mock_list.js
    │           │   ├── baselines
    │           │   │   ├── 0.png
    │           │   │   ├── 1.png
    │           │   │   ├── 10.png
    │           │   │   ├── 11.png
    │           │   │   ├── 12.png
    │           │   │   ├── 13.png
    │           │   │   ├── 14.png
    │           │   │   ├── 15.png
    │           │   │   ├── 16.png
    │           │   │   ├── 17.png
    │           │   │   ├── 18.png
    │           │   │   ├── 19.png
    │           │   │   ├── 20.png
    │           │   │   ├── 21.png
    │           │   │   ├── 22.png
    │           │   │   ├── 23.png
    │           │   │   ├── 24.png
    │           │   │   ├── 25.png
    │           │   │   ├── 26.png
    │           │   │   ├── 27.png
    │           │   │   ├── 28.png
    │           │   │   ├── 29.png
    │           │   │   ├── 2dhistogram_contour_subplots.png
    │           │   │   ├── 30.png
    │           │   │   ├── 31.png
    │           │   │   ├── 32.png
    │           │   │   ├── 4.png
    │           │   │   ├── 5.png
    │           │   │   ├── 6.png
    │           │   │   ├── 7.png
    │           │   │   ├── 8.png
    │           │   │   ├── airfoil.png
    │           │   │   ├── animation.png
    │           │   │   ├── annotations-autorange.png
    │           │   │   ├── annotations.png
    │           │   │   ├── automargin-push-x-extra.png
    │           │   │   ├── automargin-push-y-extra.png
    │           │   │   ├── automargin-superimposed-axes.png
    │           │   │   ├── autorange-tozero-rangemode.png
    │           │   │   ├── axes-autotype-empty.png
    │           │   │   ├── axes-ticks.png
    │           │   │   ├── axes_booleans.png
    │           │   │   ├── axes_category_ascending.png
    │           │   │   ├── axes_category_categoryarray.png
    │           │   │   ├── axes_category_categoryarray_truncated_tails.png
    │           │   │   ├── axes_category_descending.png
    │           │   │   ├── axes_category_descending_with_gaps.png
    │           │   │   ├── axes_category_null.png
    │           │   │   ├── axes_enumerated_ticks.png
    │           │   │   ├── axes_free_default.png
    │           │   │   ├── axes_labels.png
    │           │   │   ├── axes_line_noticklabels.png
    │           │   │   ├── axes_lines.png
    │           │   │   ├── axes_linked_date_autorange.png
    │           │   │   ├── axes_matches-linear-categories.png
    │           │   │   ├── axes_range_manual.png
    │           │   │   ├── axes_range_mode.png
    │           │   │   ├── axes_range_type.png
    │           │   │   ├── axes_reversed.png
    │           │   │   ├── axes_scaleanchor-constrain-domain-fixedrange.png
    │           │   │   ├── axes_scaleanchor-with-matches.png
    │           │   │   ├── axes_scaleanchor.png
    │           │   │   ├── axes_visible-false.png
    │           │   │   ├── axis_automargin_zero_margins.png
    │           │   │   ├── axislabel_separatethousands.png
    │           │   │   ├── bar-alignment-offset.png
    │           │   │   ├── bar-autotext-log-size-axes.png
    │           │   │   ├── bar-colorscale-colorbar.png
    │           │   │   ├── bar-grouping-vs-defaults.png
    │           │   │   ├── bar-insidetext-log-size-axis.png
    │           │   │   ├── bar-marker-line-colorscales.png
    │           │   │   ├── bar-offsetgroups.png
    │           │   │   ├── bar_and_histogram.png
    │           │   │   ├── bar_attrs_group.png
    │           │   │   ├── bar_attrs_group_norm.png
    │           │   │   ├── bar_attrs_overlay.png
    │           │   │   ├── bar_attrs_relative.png
    │           │   │   ├── bar_autorange-above-zero-normalized.png
    │           │   │   ├── bar_autorange-above-zero.png
    │           │   │   ├── bar_bargap0.png
    │           │   │   ├── bar_cliponaxis-false.png
    │           │   │   ├── bar_errorbars_inherit_color.png
    │           │   │   ├── bar_group_percent.png
    │           │   │   ├── bar_line.png
    │           │   │   ├── bar_marker_array.png
    │           │   │   ├── bar_multiline_labels.png
    │           │   │   ├── bar_nonnumeric_sizes.png
    │           │   │   ├── bar_stack-with-gaps.png
    │           │   │   ├── bar_stackrelative_negative.png
    │           │   │   ├── bar_stackrelativeto100_negative.png
    │           │   │   ├── bar_stackto1.png
    │           │   │   ├── bar_stackto100_negative.png
    │           │   │   ├── bar_unhidden.png
    │           │   │   ├── basic-figure-to-image.png
    │           │   │   ├── basic_area.png
    │           │   │   ├── basic_bar.png
    │           │   │   ├── basic_error_bar.png
    │           │   │   ├── basic_heatmap.png
    │           │   │   ├── basic_line.png
    │           │   │   ├── benchmarks.png
    │           │   │   ├── binding.png
    │           │   │   ├── blackbody_heatmap.png
    │           │   │   ├── blank-bar-outsidetext.png
    │           │   │   ├── bluered_heatmap.png
    │           │   │   ├── box-alignment-offset.png
    │           │   │   ├── box-violin-multicategory-on-val-axis.png
    │           │   │   ├── box-violin-x0-category-position.png
    │           │   │   ├── box_grouped-multicategory.png
    │           │   │   ├── box_grouped.png
    │           │   │   ├── box_grouped_horz.png
    │           │   │   ├── box_horz_notched.png
    │           │   │   ├── box_notched.png
    │           │   │   ├── box_plot_jitter.png
    │           │   │   ├── box_plot_jitter_edge_cases.png
    │           │   │   ├── box_single-group.png
    │           │   │   ├── box_with-empty-1st-trace.png
    │           │   │   ├── boxplots_outliercolordflt.png
    │           │   │   ├── boxplots_undefined_vals.png
    │           │   │   ├── bubble_markersize0.png
    │           │   │   ├── bubble_nonnumeric-sizes.png
    │           │   │   ├── bubblechart.png
    │           │   │   ├── candlestick_double-y-axis.png
    │           │   │   ├── candlestick_rangeslider_thai.png
    │           │   │   ├── carpet_axis.png
    │           │   │   ├── carpet_template.png
    │           │   │   ├── category-autorange.png
    │           │   │   ├── category_dtick_3.png
    │           │   │   ├── cheater.png
    │           │   │   ├── cheater_constraint_greater_than.png
    │           │   │   ├── cheater_constraint_greater_than_with_hill.png
    │           │   │   ├── cheater_constraint_greater_than_with_valley.png
    │           │   │   ├── cheater_constraint_inner_range.png
    │           │   │   ├── cheater_constraint_inner_range_hi_top.png
    │           │   │   ├── cheater_constraint_inner_range_hi_top_with_hill.png
    │           │   │   ├── cheater_constraint_inner_range_hi_top_with_valley.png
    │           │   │   ├── cheater_constraint_inner_range_lo_top.png
    │           │   │   ├── cheater_constraint_inner_range_lo_top_with_hill.png
    │           │   │   ├── cheater_constraint_inner_range_lo_top_with_valley.png
    │           │   │   ├── cheater_constraint_inner_range_with_hill.png
    │           │   │   ├── cheater_constraint_inner_range_with_valley.png
    │           │   │   ├── cheater_constraint_less_than.png
    │           │   │   ├── cheater_constraint_less_than_with_hill.png
    │           │   │   ├── cheater_constraint_less_than_with_valley.png
    │           │   │   ├── cheater_constraint_outer_range.png
    │           │   │   ├── cheater_constraint_outer_range_hi_top.png
    │           │   │   ├── cheater_constraint_outer_range_hi_top_with_hill.png
    │           │   │   ├── cheater_constraint_outer_range_hi_top_with_valley.png
    │           │   │   ├── cheater_constraint_outer_range_lo_top.png
    │           │   │   ├── cheater_constraint_outer_range_lo_top_with_hill.png
    │           │   │   ├── cheater_constraint_outer_range_lo_top_with_valley.png
    │           │   │   ├── cheater_constraint_outer_range_with_hill.png
    │           │   │   ├── cheater_constraint_outer_range_with_valley.png
    │           │   │   ├── cheater_constraints.png
    │           │   │   ├── cheater_contour.png
    │           │   │   ├── cheater_fully_filled.png
    │           │   │   ├── cheater_smooth.png
    │           │   │   ├── cheaterslope.png
    │           │   │   ├── cheaterslope_noticklabels.png
    │           │   │   ├── chinese.png
    │           │   │   ├── cividis_heatmap.png
    │           │   │   ├── cliponaxis_false-dates-log.png
    │           │   │   ├── cliponaxis_false.png
    │           │   │   ├── cmid-zmid.png
    │           │   │   ├── colorbar_enumerated_ticks.png
    │           │   │   ├── colorbar_tick_prefix_suffix.png
    │           │   │   ├── colorbar_tickformat.png
    │           │   │   ├── colorscale_constraint.png
    │           │   │   ├── colorscale_opacity.png
    │           │   │   ├── colorscale_template.png
    │           │   │   ├── connectgaps_2d.png
    │           │   │   ├── contour_constraints.png
    │           │   │   ├── contour_doublemerge.png
    │           │   │   ├── contour_edge_cases.png
    │           │   │   ├── contour_heatmap_coloring.png
    │           │   │   ├── contour_label-reversed-axes.png
    │           │   │   ├── contour_label-thousands-suffix.png
    │           │   │   ├── contour_legend.png
    │           │   │   ├── contour_lines_coloring.png
    │           │   │   ├── contour_log.png
    │           │   │   ├── contour_match_edges.png
    │           │   │   ├── contour_nolines.png
    │           │   │   ├── contour_scatter.png
    │           │   │   ├── contour_transposed-irregular.png
    │           │   │   ├── contour_transposed.png
    │           │   │   ├── contour_valid_ses.png
    │           │   │   ├── contour_xyz-gaps-on-sides.png
    │           │   │   ├── custom_colorscale.png
    │           │   │   ├── custom_size_subplot.png
    │           │   │   ├── date_axes.png
    │           │   │   ├── date_histogram.png
    │           │   │   ├── dendrogram.png
    │           │   │   ├── earth_heatmap.png
    │           │   │   ├── electric_heatmap.png
    │           │   │   ├── empty.png
    │           │   │   ├── error_bar_asymmetric_array.png
    │           │   │   ├── error_bar_asymmetric_constant.png
    │           │   │   ├── error_bar_bar.png
    │           │   │   ├── error_bar_bar_ids.png
    │           │   │   ├── error_bar_horizontal.png
    │           │   │   ├── error_bar_layers.png
    │           │   │   ├── error_bar_sqrt.png
    │           │   │   ├── error_bar_style.png
    │           │   │   ├── fake_violins.png
    │           │   │   ├── finance_multicategory.png
    │           │   │   ├── finance_style.png
    │           │   │   ├── finance_subplots_categories.png
    │           │   │   ├── font-wishlist.png
    │           │   │   ├── fonts.png
    │           │   │   ├── geo_across-antimeridian.png
    │           │   │   ├── geo_africa-insets.png
    │           │   │   ├── geo_aitoff-sinusoidal.png
    │           │   │   ├── geo_bg-color.png
    │           │   │   ├── geo_big-frame.png
    │           │   │   ├── geo_bubbles-colorscales.png
    │           │   │   ├── geo_bubbles-sizeref.png
    │           │   │   ├── geo_canadian-cites.png
    │           │   │   ├── geo_centering.png
    │           │   │   ├── geo_choropleth-text.png
    │           │   │   ├── geo_choropleth-usa.png
    │           │   │   ├── geo_conic-conformal.png
    │           │   │   ├── geo_connectgaps.png
    │           │   │   ├── geo_country-names-text-chart.png
    │           │   │   ├── geo_country-names.png
    │           │   │   ├── geo_custom-colorscale.png
    │           │   │   ├── geo_europe-bubbles.png
    │           │   │   ├── geo_fill.png
    │           │   │   ├── geo_first.png
    │           │   │   ├── geo_kavrayskiy7.png
    │           │   │   ├── geo_legendonly.png
    │           │   │   ├── geo_miterlimit-base-layers.png
    │           │   │   ├── geo_multi-geos.png
    │           │   │   ├── geo_multiple-usa-choropleths.png
    │           │   │   ├── geo_orthographic.png
    │           │   │   ├── geo_point-selection.png
    │           │   │   ├── geo_scattergeo-locations.png
    │           │   │   ├── geo_scattergeo-out-of-usa.png
    │           │   │   ├── geo_second.png
    │           │   │   ├── geo_stereographic.png
    │           │   │   ├── geo_text_chart_arrays.png
    │           │   │   ├── geo_tick0.png
    │           │   │   ├── geo_usa-states.png
    │           │   │   ├── geo_winkel-tripel.png
    │           │   │   ├── gl2d_10.png
    │           │   │   ├── gl2d_12.png
    │           │   │   ├── gl2d_14.png
    │           │   │   ├── gl2d_17.png
    │           │   │   ├── gl2d_annotations.png
    │           │   │   ├── gl2d_axes_booleans.png
    │           │   │   ├── gl2d_axes_labels.png
    │           │   │   ├── gl2d_axes_labels2.png
    │           │   │   ├── gl2d_axes_lines.png
    │           │   │   ├── gl2d_axes_range_manual.png
    │           │   │   ├── gl2d_axes_range_mode.png
    │           │   │   ├── gl2d_axes_range_type.png
    │           │   │   ├── gl2d_clean-number.png
    │           │   │   ├── gl2d_connect_gaps.png
    │           │   │   ├── gl2d_date_axes.png
    │           │   │   ├── gl2d_error_bars.png
    │           │   │   ├── gl2d_error_bars_log.png
    │           │   │   ├── gl2d_fill-ordering.png
    │           │   │   ├── gl2d_fill_trace_tozero_order.png
    │           │   │   ├── gl2d_fonts.png
    │           │   │   ├── gl2d_heatmapgl.png
    │           │   │   ├── gl2d_horiz-lines.png
    │           │   │   ├── gl2d_layout_image.png
    │           │   │   ├── gl2d_line_aligned.png
    │           │   │   ├── gl2d_line_dash.png
    │           │   │   ├── gl2d_line_limit.png
    │           │   │   ├── gl2d_line_select.png
    │           │   │   ├── gl2d_lines_almost_horizontal_vertical.png
    │           │   │   ├── gl2d_marker_line_width.png
    │           │   │   ├── gl2d_marker_size.png
    │           │   │   ├── gl2d_marker_symbols.png
    │           │   │   ├── gl2d_multiple-traces-axes-labels.png
    │           │   │   ├── gl2d_multiple-traces-axes.png
    │           │   │   ├── gl2d_multiple_subplots.png
    │           │   │   ├── gl2d_no-clustering.png
    │           │   │   ├── gl2d_no-clustering2.png
    │           │   │   ├── gl2d_open_marker_line_width.png
    │           │   │   ├── gl2d_order_error.png
    │           │   │   ├── gl2d_parcoords.png
    │           │   │   ├── gl2d_parcoords_1.png
    │           │   │   ├── gl2d_parcoords_2.png
    │           │   │   ├── gl2d_parcoords_blocks.png
    │           │   │   ├── gl2d_parcoords_constraints.png
    │           │   │   ├── gl2d_parcoords_large.png
    │           │   │   ├── gl2d_point-selection.png
    │           │   │   ├── gl2d_pointcloud-basic.png
    │           │   │   ├── gl2d_scatter-color-clustering.png
    │           │   │   ├── gl2d_scatter-colorscale-colorbar.png
    │           │   │   ├── gl2d_scatter-colorscale-points.png
    │           │   │   ├── gl2d_scatter-continuous-clustering.png
    │           │   │   ├── gl2d_scatter-marker-line-colorscales.png
    │           │   │   ├── gl2d_scatter-subplot-panel.png
    │           │   │   ├── gl2d_scatter2d-multiple-colors.png
    │           │   │   ├── gl2d_scatter_fill_self_next.png
    │           │   │   ├── gl2d_scatter_fill_self_next_vs_nogl.png
    │           │   │   ├── gl2d_scattergl_errorbars_inherit_color.png
    │           │   │   ├── gl2d_scattergl_simple_line_reversed_ranges.png
    │           │   │   ├── gl2d_selectedpoints.png
    │           │   │   ├── gl2d_shape_line.png
    │           │   │   ├── gl2d_shapes_below_traces.png
    │           │   │   ├── gl2d_simple_inset.png
    │           │   │   ├── gl2d_size_margins.png
    │           │   │   ├── gl2d_stacked_coupled_subplots.png
    │           │   │   ├── gl2d_stacked_subplots.png
    │           │   │   ├── gl2d_subplots_anchor.png
    │           │   │   ├── gl2d_text_chart_arrays.png
    │           │   │   ├── gl2d_text_chart_basic.png
    │           │   │   ├── gl2d_text_chart_invalid-arrays.png
    │           │   │   ├── gl2d_text_chart_single-string.png
    │           │   │   ├── gl2d_text_chart_styling.png
    │           │   │   ├── gl2d_tick-labels.png
    │           │   │   ├── gl2d_transforms.png
    │           │   │   ├── gl2d_ultra_zoom.png
    │           │   │   ├── gl3d_annotations.png
    │           │   │   ├── gl3d_annotations_orthographic.png
    │           │   │   ├── gl3d_autocolorscale.png
    │           │   │   ├── gl3d_autorange-zero.png
    │           │   │   ├── gl3d_axes-visible-false.png
    │           │   │   ├── gl3d_bunny-hull.png
    │           │   │   ├── gl3d_bunny.png
    │           │   │   ├── gl3d_chrisp-nan-1.png
    │           │   │   ├── gl3d_colormap256.png
    │           │   │   ├── gl3d_cone-absolute.png
    │           │   │   ├── gl3d_cone-autorange.png
    │           │   │   ├── gl3d_cone-lighting.png
    │           │   │   ├── gl3d_cone-newplot_reversed_ranges.png
    │           │   │   ├── gl3d_cone-rossler.png
    │           │   │   ├── gl3d_cone-simple.png
    │           │   │   ├── gl3d_cone-single.png
    │           │   │   ├── gl3d_cone-wind.png
    │           │   │   ├── gl3d_cone-with-streamtube.png
    │           │   │   ├── gl3d_contour-lines.png
    │           │   │   ├── gl3d_contour-lines2.png
    │           │   │   ├── gl3d_convex-hull.png
    │           │   │   ├── gl3d_cube.png
    │           │   │   ├── gl3d_cufflinks.png
    │           │   │   ├── gl3d_delaunay.png
    │           │   │   ├── gl3d_error_bars_log.png
    │           │   │   ├── gl3d_error_bars_log_2.png
    │           │   │   ├── gl3d_errorbars_sqrt.png
    │           │   │   ├── gl3d_errorbars_xy.png
    │           │   │   ├── gl3d_errorbars_zx.png
    │           │   │   ├── gl3d_errorbars_zy.png
    │           │   │   ├── gl3d_formatted-text-on-multiple-lines.png
    │           │   │   ├── gl3d_ibm-plot.png
    │           │   │   ├── gl3d_isosurface_1single-surface_middle-range.png
    │           │   │   ├── gl3d_isosurface_2surfaces-checker_spaceframe.png
    │           │   │   ├── gl3d_isosurface_5more-surfaces_between-ranges.png
    │           │   │   ├── gl3d_isosurface_9more-surfaces_between-ranges_orthographic.png
    │           │   │   ├── gl3d_isosurface_log-axis_slices_surface-fill.png
    │           │   │   ├── gl3d_isosurface_math.png
    │           │   │   ├── gl3d_isosurface_multiple-traces.png
    │           │   │   ├── gl3d_isosurface_out_of_iso_range_case.png
    │           │   │   ├── gl3d_isosurface_thin_caps_different_dims.png
    │           │   │   ├── gl3d_isosurface_thin_slices_transparent.png
    │           │   │   ├── gl3d_isosurface_transparent.png
    │           │   │   ├── gl3d_isosurface_uneven-scales_ranges_iso-null.png
    │           │   │   ├── gl3d_isosurface_with_surface-pattern.png
    │           │   │   ├── gl3d_isosurface_xycaps_volume_slices.png
    │           │   │   ├── gl3d_line-colorscale-with-markers.png
    │           │   │   ├── gl3d_line_rectangle_render.png
    │           │   │   ├── gl3d_log-axis-big.png
    │           │   │   ├── gl3d_log-axis.png
    │           │   │   ├── gl3d_marker-arrays.png
    │           │   │   ├── gl3d_marker-color.png
    │           │   │   ├── gl3d_marker_symbols.png
    │           │   │   ├── gl3d_mesh3d_enable-alpha-with-rgba-color.png
    │           │   │   ├── gl3d_mesh3d_surface3d_scatter3d_line3d_error3d_log_reversed_ranges.png
    │           │   │   ├── gl3d_mesh3d_surface3d_scatter3d_orthographic.png
    │           │   │   ├── gl3d_mesh3d_surface_lighting.png
    │           │   │   ├── gl3d_mirror-ticks.png
    │           │   │   ├── gl3d_multi-scene.png
    │           │   │   ├── gl3d_multiple-scatter3d-traces.png
    │           │   │   ├── gl3d_nan-holes.png
    │           │   │   ├── gl3d_opacity-scaling-spikes.png
    │           │   │   ├── gl3d_opacity-surface.png
    │           │   │   ├── gl3d_parametric_surface_data_precision.png
    │           │   │   ├── gl3d_perspective_tick_distances.png
    │           │   │   ├── gl3d_projection-traces.png
    │           │   │   ├── gl3d_reversescale.png
    │           │   │   ├── gl3d_ribbons.png
    │           │   │   ├── gl3d_scatter-color-array.png
    │           │   │   ├── gl3d_scatter-color-line-gradient.png
    │           │   │   ├── gl3d_scatter-color-mono-and-palette.png
    │           │   │   ├── gl3d_scatter-colorscale-marker.png
    │           │   │   ├── gl3d_scatter3d-align-texts.png
    │           │   │   ├── gl3d_scatter3d-blank-text.png
    │           │   │   ├── gl3d_scatter3d-colorscale-with-line.png
    │           │   │   ├── gl3d_scatter3d-colorscale.png
    │           │   │   ├── gl3d_scatter3d-connectgaps.png
    │           │   │   ├── gl3d_scatter3d-different-align-texts.png
    │           │   │   ├── gl3d_scatter3d_errorbars_inherit_color.png
    │           │   │   ├── gl3d_scatter3d_line3d_error3d_enable-alpha-with-rgba-color.png
    │           │   │   ├── gl3d_scatter3d_line3d_error3d_transparent-with-zero-alpha.png
    │           │   │   ├── gl3d_set-ranges.png
    │           │   │   ├── gl3d_snowden.png
    │           │   │   ├── gl3d_snowden_altered.png
    │           │   │   ├── gl3d_streamtube-first.png
    │           │   │   ├── gl3d_streamtube-simple.png
    │           │   │   ├── gl3d_streamtube-thin.png
    │           │   │   ├── gl3d_streamtube-wind.png
    │           │   │   ├── gl3d_streamtube_reversed_ranges.png
    │           │   │   ├── gl3d_surface-circular-colorscale.png
    │           │   │   ├── gl3d_surface-lighting.png
    │           │   │   ├── gl3d_surface_after_heatmap.png
    │           │   │   ├── gl3d_surface_connectgaps.png
    │           │   │   ├── gl3d_surface_contour_precision.png
    │           │   │   ├── gl3d_surface_contour_start-end-size.png
    │           │   │   ├── gl3d_surface_intensity.png
    │           │   │   ├── gl3d_tetrahedra.png
    │           │   │   ├── gl3d_text-weirdness.png
    │           │   │   ├── gl3d_triangle.png
    │           │   │   ├── gl3d_volume_airflow.png
    │           │   │   ├── gl3d_volume_multiple-traces.png
    │           │   │   ├── gl3d_volume_multiple-traces_one-cube.png
    │           │   │   ├── gl3d_volume_opacityscale-iso.png
    │           │   │   ├── gl3d_wire-surface.png
    │           │   │   ├── gl3d_world-cals.png
    │           │   │   ├── gl3d_xy-defined-ticks.png
    │           │   │   ├── gl3d_z-range.png
    │           │   │   ├── global_font.png
    │           │   │   ├── glpolar_scatter.png
    │           │   │   ├── glpolar_style.png
    │           │   │   ├── glpolar_subplots.png
    │           │   │   ├── greens_heatmap.png
    │           │   │   ├── greys_heatmap.png
    │           │   │   ├── grid_subplot_types.png
    │           │   │   ├── grouped_bar.png
    │           │   │   ├── groups-over-matching-axes.png
    │           │   │   ├── heatmap-reverse-autocolorscale.png
    │           │   │   ├── heatmap-with-zero-category.png
    │           │   │   ├── heatmap_autocolor_negative.png
    │           │   │   ├── heatmap_autocolor_positive.png
    │           │   │   ├── heatmap_brick_padding.png
    │           │   │   ├── heatmap_contour_irregular_bricks.png
    │           │   │   ├── heatmap_multi-trace.png
    │           │   │   ├── heatmap_multicategory.png
    │           │   │   ├── heatmap_small_aspect-ratio.png
    │           │   │   ├── heatmap_xyz-dates-and-categories.png
    │           │   │   ├── heatmap_xyz-gaps-on-sides.png
    │           │   │   ├── hist2d_summed.png
    │           │   │   ├── hist_003_to_093.png
    │           │   │   ├── hist_003_to_1.png
    │           │   │   ├── hist_0_to_093.png
    │           │   │   ├── hist_0_to_1_midpoints.png
    │           │   │   ├── hist_all_integer.png
    │           │   │   ├── hist_all_integer_n50.png
    │           │   │   ├── hist_almost_integer.png
    │           │   │   ├── hist_category.png
    │           │   │   ├── hist_cum_stacked.png
    │           │   │   ├── hist_grouped.png
    │           │   │   ├── hist_multi.png
    │           │   │   ├── hist_stacked.png
    │           │   │   ├── hist_summed.png
    │           │   │   ├── hist_valid_ses.png
    │           │   │   ├── hist_valid_ses_y.png
    │           │   │   ├── histogram-offsetgroups.png
    │           │   │   ├── histogram_barmode_relative.png
    │           │   │   ├── histogram_colorscale.png
    │           │   │   ├── histogram_errorbars_inherit_color.png
    │           │   │   ├── hists-on-matching-axes.png
    │           │   │   ├── hot_heatmap.png
    │           │   │   ├── japanese.png
    │           │   │   ├── jet_heatmap.png
    │           │   │   ├── labelled_heatmap.png
    │           │   │   ├── layout-colorway.png
    │           │   │   ├── layout_image.png
    │           │   │   ├── layout_metatext.png
    │           │   │   ├── legend-constant-itemsizing.png
    │           │   │   ├── legend_horizontal.png
    │           │   │   ├── legend_horizontal_autowrap.png
    │           │   │   ├── legend_horizontal_groups.png
    │           │   │   ├── legend_horizontal_one_row.png
    │           │   │   ├── legend_horizontal_wrap-alll-lines.png
    │           │   │   ├── legend_inside.png
    │           │   │   ├── legend_labels.png
    │           │   │   ├── legend_large_margin.png
    │           │   │   ├── legend_negative_y.png
    │           │   │   ├── legend_outside.png
    │           │   │   ├── legend_scroll.png
    │           │   │   ├── legend_style.png
    │           │   │   ├── legend_valign_middle.png
    │           │   │   ├── legend_valign_top.png
    │           │   │   ├── legend_visibility.png
    │           │   │   ├── legendgroup.png
    │           │   │   ├── legendgroup_bar-stack.png
    │           │   │   ├── legendgroup_horizontal_wrapping.png
    │           │   │   ├── line_grid_color.png
    │           │   │   ├── line_grid_width.png
    │           │   │   ├── line_scatter.png
    │           │   │   ├── line_style.png
    │           │   │   ├── log_lines_fills.png
    │           │   │   ├── long_axis_labels.png
    │           │   │   ├── mapbox_0.png
    │           │   │   ├── mapbox_angles.png
    │           │   │   ├── mapbox_bubbles-text.png
    │           │   │   ├── mapbox_bubbles.png
    │           │   │   ├── mapbox_connectgaps.png
    │           │   │   ├── mapbox_custom-style.png
    │           │   │   ├── mapbox_fill.png
    │           │   │   ├── mapbox_geojson-attributes.png
    │           │   │   ├── mapbox_layers.png
    │           │   │   ├── mapbox_symbol-text.png
    │           │   │   ├── marker_colorscale_template.png
    │           │   │   ├── marker_line_width.png
    │           │   │   ├── marker_symbols.png
    │           │   │   ├── matching-categories.png
    │           │   │   ├── mathjax.png
    │           │   │   ├── multicategory-inside-ticks.png
    │           │   │   ├── multicategory-mirror.png
    │           │   │   ├── multicategory-sorting.png
    │           │   │   ├── multicategory-y.png
    │           │   │   ├── multicategory.png
    │           │   │   ├── multicategory2.png
    │           │   │   ├── multicategory_histograms.png
    │           │   │   ├── multiple_axes_double.png
    │           │   │   ├── multiple_axes_multiple.png
    │           │   │   ├── multiple_subplots.png
    │           │   │   ├── ohlc_first.png
    │           │   │   ├── overlaying-axis-lines.png
    │           │   │   ├── parcats_bad-displayindex.png
    │           │   │   ├── parcats_basic.png
    │           │   │   ├── parcats_basic_freeform.png
    │           │   │   ├── parcats_bundled.png
    │           │   │   ├── parcats_bundled_reversed.png
    │           │   │   ├── parcats_dark.png
    │           │   │   ├── parcats_grid_subplots.png
    │           │   │   ├── parcats_hoveron_color.png
    │           │   │   ├── parcats_hoveron_dimension.png
    │           │   │   ├── parcats_invisible_dimension.png
    │           │   │   ├── parcats_reordered.png
    │           │   │   ├── parcats_unbundled.png
    │           │   │   ├── percent_error_bar.png
    │           │   │   ├── picnic_heatmap.png
    │           │   │   ├── pie_aggregated.png
    │           │   │   ├── pie_fonts.png
    │           │   │   ├── pie_label0_dlabel.png
    │           │   │   ├── pie_labels_colors_text.png
    │           │   │   ├── pie_scale_textpos_hideslices.png
    │           │   │   ├── pie_simple.png
    │           │   │   ├── pie_sort_direction.png
    │           │   │   ├── pie_style.png
    │           │   │   ├── pie_style_arrays.png
    │           │   │   ├── pie_title_groupscale.png
    │           │   │   ├── pie_title_middle_center.png
    │           │   │   ├── pie_title_middle_center_multiline.png
    │           │   │   ├── pie_title_multiple.png
    │           │   │   ├── pie_title_pull.png
    │           │   │   ├── pie_title_subscript.png
    │           │   │   ├── pie_title_variations.png
    │           │   │   ├── plot_types.png
    │           │   │   ├── point-selection.png
    │           │   │   ├── point-selection2.png
    │           │   │   ├── polar_area_chart.png
    │           │   │   ├── polar_bar-overlay.png
    │           │   │   ├── polar_bar-stacked.png
    │           │   │   ├── polar_bar-width-base-offset.png
    │           │   │   ├── polar_blank.png
    │           │   │   ├── polar_categories.png
    │           │   │   ├── polar_dates.png
    │           │   │   ├── polar_direction.png
    │           │   │   ├── polar_fills.png
    │           │   │   ├── polar_funky-bars.png
    │           │   │   ├── polar_hole.png
    │           │   │   ├── polar_line.png
    │           │   │   ├── polar_long-category-angular-labels.png
    │           │   │   ├── polar_polygon-bars.png
    │           │   │   ├── polar_polygon-grids.png
    │           │   │   ├── polar_r0dr-theta0dtheta.png
    │           │   │   ├── polar_radial-range.png
    │           │   │   ├── polar_scatter.png
    │           │   │   ├── polar_sector.png
    │           │   │   ├── polar_subplots.png
    │           │   │   ├── polar_template.png
    │           │   │   ├── polar_ticks.png
    │           │   │   ├── polar_transforms.png
    │           │   │   ├── polar_wind-rose.png
    │           │   │   ├── portland_heatmap.png
    │           │   │   ├── pseudo_html.png
    │           │   │   ├── range_selector.png
    │           │   │   ├── range_selector_style.png
    │           │   │   ├── range_slider.png
    │           │   │   ├── range_slider_axes_double.png
    │           │   │   ├── range_slider_axes_stacked.png
    │           │   │   ├── range_slider_box.png
    │           │   │   ├── range_slider_initial_expanded.png
    │           │   │   ├── range_slider_initial_valid.png
    │           │   │   ├── range_slider_multiple.png
    │           │   │   ├── range_slider_rangemode.png
    │           │   │   ├── range_slider_reversed-range.png
    │           │   │   ├── range_slider_top_axis.png
    │           │   │   ├── rdbu_heatmap.png
    │           │   │   ├── sankey_circular.png
    │           │   │   ├── sankey_circular_large.png
    │           │   │   ├── sankey_circular_process.png
    │           │   │   ├── sankey_circular_simple.png
    │           │   │   ├── sankey_energy.png
    │           │   │   ├── sankey_energy_dark.png
    │           │   │   ├── sankey_groups.png
    │           │   │   ├── sankey_large_padding.png
    │           │   │   ├── sankey_link_concentration.png
    │           │   │   ├── sankey_messy.png
    │           │   │   ├── sankey_subplots.png
    │           │   │   ├── sankey_subplots_circular.png
    │           │   │   ├── sankey_x_y.png
    │           │   │   ├── scatter-colorscale-colorbar.png
    │           │   │   ├── scatter-marker-line-colorscales.png
    │           │   │   ├── scatter_errorbars_inherit_color.png
    │           │   │   ├── scatter_fill_corner_cases.png
    │           │   │   ├── scatter_fill_no_opacity.png
    │           │   │   ├── scatter_fill_self_next.png
    │           │   │   ├── scatter_fill_self_opacity.png
    │           │   │   ├── scattercarpet-on-two-carpets.png
    │           │   │   ├── scattercarpet-text.png
    │           │   │   ├── scattercarpet.png
    │           │   │   ├── shapes.png
    │           │   │   ├── shapes_below_traces.png
    │           │   │   ├── shapes_fixed_size.png
    │           │   │   ├── shapes_move-and-reshape-lines.png
    │           │   │   ├── shared_axes_subplots.png
    │           │   │   ├── show_legend.png
    │           │   │   ├── simple-3d.png
    │           │   │   ├── simple_annotation.png
    │           │   │   ├── simple_contour.png
    │           │   │   ├── simple_inset.png
    │           │   │   ├── simple_subplot.png
    │           │   │   ├── size_margins.png
    │           │   │   ├── sliders.png
    │           │   │   ├── splom_0.png
    │           │   │   ├── splom_array-styles.png
    │           │   │   ├── splom_dates.png
    │           │   │   ├── splom_iris-matching.png
    │           │   │   ├── splom_iris.png
    │           │   │   ├── splom_large.png
    │           │   │   ├── splom_log.png
    │           │   │   ├── splom_lower-nodiag-matching.png
    │           │   │   ├── splom_lower-nodiag.png
    │           │   │   ├── splom_lower.png
    │           │   │   ├── splom_mismatched-axis-types.png
    │           │   │   ├── splom_multi-axis-type.png
    │           │   │   ├── splom_nodiag.png
    │           │   │   ├── splom_ragged-via-axes.png
    │           │   │   ├── splom_ragged-via-visible-false.png
    │           │   │   ├── splom_upper-nodiag.png
    │           │   │   ├── splom_upper.png
    │           │   │   ├── splom_with-cartesian.png
    │           │   │   ├── stacked_area.png
    │           │   │   ├── stacked_area_duplicates.png
    │           │   │   ├── stacked_area_groupby.png
    │           │   │   ├── stacked_area_groups.png
    │           │   │   ├── stacked_area_horz.png
    │           │   │   ├── stacked_area_log.png
    │           │   │   ├── stacked_bar.png
    │           │   │   ├── stacked_coupled_subplots.png
    │           │   │   ├── stacked_subplots.png
    │           │   │   ├── stacked_subplots_shared_yaxis.png
    │           │   │   ├── style_bar.png
    │           │   │   ├── styling_names.png
    │           │   │   ├── sunburst_coffee-maxdepth3.png
    │           │   │   ├── sunburst_coffee.png
    │           │   │   ├── sunburst_first.png
    │           │   │   ├── sunburst_flare.png
    │           │   │   ├── sunburst_level-depth.png
    │           │   │   ├── sunburst_values.png
    │           │   │   ├── table_latex_multitrace_scatter.png
    │           │   │   ├── table_plain_birds.png
    │           │   │   ├── table_ragged.png
    │           │   │   ├── table_wrapped_birds.png
    │           │   │   ├── template.png
    │           │   │   ├── ternary-mathjax.png
    │           │   │   ├── ternary_array_styles.png
    │           │   │   ├── ternary_axis_layers.png
    │           │   │   ├── ternary_fill.png
    │           │   │   ├── ternary_lines.png
    │           │   │   ├── ternary_markers.png
    │           │   │   ├── ternary_multiple.png
    │           │   │   ├── ternary_noticks.png
    │           │   │   ├── ternary_simple.png
    │           │   │   ├── text_chart_arrays.png
    │           │   │   ├── text_chart_basic.png
    │           │   │   ├── text_chart_invalid-arrays.png
    │           │   │   ├── text_chart_single-string.png
    │           │   │   ├── text_chart_styling.png
    │           │   │   ├── text_export.png
    │           │   │   ├── tick-datafn.png
    │           │   │   ├── tick_attributes.png
    │           │   │   ├── tick_prefix_suffix.png
    │           │   │   ├── tick_prefix_suffix_exponent.png
    │           │   │   ├── tickformat.png
    │           │   │   ├── tickformatstops.png
    │           │   │   ├── tickson_boundaries.png
    │           │   │   ├── titles-avoid-labels.png
    │           │   │   ├── transforms.png
    │           │   │   ├── ultra_zoom.png
    │           │   │   ├── ultra_zoom_fill.png
    │           │   │   ├── updatemenus.png
    │           │   │   ├── updatemenus_positioning.png
    │           │   │   ├── violin-offsetgroups.png
    │           │   │   ├── violin_bandwidth-edge-cases.png
    │           │   │   ├── violin_box_multiple_widths.png
    │           │   │   ├── violin_box_overlay.png
    │           │   │   ├── violin_grouped.png
    │           │   │   ├── violin_grouped_horz-multicategory.png
    │           │   │   ├── violin_negative_sides_w_points.png
    │           │   │   ├── violin_non-linear.png
    │           │   │   ├── violin_old-faithful.png
    │           │   │   ├── violin_only_zeroes.png
    │           │   │   ├── violin_positive_and_negative.png
    │           │   │   ├── violin_positive_sides_w_points.png
    │           │   │   ├── violin_side-by-side.png
    │           │   │   ├── violin_style.png
    │           │   │   ├── viridis_heatmap.png
    │           │   │   ├── waterfall-grouping-vs-defaults.png
    │           │   │   ├── waterfall-offsetgroups.png
    │           │   │   ├── waterfall_11.png
    │           │   │   ├── waterfall_and_bar.png
    │           │   │   ├── waterfall_and_histogram.png
    │           │   │   ├── waterfall_attrs.png
    │           │   │   ├── waterfall_cliponaxis-false.png
    │           │   │   ├── waterfall_custom.png
    │           │   │   ├── waterfall_gap0.png
    │           │   │   ├── waterfall_line.png
    │           │   │   ├── waterfall_months.png
    │           │   │   ├── waterfall_multicategory.png
    │           │   │   ├── waterfall_nonnumeric_sizes.png
    │           │   │   ├── waterfall_profit-loss_2018_positive-negative.png
    │           │   │   ├── waterfall_profit-loss_2018vs2019_overlay.png
    │           │   │   ├── waterfall_profit-loss_2018vs2019_rectangle.png
    │           │   │   ├── world-cals.png
    │           │   │   ├── yaxis-over-yaxis2.png
    │           │   │   ├── yignbu_heatmap.png
    │           │   │   ├── yiorrd_heatmap.png
    │           │   │   └── zsmooth_methods.png
    │           │   ├── compare_pixels_test.js
    │           │   ├── export_test.js
    │           │   ├── index.html
    │           │   ├── make_baseline.js
    │           │   ├── mocks
    │           │   │   ├── 0.json
    │           │   │   ├── 1.json
    │           │   │   ├── 10.json
    │           │   │   ├── 11.json
    │           │   │   ├── 12.json
    │           │   │   ├── 13.json
    │           │   │   ├── 14.json
    │           │   │   ├── 15.json
    │           │   │   ├── 16.json
    │           │   │   ├── 17.json
    │           │   │   ├── 18.json
    │           │   │   ├── 19.json
    │           │   │   ├── 20.json
    │           │   │   ├── 21.json
    │           │   │   ├── 22.json
    │           │   │   ├── 23.json
    │           │   │   ├── 24.json
    │           │   │   ├── 25.json
    │           │   │   ├── 26.json
    │           │   │   ├── 27.json
    │           │   │   ├── 28.json
    │           │   │   ├── 29.json
    │           │   │   ├── 2dhistogram_contour_subplots.json
    │           │   │   ├── 30.json
    │           │   │   ├── 31.json
    │           │   │   ├── 32.json
    │           │   │   ├── 4.json
    │           │   │   ├── 5.json
    │           │   │   ├── 6.json
    │           │   │   ├── 7.json
    │           │   │   ├── 8.json
    │           │   │   ├── airfoil.json
    │           │   │   ├── animation.json
    │           │   │   ├── annotations-autorange.json
    │           │   │   ├── annotations.json
    │           │   │   ├── automargin-push-x-extra.json
    │           │   │   ├── automargin-push-y-extra.json
    │           │   │   ├── automargin-superimposed-axes.json
    │           │   │   ├── autorange-tozero-rangemode.json
    │           │   │   ├── axes-autotype-empty.json
    │           │   │   ├── axes-ticks.json
    │           │   │   ├── axes_booleans.json
    │           │   │   ├── axes_category_ascending.json
    │           │   │   ├── axes_category_categoryarray.json
    │           │   │   ├── axes_category_categoryarray_truncated_tails.json
    │           │   │   ├── axes_category_descending.json
    │           │   │   ├── axes_category_descending_with_gaps.json
    │           │   │   ├── axes_category_null.json
    │           │   │   ├── axes_enumerated_ticks.json
    │           │   │   ├── axes_free_default.json
    │           │   │   ├── axes_labels.json
    │           │   │   ├── axes_line_noticklabels.json
    │           │   │   ├── axes_lines.json
    │           │   │   ├── axes_linked_date_autorange.json
    │           │   │   ├── axes_matches-linear-categories.json
    │           │   │   ├── axes_range_manual.json
    │           │   │   ├── axes_range_mode.json
    │           │   │   ├── axes_range_type.json
    │           │   │   ├── axes_reversed.json
    │           │   │   ├── axes_scaleanchor-constrain-domain-fixedrange.json
    │           │   │   ├── axes_scaleanchor-with-matches.json
    │           │   │   ├── axes_scaleanchor.json
    │           │   │   ├── axes_visible-false.json
    │           │   │   ├── axis_automargin_zero_margins.json
    │           │   │   ├── axislabel_separatethousands.json
    │           │   │   ├── bar-alignment-offset.json
    │           │   │   ├── bar-autotext-log-size-axes.json
    │           │   │   ├── bar-colorscale-colorbar.json
    │           │   │   ├── bar-grouping-vs-defaults.json
    │           │   │   ├── bar-insidetext-log-size-axis.json
    │           │   │   ├── bar-marker-line-colorscales.json
    │           │   │   ├── bar-offsetgroups.json
    │           │   │   ├── bar_and_histogram.json
    │           │   │   ├── bar_attrs_group.json
    │           │   │   ├── bar_attrs_group_norm.json
    │           │   │   ├── bar_attrs_overlay.json
    │           │   │   ├── bar_attrs_relative.json
    │           │   │   ├── bar_autorange-above-zero-normalized.json
    │           │   │   ├── bar_autorange-above-zero.json
    │           │   │   ├── bar_bargap0.json
    │           │   │   ├── bar_cliponaxis-false.json
    │           │   │   ├── bar_errorbars_inherit_color.json
    │           │   │   ├── bar_group_percent.json
    │           │   │   ├── bar_line.json
    │           │   │   ├── bar_marker_array.json
    │           │   │   ├── bar_multiline_labels.json
    │           │   │   ├── bar_nonnumeric_sizes.json
    │           │   │   ├── bar_stack-with-gaps.json
    │           │   │   ├── bar_stackrelative_negative.json
    │           │   │   ├── bar_stackrelativeto100_negative.json
    │           │   │   ├── bar_stackto1.json
    │           │   │   ├── bar_stackto100_negative.json
    │           │   │   ├── bar_unhidden.json
    │           │   │   ├── basic_area.json
    │           │   │   ├── basic_bar.json
    │           │   │   ├── basic_error_bar.json
    │           │   │   ├── basic_heatmap.json
    │           │   │   ├── basic_line.json
    │           │   │   ├── benchmarks.json
    │           │   │   ├── binding.json
    │           │   │   ├── blackbody_heatmap.json
    │           │   │   ├── blank-bar-outsidetext.json
    │           │   │   ├── bluered_heatmap.json
    │           │   │   ├── box-alignment-offset.json
    │           │   │   ├── box-violin-multicategory-on-val-axis.json
    │           │   │   ├── box-violin-x0-category-position.json
    │           │   │   ├── box_grouped-multicategory.json
    │           │   │   ├── box_grouped.json
    │           │   │   ├── box_grouped_horz.json
    │           │   │   ├── box_horz_notched.json
    │           │   │   ├── box_notched.json
    │           │   │   ├── box_plot_jitter.json
    │           │   │   ├── box_plot_jitter_edge_cases.json
    │           │   │   ├── box_single-group.json
    │           │   │   ├── box_with-empty-1st-trace.json
    │           │   │   ├── boxplots_outliercolordflt.json
    │           │   │   ├── boxplots_undefined_vals.json
    │           │   │   ├── bubble_markersize0.json
    │           │   │   ├── bubble_nonnumeric-sizes.json
    │           │   │   ├── bubblechart.json
    │           │   │   ├── candlestick_double-y-axis.json
    │           │   │   ├── candlestick_rangeslider_thai.json
    │           │   │   ├── carpet_axis.json
    │           │   │   ├── carpet_template.json
    │           │   │   ├── category-autorange.json
    │           │   │   ├── category_dtick_3.json
    │           │   │   ├── cheater.json
    │           │   │   ├── cheater_constraint_greater_than.json
    │           │   │   ├── cheater_constraint_greater_than_with_hill.json
    │           │   │   ├── cheater_constraint_greater_than_with_valley.json
    │           │   │   ├── cheater_constraint_inner_range.json
    │           │   │   ├── cheater_constraint_inner_range_hi_top.json
    │           │   │   ├── cheater_constraint_inner_range_hi_top_with_hill.json
    │           │   │   ├── cheater_constraint_inner_range_hi_top_with_valley.json
    │           │   │   ├── cheater_constraint_inner_range_lo_top.json
    │           │   │   ├── cheater_constraint_inner_range_lo_top_with_hill.json
    │           │   │   ├── cheater_constraint_inner_range_lo_top_with_valley.json
    │           │   │   ├── cheater_constraint_inner_range_with_hill.json
    │           │   │   ├── cheater_constraint_inner_range_with_valley.json
    │           │   │   ├── cheater_constraint_less_than.json
    │           │   │   ├── cheater_constraint_less_than_with_hill.json
    │           │   │   ├── cheater_constraint_less_than_with_valley.json
    │           │   │   ├── cheater_constraint_outer_range.json
    │           │   │   ├── cheater_constraint_outer_range_hi_top.json
    │           │   │   ├── cheater_constraint_outer_range_hi_top_with_hill.json
    │           │   │   ├── cheater_constraint_outer_range_hi_top_with_valley.json
    │           │   │   ├── cheater_constraint_outer_range_lo_top.json
    │           │   │   ├── cheater_constraint_outer_range_lo_top_with_hill.json
    │           │   │   ├── cheater_constraint_outer_range_lo_top_with_valley.json
    │           │   │   ├── cheater_constraint_outer_range_with_hill.json
    │           │   │   ├── cheater_constraint_outer_range_with_valley.json
    │           │   │   ├── cheater_constraints.json
    │           │   │   ├── cheater_contour.json
    │           │   │   ├── cheater_fully_filled.json
    │           │   │   ├── cheater_smooth.json
    │           │   │   ├── cheaterslope.json
    │           │   │   ├── cheaterslope_noticklabels.json
    │           │   │   ├── cividis_heatmap.json
    │           │   │   ├── cliponaxis_false-dates-log.json
    │           │   │   ├── cliponaxis_false.json
    │           │   │   ├── cmid-zmid.json
    │           │   │   ├── colorbar_enumerated_ticks.json
    │           │   │   ├── colorbar_tick_prefix_suffix.json
    │           │   │   ├── colorbar_tickformat.json
    │           │   │   ├── colorscale_constraint.json
    │           │   │   ├── colorscale_opacity.json
    │           │   │   ├── colorscale_template.json
    │           │   │   ├── connectgaps_2d.json
    │           │   │   ├── contour_constraints.json
    │           │   │   ├── contour_doublemerge.json
    │           │   │   ├── contour_edge_cases.json
    │           │   │   ├── contour_heatmap_coloring.json
    │           │   │   ├── contour_label-reversed-axes.json
    │           │   │   ├── contour_label-thousands-suffix.json
    │           │   │   ├── contour_legend.json
    │           │   │   ├── contour_lines_coloring.json
    │           │   │   ├── contour_log.json
    │           │   │   ├── contour_match_edges.json
    │           │   │   ├── contour_nolines.json
    │           │   │   ├── contour_scatter.json
    │           │   │   ├── contour_transposed-irregular.json
    │           │   │   ├── contour_transposed.json
    │           │   │   ├── contour_valid_ses.json
    │           │   │   ├── contour_xyz-gaps-on-sides.json
    │           │   │   ├── custom_colorscale.json
    │           │   │   ├── custom_size_subplot.json
    │           │   │   ├── date_axes.json
    │           │   │   ├── date_histogram.json
    │           │   │   ├── dendrogram.json
    │           │   │   ├── earth_heatmap.json
    │           │   │   ├── electric_heatmap.json
    │           │   │   ├── empty.json
    │           │   │   ├── error_bar_asymmetric_array.json
    │           │   │   ├── error_bar_asymmetric_constant.json
    │           │   │   ├── error_bar_bar.json
    │           │   │   ├── error_bar_bar_ids.json
    │           │   │   ├── error_bar_horizontal.json
    │           │   │   ├── error_bar_layers.json
    │           │   │   ├── error_bar_sqrt.json
    │           │   │   ├── error_bar_style.json
    │           │   │   ├── fake_violins.json
    │           │   │   ├── finance_multicategory.json
    │           │   │   ├── finance_style.json
    │           │   │   ├── finance_subplots_categories.json
    │           │   │   ├── font-wishlist.json
    │           │   │   ├── fonts.json
    │           │   │   ├── geo_across-antimeridian.json
    │           │   │   ├── geo_africa-insets.json
    │           │   │   ├── geo_aitoff-sinusoidal.json
    │           │   │   ├── geo_bg-color.json
    │           │   │   ├── geo_big-frame.json
    │           │   │   ├── geo_bubbles-colorscales.json
    │           │   │   ├── geo_bubbles-sizeref.json
    │           │   │   ├── geo_canadian-cites.json
    │           │   │   ├── geo_centering.json
    │           │   │   ├── geo_choropleth-text.json
    │           │   │   ├── geo_choropleth-usa.json
    │           │   │   ├── geo_conic-conformal.json
    │           │   │   ├── geo_connectgaps.json
    │           │   │   ├── geo_country-names-text-chart.json
    │           │   │   ├── geo_country-names.json
    │           │   │   ├── geo_custom-colorscale.json
    │           │   │   ├── geo_europe-bubbles.json
    │           │   │   ├── geo_fill.json
    │           │   │   ├── geo_first.json
    │           │   │   ├── geo_kavrayskiy7.json
    │           │   │   ├── geo_legendonly.json
    │           │   │   ├── geo_miterlimit-base-layers.json
    │           │   │   ├── geo_multi-geos.json
    │           │   │   ├── geo_multiple-usa-choropleths.json
    │           │   │   ├── geo_orthographic.json
    │           │   │   ├── geo_point-selection.json
    │           │   │   ├── geo_scattergeo-locations.json
    │           │   │   ├── geo_scattergeo-out-of-usa.json
    │           │   │   ├── geo_second.json
    │           │   │   ├── geo_stereographic.json
    │           │   │   ├── geo_text_chart_arrays.json
    │           │   │   ├── geo_tick0.json
    │           │   │   ├── geo_usa-states.json
    │           │   │   ├── geo_winkel-tripel.json
    │           │   │   ├── gl2d_10.json
    │           │   │   ├── gl2d_12.json
    │           │   │   ├── gl2d_14.json
    │           │   │   ├── gl2d_17.json
    │           │   │   ├── gl2d_annotations.json
    │           │   │   ├── gl2d_axes_booleans.json
    │           │   │   ├── gl2d_axes_labels.json
    │           │   │   ├── gl2d_axes_labels2.json
    │           │   │   ├── gl2d_axes_lines.json
    │           │   │   ├── gl2d_axes_range_manual.json
    │           │   │   ├── gl2d_axes_range_mode.json
    │           │   │   ├── gl2d_axes_range_type.json
    │           │   │   ├── gl2d_clean-number.json
    │           │   │   ├── gl2d_connect_gaps.json
    │           │   │   ├── gl2d_date_axes.json
    │           │   │   ├── gl2d_error_bars.json
    │           │   │   ├── gl2d_error_bars_log.json
    │           │   │   ├── gl2d_fill-ordering.json
    │           │   │   ├── gl2d_fill_trace_tozero_order.json
    │           │   │   ├── gl2d_fonts.json
    │           │   │   ├── gl2d_heatmapgl.json
    │           │   │   ├── gl2d_horiz-lines.json
    │           │   │   ├── gl2d_layout_image.json
    │           │   │   ├── gl2d_line_aligned.json
    │           │   │   ├── gl2d_line_dash.json
    │           │   │   ├── gl2d_line_limit.json
    │           │   │   ├── gl2d_line_select.json
    │           │   │   ├── gl2d_lines_almost_horizontal_vertical.json
    │           │   │   ├── gl2d_marker_line_width.json
    │           │   │   ├── gl2d_marker_size.json
    │           │   │   ├── gl2d_marker_symbols.json
    │           │   │   ├── gl2d_multiple-traces-axes-labels.json
    │           │   │   ├── gl2d_multiple-traces-axes.json
    │           │   │   ├── gl2d_multiple_subplots.json
    │           │   │   ├── gl2d_no-clustering.json
    │           │   │   ├── gl2d_no-clustering2.json
    │           │   │   ├── gl2d_open_marker_line_width.json
    │           │   │   ├── gl2d_order_error.json
    │           │   │   ├── gl2d_parcoords.json
    │           │   │   ├── gl2d_parcoords_1.json
    │           │   │   ├── gl2d_parcoords_2.json
    │           │   │   ├── gl2d_parcoords_blocks.json
    │           │   │   ├── gl2d_parcoords_constraints.json
    │           │   │   ├── gl2d_parcoords_large.json
    │           │   │   ├── gl2d_point-selection.json
    │           │   │   ├── gl2d_pointcloud-basic.json
    │           │   │   ├── gl2d_scatter-color-clustering.json
    │           │   │   ├── gl2d_scatter-colorscale-colorbar.json
    │           │   │   ├── gl2d_scatter-colorscale-points.json
    │           │   │   ├── gl2d_scatter-continuous-clustering.json
    │           │   │   ├── gl2d_scatter-marker-line-colorscales.json
    │           │   │   ├── gl2d_scatter-subplot-panel.json
    │           │   │   ├── gl2d_scatter2d-multiple-colors.json
    │           │   │   ├── gl2d_scatter_fill_self_next.json
    │           │   │   ├── gl2d_scatter_fill_self_next_vs_nogl.json
    │           │   │   ├── gl2d_scattergl_errorbars_inherit_color.json
    │           │   │   ├── gl2d_scattergl_simple_line_reversed_ranges.json
    │           │   │   ├── gl2d_selectedpoints.json
    │           │   │   ├── gl2d_shape_line.json
    │           │   │   ├── gl2d_shapes_below_traces.json
    │           │   │   ├── gl2d_simple_inset.json
    │           │   │   ├── gl2d_size_margins.json
    │           │   │   ├── gl2d_stacked_coupled_subplots.json
    │           │   │   ├── gl2d_stacked_subplots.json
    │           │   │   ├── gl2d_subplots_anchor.json
    │           │   │   ├── gl2d_text_chart_arrays.json
    │           │   │   ├── gl2d_text_chart_basic.json
    │           │   │   ├── gl2d_text_chart_invalid-arrays.json
    │           │   │   ├── gl2d_text_chart_single-string.json
    │           │   │   ├── gl2d_text_chart_styling.json
    │           │   │   ├── gl2d_tick-labels.json
    │           │   │   ├── gl2d_transforms.json
    │           │   │   ├── gl2d_ultra_zoom.json
    │           │   │   ├── gl3d_annotations.json
    │           │   │   ├── gl3d_annotations_orthographic.json
    │           │   │   ├── gl3d_autocolorscale.json
    │           │   │   ├── gl3d_autorange-zero.json
    │           │   │   ├── gl3d_axes-visible-false.json
    │           │   │   ├── gl3d_bunny-hull.json
    │           │   │   ├── gl3d_bunny.json
    │           │   │   ├── gl3d_chrisp-nan-1.json
    │           │   │   ├── gl3d_colormap256.json
    │           │   │   ├── gl3d_cone-absolute.json
    │           │   │   ├── gl3d_cone-autorange.json
    │           │   │   ├── gl3d_cone-lighting.json
    │           │   │   ├── gl3d_cone-newplot_reversed_ranges.json
    │           │   │   ├── gl3d_cone-rossler.json
    │           │   │   ├── gl3d_cone-simple.json
    │           │   │   ├── gl3d_cone-single.json
    │           │   │   ├── gl3d_cone-wind.json
    │           │   │   ├── gl3d_cone-with-streamtube.json
    │           │   │   ├── gl3d_contour-lines.json
    │           │   │   ├── gl3d_contour-lines2.json
    │           │   │   ├── gl3d_convex-hull.json
    │           │   │   ├── gl3d_cube.json
    │           │   │   ├── gl3d_cufflinks.json
    │           │   │   ├── gl3d_delaunay.json
    │           │   │   ├── gl3d_error_bars_log.json
    │           │   │   ├── gl3d_error_bars_log_2.json
    │           │   │   ├── gl3d_errorbars_sqrt.json
    │           │   │   ├── gl3d_errorbars_xy.json
    │           │   │   ├── gl3d_errorbars_zx.json
    │           │   │   ├── gl3d_errorbars_zy.json
    │           │   │   ├── gl3d_formatted-text-on-multiple-lines.json
    │           │   │   ├── gl3d_ibm-plot.json
    │           │   │   ├── gl3d_isosurface_1single-surface_middle-range.json
    │           │   │   ├── gl3d_isosurface_2surfaces-checker_spaceframe.json
    │           │   │   ├── gl3d_isosurface_5more-surfaces_between-ranges.json
    │           │   │   ├── gl3d_isosurface_9more-surfaces_between-ranges_orthographic.json
    │           │   │   ├── gl3d_isosurface_log-axis_slices_surface-fill.json
    │           │   │   ├── gl3d_isosurface_math.json
    │           │   │   ├── gl3d_isosurface_multiple-traces.json
    │           │   │   ├── gl3d_isosurface_out_of_iso_range_case.json
    │           │   │   ├── gl3d_isosurface_thin_caps_different_dims.json
    │           │   │   ├── gl3d_isosurface_thin_slices_transparent.json
    │           │   │   ├── gl3d_isosurface_transparent.json
    │           │   │   ├── gl3d_isosurface_uneven-scales_ranges_iso-null.json
    │           │   │   ├── gl3d_isosurface_with_surface-pattern.json
    │           │   │   ├── gl3d_isosurface_xycaps_volume_slices.json
    │           │   │   ├── gl3d_line-colorscale-with-markers.json
    │           │   │   ├── gl3d_line_rectangle_render.json
    │           │   │   ├── gl3d_log-axis-big.json
    │           │   │   ├── gl3d_log-axis.json
    │           │   │   ├── gl3d_marker-arrays.json
    │           │   │   ├── gl3d_marker-color.json
    │           │   │   ├── gl3d_marker_symbols.json
    │           │   │   ├── gl3d_mesh3d_enable-alpha-with-rgba-color.json
    │           │   │   ├── gl3d_mesh3d_surface3d_scatter3d_line3d_error3d_log_reversed_ranges.json
    │           │   │   ├── gl3d_mesh3d_surface3d_scatter3d_orthographic.json
    │           │   │   ├── gl3d_mesh3d_surface_lighting.json
    │           │   │   ├── gl3d_mirror-ticks.json
    │           │   │   ├── gl3d_multi-scene.json
    │           │   │   ├── gl3d_multiple-scatter3d-traces.json
    │           │   │   ├── gl3d_nan-holes.json
    │           │   │   ├── gl3d_opacity-scaling-spikes.json
    │           │   │   ├── gl3d_opacity-surface.json
    │           │   │   ├── gl3d_parametric_surface_data_precision.json
    │           │   │   ├── gl3d_perspective_tick_distances.json
    │           │   │   ├── gl3d_projection-traces.json
    │           │   │   ├── gl3d_reversescale.json
    │           │   │   ├── gl3d_ribbons.json
    │           │   │   ├── gl3d_scatter-color-array.json
    │           │   │   ├── gl3d_scatter-color-line-gradient.json
    │           │   │   ├── gl3d_scatter-color-mono-and-palette.json
    │           │   │   ├── gl3d_scatter-colorscale-marker.json
    │           │   │   ├── gl3d_scatter3d-align-texts.json
    │           │   │   ├── gl3d_scatter3d-blank-text.json
    │           │   │   ├── gl3d_scatter3d-colorscale-with-line.json
    │           │   │   ├── gl3d_scatter3d-colorscale.json
    │           │   │   ├── gl3d_scatter3d-connectgaps.json
    │           │   │   ├── gl3d_scatter3d-different-align-texts.json
    │           │   │   ├── gl3d_scatter3d_errorbars_inherit_color.json
    │           │   │   ├── gl3d_scatter3d_line3d_error3d_enable-alpha-with-rgba-color.json
    │           │   │   ├── gl3d_scatter3d_line3d_error3d_transparent-with-zero-alpha.json
    │           │   │   ├── gl3d_set-ranges.json
    │           │   │   ├── gl3d_snowden.json
    │           │   │   ├── gl3d_snowden_altered.json
    │           │   │   ├── gl3d_streamtube-first.json
    │           │   │   ├── gl3d_streamtube-simple.json
    │           │   │   ├── gl3d_streamtube-thin.json
    │           │   │   ├── gl3d_streamtube-wind.json
    │           │   │   ├── gl3d_streamtube_reversed_ranges.json
    │           │   │   ├── gl3d_surface-circular-colorscale.json
    │           │   │   ├── gl3d_surface-lighting.json
    │           │   │   ├── gl3d_surface_after_heatmap.json
    │           │   │   ├── gl3d_surface_connectgaps.json
    │           │   │   ├── gl3d_surface_contour_precision.json
    │           │   │   ├── gl3d_surface_contour_start-end-size.json
    │           │   │   ├── gl3d_surface_intensity.json
    │           │   │   ├── gl3d_tetrahedra.json
    │           │   │   ├── gl3d_text-weirdness.json
    │           │   │   ├── gl3d_triangle.json
    │           │   │   ├── gl3d_volume_airflow.json
    │           │   │   ├── gl3d_volume_multiple-traces.json
    │           │   │   ├── gl3d_volume_multiple-traces_one-cube.json
    │           │   │   ├── gl3d_volume_opacityscale-iso.json
    │           │   │   ├── gl3d_wire-surface.json
    │           │   │   ├── gl3d_world-cals.json
    │           │   │   ├── gl3d_xy-defined-ticks.json
    │           │   │   ├── gl3d_z-range.json
    │           │   │   ├── global_font.json
    │           │   │   ├── glpolar_scatter.json
    │           │   │   ├── glpolar_style.json
    │           │   │   ├── glpolar_subplots.json
    │           │   │   ├── greens_heatmap.json
    │           │   │   ├── greys_heatmap.json
    │           │   │   ├── grid_subplot_types.json
    │           │   │   ├── grouped_bar.json
    │           │   │   ├── groups-over-matching-axes.json
    │           │   │   ├── heatmap-reverse-autocolorscale.json
    │           │   │   ├── heatmap-with-zero-category.json
    │           │   │   ├── heatmap_autocolor_negative.json
    │           │   │   ├── heatmap_autocolor_positive.json
    │           │   │   ├── heatmap_brick_padding.json
    │           │   │   ├── heatmap_contour_irregular_bricks.json
    │           │   │   ├── heatmap_multi-trace.json
    │           │   │   ├── heatmap_multicategory.json
    │           │   │   ├── heatmap_small_aspect-ratio.json
    │           │   │   ├── heatmap_xyz-dates-and-categories.json
    │           │   │   ├── heatmap_xyz-gaps-on-sides.json
    │           │   │   ├── hist2d_summed.json
    │           │   │   ├── hist_003_to_093.json
    │           │   │   ├── hist_003_to_1.json
    │           │   │   ├── hist_0_to_093.json
    │           │   │   ├── hist_0_to_1_midpoints.json
    │           │   │   ├── hist_all_integer.json
    │           │   │   ├── hist_all_integer_n50.json
    │           │   │   ├── hist_almost_integer.json
    │           │   │   ├── hist_category.json
    │           │   │   ├── hist_cum_stacked.json
    │           │   │   ├── hist_grouped.json
    │           │   │   ├── hist_multi.json
    │           │   │   ├── hist_stacked.json
    │           │   │   ├── hist_summed.json
    │           │   │   ├── hist_valid_ses.json
    │           │   │   ├── hist_valid_ses_y.json
    │           │   │   ├── histogram-offsetgroups.json
    │           │   │   ├── histogram_barmode_relative.json
    │           │   │   ├── histogram_colorscale.json
    │           │   │   ├── histogram_errorbars_inherit_color.json
    │           │   │   ├── hists-on-matching-axes.json
    │           │   │   ├── hot_heatmap.json
    │           │   │   ├── japanese.json
    │           │   │   ├── jet_heatmap.json
    │           │   │   ├── labelled_heatmap.json
    │           │   │   ├── layout-colorway.json
    │           │   │   ├── layout_image.json
    │           │   │   ├── layout_metatext.json
    │           │   │   ├── legend-constant-itemsizing.json
    │           │   │   ├── legend_horizontal.json
    │           │   │   ├── legend_horizontal_autowrap.json
    │           │   │   ├── legend_horizontal_groups.json
    │           │   │   ├── legend_horizontal_one_row.json
    │           │   │   ├── legend_horizontal_wrap-alll-lines.json
    │           │   │   ├── legend_inside.json
    │           │   │   ├── legend_labels.json
    │           │   │   ├── legend_large_margin.json
    │           │   │   ├── legend_negative_y.json
    │           │   │   ├── legend_outside.json
    │           │   │   ├── legend_scroll.json
    │           │   │   ├── legend_style.json
    │           │   │   ├── legend_valign_middle.json
    │           │   │   ├── legend_valign_top.json
    │           │   │   ├── legend_visibility.json
    │           │   │   ├── legendgroup.json
    │           │   │   ├── legendgroup_bar-stack.json
    │           │   │   ├── legendgroup_horizontal_wrapping.json
    │           │   │   ├── line_grid_color.json
    │           │   │   ├── line_grid_width.json
    │           │   │   ├── line_scatter.json
    │           │   │   ├── line_style.json
    │           │   │   ├── log_lines_fills.json
    │           │   │   ├── long_axis_labels.json
    │           │   │   ├── mapbox_0.json
    │           │   │   ├── mapbox_angles.json
    │           │   │   ├── mapbox_bubbles-text.json
    │           │   │   ├── mapbox_bubbles.json
    │           │   │   ├── mapbox_connectgaps.json
    │           │   │   ├── mapbox_custom-style.json
    │           │   │   ├── mapbox_fill.json
    │           │   │   ├── mapbox_geojson-attributes.json
    │           │   │   ├── mapbox_layers.json
    │           │   │   ├── mapbox_symbol-text.json
    │           │   │   ├── marker_colorscale_template.json
    │           │   │   ├── marker_line_width.json
    │           │   │   ├── marker_symbols.json
    │           │   │   ├── matching-categories.json
    │           │   │   ├── mathjax.json
    │           │   │   ├── multicategory-inside-ticks.json
    │           │   │   ├── multicategory-mirror.json
    │           │   │   ├── multicategory-sorting.json
    │           │   │   ├── multicategory-y.json
    │           │   │   ├── multicategory.json
    │           │   │   ├── multicategory2.json
    │           │   │   ├── multicategory_histograms.json
    │           │   │   ├── multiple_axes_double.json
    │           │   │   ├── multiple_axes_multiple.json
    │           │   │   ├── multiple_subplots.json
    │           │   │   ├── ohlc_first.json
    │           │   │   ├── overlaying-axis-lines.json
    │           │   │   ├── parcats_bad-displayindex.json
    │           │   │   ├── parcats_basic.json
    │           │   │   ├── parcats_basic_freeform.json
    │           │   │   ├── parcats_bundled.json
    │           │   │   ├── parcats_bundled_reversed.json
    │           │   │   ├── parcats_dark.json
    │           │   │   ├── parcats_grid_subplots.json
    │           │   │   ├── parcats_hoveron_color.json
    │           │   │   ├── parcats_hoveron_dimension.json
    │           │   │   ├── parcats_invisible_dimension.json
    │           │   │   ├── parcats_reordered.json
    │           │   │   ├── parcats_unbundled.json
    │           │   │   ├── percent_error_bar.json
    │           │   │   ├── picnic_heatmap.json
    │           │   │   ├── pie_aggregated.json
    │           │   │   ├── pie_fonts.json
    │           │   │   ├── pie_label0_dlabel.json
    │           │   │   ├── pie_labels_colors_text.json
    │           │   │   ├── pie_scale_textpos_hideslices.json
    │           │   │   ├── pie_simple.json
    │           │   │   ├── pie_sort_direction.json
    │           │   │   ├── pie_style.json
    │           │   │   ├── pie_style_arrays.json
    │           │   │   ├── pie_title_groupscale.json
    │           │   │   ├── pie_title_middle_center.json
    │           │   │   ├── pie_title_middle_center_multiline.json
    │           │   │   ├── pie_title_multiple.json
    │           │   │   ├── pie_title_pull.json
    │           │   │   ├── pie_title_subscript.json
    │           │   │   ├── pie_title_variations.json
    │           │   │   ├── plot_types.json
    │           │   │   ├── point-selection.json
    │           │   │   ├── point-selection2.json
    │           │   │   ├── polar_area_chart.json
    │           │   │   ├── polar_bar-overlay.json
    │           │   │   ├── polar_bar-stacked.json
    │           │   │   ├── polar_bar-width-base-offset.json
    │           │   │   ├── polar_blank.json
    │           │   │   ├── polar_categories.json
    │           │   │   ├── polar_dates.json
    │           │   │   ├── polar_direction.json
    │           │   │   ├── polar_fills.json
    │           │   │   ├── polar_funky-bars.json
    │           │   │   ├── polar_hole.json
    │           │   │   ├── polar_line.json
    │           │   │   ├── polar_long-category-angular-labels.json
    │           │   │   ├── polar_polygon-bars.json
    │           │   │   ├── polar_polygon-grids.json
    │           │   │   ├── polar_r0dr-theta0dtheta.json
    │           │   │   ├── polar_radial-range.json
    │           │   │   ├── polar_scatter.json
    │           │   │   ├── polar_sector.json
    │           │   │   ├── polar_subplots.json
    │           │   │   ├── polar_template.json
    │           │   │   ├── polar_ticks.json
    │           │   │   ├── polar_transforms.json
    │           │   │   ├── polar_wind-rose.json
    │           │   │   ├── portland_heatmap.json
    │           │   │   ├── pseudo_html.json
    │           │   │   ├── range_selector.json
    │           │   │   ├── range_selector_style.json
    │           │   │   ├── range_slider.json
    │           │   │   ├── range_slider_axes_double.json
    │           │   │   ├── range_slider_axes_stacked.json
    │           │   │   ├── range_slider_box.json
    │           │   │   ├── range_slider_initial_expanded.json
    │           │   │   ├── range_slider_initial_valid.json
    │           │   │   ├── range_slider_multiple.json
    │           │   │   ├── range_slider_rangemode.json
    │           │   │   ├── range_slider_reversed-range.json
    │           │   │   ├── range_slider_top_axis.json
    │           │   │   ├── rdbu_heatmap.json
    │           │   │   ├── sankey_circular.json
    │           │   │   ├── sankey_circular_large.json
    │           │   │   ├── sankey_circular_process.json
    │           │   │   ├── sankey_circular_simple.json
    │           │   │   ├── sankey_energy.json
    │           │   │   ├── sankey_energy_dark.json
    │           │   │   ├── sankey_groups.json
    │           │   │   ├── sankey_large_padding.json
    │           │   │   ├── sankey_link_concentration.json
    │           │   │   ├── sankey_messy.json
    │           │   │   ├── sankey_subplots.json
    │           │   │   ├── sankey_subplots_circular.json
    │           │   │   ├── sankey_x_y.json
    │           │   │   ├── scatter-colorscale-colorbar.json
    │           │   │   ├── scatter-marker-line-colorscales.json
    │           │   │   ├── scatter_errorbars_inherit_color.json
    │           │   │   ├── scatter_fill_corner_cases.json
    │           │   │   ├── scatter_fill_no_opacity.json
    │           │   │   ├── scatter_fill_self_next.json
    │           │   │   ├── scatter_fill_self_opacity.json
    │           │   │   ├── scattercarpet-on-two-carpets.json
    │           │   │   ├── scattercarpet-text.json
    │           │   │   ├── scattercarpet.json
    │           │   │   ├── shapes.json
    │           │   │   ├── shapes_below_traces.json
    │           │   │   ├── shapes_fixed_size.json
    │           │   │   ├── shapes_move-and-reshape-lines.json
    │           │   │   ├── shared_axes_subplots.json
    │           │   │   ├── show_legend.json
    │           │   │   ├── simple_annotation.json
    │           │   │   ├── simple_contour.json
    │           │   │   ├── simple_inset.json
    │           │   │   ├── simple_subplot.json
    │           │   │   ├── size_margins.json
    │           │   │   ├── sliders.json
    │           │   │   ├── splom_0.json
    │           │   │   ├── splom_array-styles.json
    │           │   │   ├── splom_dates.json
    │           │   │   ├── splom_iris-matching.json
    │           │   │   ├── splom_iris.json
    │           │   │   ├── splom_large.json
    │           │   │   ├── splom_log.json
    │           │   │   ├── splom_lower-nodiag-matching.json
    │           │   │   ├── splom_lower-nodiag.json
    │           │   │   ├── splom_lower.json
    │           │   │   ├── splom_mismatched-axis-types.json
    │           │   │   ├── splom_multi-axis-type.json
    │           │   │   ├── splom_nodiag.json
    │           │   │   ├── splom_ragged-via-axes.json
    │           │   │   ├── splom_ragged-via-visible-false.json
    │           │   │   ├── splom_upper-nodiag.json
    │           │   │   ├── splom_upper.json
    │           │   │   ├── splom_with-cartesian.json
    │           │   │   ├── stacked_area.json
    │           │   │   ├── stacked_area_duplicates.json
    │           │   │   ├── stacked_area_groupby.json
    │           │   │   ├── stacked_area_groups.json
    │           │   │   ├── stacked_area_horz.json
    │           │   │   ├── stacked_area_log.json
    │           │   │   ├── stacked_bar.json
    │           │   │   ├── stacked_coupled_subplots.json
    │           │   │   ├── stacked_subplots.json
    │           │   │   ├── stacked_subplots_shared_yaxis.json
    │           │   │   ├── style_bar.json
    │           │   │   ├── styling_names.json
    │           │   │   ├── sunburst_coffee-maxdepth3.json
    │           │   │   ├── sunburst_coffee.json
    │           │   │   ├── sunburst_first.json
    │           │   │   ├── sunburst_flare.json
    │           │   │   ├── sunburst_level-depth.json
    │           │   │   ├── sunburst_values.json
    │           │   │   ├── table_latex_multitrace_scatter.json
    │           │   │   ├── table_plain_birds.json
    │           │   │   ├── table_ragged.json
    │           │   │   ├── table_wrapped_birds.json
    │           │   │   ├── template.json
    │           │   │   ├── ternary-mathjax.json
    │           │   │   ├── ternary_array_styles.json
    │           │   │   ├── ternary_axis_layers.json
    │           │   │   ├── ternary_fill.json
    │           │   │   ├── ternary_lines.json
    │           │   │   ├── ternary_markers.json
    │           │   │   ├── ternary_multiple.json
    │           │   │   ├── ternary_noticks.json
    │           │   │   ├── ternary_simple.json
    │           │   │   ├── text_chart_arrays.json
    │           │   │   ├── text_chart_basic.json
    │           │   │   ├── text_chart_invalid-arrays.json
    │           │   │   ├── text_chart_single-string.json
    │           │   │   ├── text_chart_styling.json
    │           │   │   ├── text_export.json
    │           │   │   ├── tick-datafn.json
    │           │   │   ├── tick_attributes.json
    │           │   │   ├── tick_prefix_suffix.json
    │           │   │   ├── tick_prefix_suffix_exponent.json
    │           │   │   ├── tickformat.json
    │           │   │   ├── tickformatstops.json
    │           │   │   ├── tickson_boundaries.json
    │           │   │   ├── titles-avoid-labels.json
    │           │   │   ├── transforms.json
    │           │   │   ├── ultra_zoom.json
    │           │   │   ├── ultra_zoom_fill.json
    │           │   │   ├── updatemenus.json
    │           │   │   ├── updatemenus_positioning.json
    │           │   │   ├── violin-offsetgroups.json
    │           │   │   ├── violin_bandwidth-edge-cases.json
    │           │   │   ├── violin_box_multiple_widths.json
    │           │   │   ├── violin_box_overlay.json
    │           │   │   ├── violin_grouped.json
    │           │   │   ├── violin_grouped_horz-multicategory.json
    │           │   │   ├── violin_negative_sides_w_points.json
    │           │   │   ├── violin_non-linear.json
    │           │   │   ├── violin_old-faithful.json
    │           │   │   ├── violin_only_zeroes.json
    │           │   │   ├── violin_positive_and_negative.json
    │           │   │   ├── violin_positive_sides_w_points.json
    │           │   │   ├── violin_side-by-side.json
    │           │   │   ├── violin_style.json
    │           │   │   ├── viridis_heatmap.json
    │           │   │   ├── waterfall-grouping-vs-defaults.json
    │           │   │   ├── waterfall-offsetgroups.json
    │           │   │   ├── waterfall_11.json
    │           │   │   ├── waterfall_and_bar.json
    │           │   │   ├── waterfall_and_histogram.json
    │           │   │   ├── waterfall_attrs.json
    │           │   │   ├── waterfall_cliponaxis-false.json
    │           │   │   ├── waterfall_custom.json
    │           │   │   ├── waterfall_gap0.json
    │           │   │   ├── waterfall_line.json
    │           │   │   ├── waterfall_months.json
    │           │   │   ├── waterfall_multicategory.json
    │           │   │   ├── waterfall_nonnumeric_sizes.json
    │           │   │   ├── waterfall_profit-loss_2018_positive-negative.json
    │           │   │   ├── waterfall_profit-loss_2018vs2019_overlay.json
    │           │   │   ├── waterfall_profit-loss_2018vs2019_rectangle.json
    │           │   │   ├── world-cals.json
    │           │   │   ├── yaxis-over-yaxis2.json
    │           │   │   ├── yignbu_heatmap.json
    │           │   │   ├── yiorrd_heatmap.json
    │           │   │   └── zsmooth_methods.json
    │           │   └── strict-d3.js
    │           └── jasmine
    │               ├── assets
    │               │   ├── check_component.js
    │               │   ├── check_event_data.js
    │               │   ├── check_overlap.js
    │               │   ├── click.js
    │               │   ├── create_graph_div.js
    │               │   ├── custom_assertions.js
    │               │   ├── custom_matchers.js
    │               │   ├── delay.js
    │               │   ├── destroy_graph_div.js
    │               │   ├── double_click.js
    │               │   ├── drag.js
    │               │   ├── fail_test.js
    │               │   ├── get_bbox.js
    │               │   ├── get_client_position.js
    │               │   ├── get_node_coords.js
    │               │   ├── get_rect_center.js
    │               │   ├── hover.js
    │               │   ├── ie9_mock.js
    │               │   ├── jquery-1.8.3.min.js
    │               │   ├── mock_lists.js
    │               │   ├── modebar_button.js
    │               │   ├── mouse_event.js
    │               │   ├── read_pixel.js
    │               │   ├── supply_defaults.js
    │               │   ├── timed_click.js
    │               │   ├── touch_event.js
    │               │   ├── transitions.js
    │               │   └── unpolyfill.js
    │               ├── bundle_tests
    │               │   ├── bar_test.js
    │               │   ├── choropleth_test.js
    │               │   ├── component_first_test.js
    │               │   ├── component_last_test.js
    │               │   ├── contour_test.js
    │               │   ├── core_test.js
    │               │   ├── dynamic_import_test.js
    │               │   ├── finance_test.js
    │               │   ├── histogram2dcontour_test.js
    │               │   ├── ie9_test.js
    │               │   ├── mathjax_test.js
    │               │   ├── minified_bundle_test.js
    │               │   ├── no_webgl_test.js
    │               │   ├── plotschema_test.js
    │               │   └── requirejs_test.js
    │               ├── karma.conf.js
    │               └── tests
    │                   ├── animate_test.js
    │                   ├── annotations_test.js
    │                   ├── axes_test.js
    │                   ├── bar_test.js
    │                   ├── barpolar_test.js
    │                   ├── box_test.js
    │                   ├── calcdata_test.js
    │                   ├── carpet_test.js
    │                   ├── cartesian_interact_test.js
    │                   ├── cartesian_test.js
    │                   ├── choropleth_test.js
    │                   ├── click_test.js
    │                   ├── color_test.js
    │                   ├── colorbar_test.js
    │                   ├── colorscale_test.js
    │                   ├── command_test.js
    │                   ├── compute_frame_test.js
    │                   ├── cone_test.js
    │                   ├── config_test.js
    │                   ├── contour_test.js
    │                   ├── download_test.js
    │                   ├── dragelement_test.js
    │                   ├── drawing_test.js
    │                   ├── errorbars_test.js
    │                   ├── events_test.js
    │                   ├── extend_test.js
    │                   ├── finance_test.js
    │                   ├── frame_api_test.js
    │                   ├── fx_test.js
    │                   ├── geo_test.js
    │                   ├── gl2d_click_test.js
    │                   ├── gl2d_date_axis_render_test.js
    │                   ├── gl2d_double_click_test.js
    │                   ├── gl2d_plot_interact_test.js
    │                   ├── gl2d_pointcloud_test.js
    │                   ├── gl2d_scatterplot_contour_test.js
    │                   ├── gl3d_plot_interact_test.js
    │                   ├── gl3daxes_test.js
    │                   ├── gl3dlayout_test.js
    │                   ├── gl_plot_interact_basic_test.js
    │                   ├── heatmap_test.js
    │                   ├── histogram2d_test.js
    │                   ├── histogram_test.js
    │                   ├── hover_label_test.js
    │                   ├── hover_spikeline_test.js
    │                   ├── is_array_test.js
    │                   ├── is_plain_object_test.js
    │                   ├── isosurface_test.js
    │                   ├── layout_images_test.js
    │                   ├── legend_scroll_test.js
    │                   ├── legend_test.js
    │                   ├── lib_date_test.js
    │                   ├── lib_geometry2d_test.js
    │                   ├── lib_test.js
    │                   ├── localize_test.js
    │                   ├── mapbox_test.js
    │                   ├── mesh3d_test.js
    │                   ├── modebar_test.js
    │                   ├── page_test.js
    │                   ├── parcats_test.js
    │                   ├── parcoords_test.js
    │                   ├── pie_test.js
    │                   ├── plot_api_react_test.js
    │                   ├── plot_api_test.js
    │                   ├── plot_interact_test.js
    │                   ├── plot_promise_test.js
    │                   ├── plots_test.js
    │                   ├── polar_test.js
    │                   ├── polygon_test.js
    │                   ├── range_selector_test.js
    │                   ├── range_slider_test.js
    │                   ├── registry_test.js
    │                   ├── sankey_test.js
    │                   ├── scatter3d_test.js
    │                   ├── scatter_test.js
    │                   ├── scattergeo_test.js
    │                   ├── scattergl_test.js
    │                   ├── scattermapbox_test.js
    │                   ├── scatterpolar_test.js
    │                   ├── scatterpolargl_test.js
    │                   ├── scatterternary_test.js
    │                   ├── search_test.js
    │                   ├── select_test.js
    │                   ├── shapes_test.js
    │                   ├── sliders_test.js
    │                   ├── snapshot_test.js
    │                   ├── splom_test.js
    │                   ├── streamtube_test.js
    │                   ├── sunburst_test.js
    │                   ├── surface_test.js
    │                   ├── svg_text_utils_test.js
    │                   ├── table_test.js
    │                   ├── template_test.js
    │                   ├── ternary_test.js
    │                   ├── titles_test.js
    │                   ├── toimage_test.js
    │                   ├── transform_aggregate_test.js
    │                   ├── transform_filter_test.js
    │                   ├── transform_groupby_test.js
    │                   ├── transform_multi_test.js
    │                   ├── transform_sort_test.js
    │                   ├── transition_test.js
    │                   ├── updatemenus_test.js
    │                   ├── validate_test.js
    │                   ├── violin_test.js
    │                   ├── volume_test.js
    │                   └── waterfall_test.js
    ├── sebastian
    │   ├── code-unit-reverse-lookup
    │   │   ├── ChangeLog.md
    │   │   ├── LICENSE
    │   │   ├── README.md
    │   │   ├── build.xml
    │   │   ├── composer.json
    │   │   ├── phpunit.xml
    │   │   ├── src
    │   │   │   └── Wizard.php
    │   │   └── tests
    │   │       └── WizardTest.php
    │   ├── comparator
    │   │   ├── ChangeLog.md
    │   │   ├── LICENSE
    │   │   ├── README.md
    │   │   ├── build.xml
    │   │   ├── composer.json
    │   │   ├── phpunit.xml
    │   │   ├── src
    │   │   │   ├── ArrayComparator.php
    │   │   │   ├── Comparator.php
    │   │   │   ├── ComparisonFailure.php
    │   │   │   ├── DOMNodeComparator.php
    │   │   │   ├── DateTimeComparator.php
    │   │   │   ├── DoubleComparator.php
    │   │   │   ├── ExceptionComparator.php
    │   │   │   ├── Factory.php
    │   │   │   ├── MockObjectComparator.php
    │   │   │   ├── NumericComparator.php
    │   │   │   ├── ObjectComparator.php
    │   │   │   ├── ResourceComparator.php
    │   │   │   ├── ScalarComparator.php
    │   │   │   ├── SplObjectStorageComparator.php
    │   │   │   └── TypeComparator.php
    │   │   └── tests
    │   │       ├── ArrayComparatorTest.php
    │   │       ├── ComparisonFailureTest.php
    │   │       ├── DOMNodeComparatorTest.php
    │   │       ├── DateTimeComparatorTest.php
    │   │       ├── DoubleComparatorTest.php
    │   │       ├── ExceptionComparatorTest.php
    │   │       ├── FactoryTest.php
    │   │       ├── MockObjectComparatorTest.php
    │   │       ├── NumericComparatorTest.php
    │   │       ├── ObjectComparatorTest.php
    │   │       ├── ResourceComparatorTest.php
    │   │       ├── ScalarComparatorTest.php
    │   │       ├── SplObjectStorageComparatorTest.php
    │   │       ├── TypeComparatorTest.php
    │   │       └── _fixture
    │   │           ├── Author.php
    │   │           ├── Book.php
    │   │           ├── ClassWithToString.php
    │   │           ├── SampleClass.php
    │   │           ├── Struct.php
    │   │           ├── TestClass.php
    │   │           └── TestClassComparator.php
    │   ├── diff
    │   │   ├── ChangeLog.md
    │   │   ├── LICENSE
    │   │   ├── README.md
    │   │   ├── build.xml
    │   │   ├── composer.json
    │   │   ├── phpunit.xml
    │   │   ├── src
    │   │   │   ├── Chunk.php
    │   │   │   ├── Diff.php
    │   │   │   ├── Differ.php
    │   │   │   ├── Exception
    │   │   │   │   ├── ConfigurationException.php
    │   │   │   │   ├── Exception.php
    │   │   │   │   └── InvalidArgumentException.php
    │   │   │   ├── Line.php
    │   │   │   ├── LongestCommonSubsequenceCalculator.php
    │   │   │   ├── MemoryEfficientLongestCommonSubsequenceCalculator.php
    │   │   │   ├── Output
    │   │   │   │   ├── AbstractChunkOutputBuilder.php
    │   │   │   │   ├── DiffOnlyOutputBuilder.php
    │   │   │   │   ├── DiffOutputBuilderInterface.php
    │   │   │   │   ├── StrictUnifiedDiffOutputBuilder.php
    │   │   │   │   └── UnifiedDiffOutputBuilder.php
    │   │   │   ├── Parser.php
    │   │   │   └── TimeEfficientLongestCommonSubsequenceCalculator.php
    │   │   └── tests
    │   │       ├── ChunkTest.php
    │   │       ├── DiffTest.php
    │   │       ├── DifferTest.php
    │   │       ├── Exception
    │   │       │   ├── ConfigurationExceptionTest.php
    │   │       │   └── InvalidArgumentExceptionTest.php
    │   │       ├── LineTest.php
    │   │       ├── LongestCommonSubsequenceTest.php
    │   │       ├── MemoryEfficientImplementationTest.php
    │   │       ├── Output
    │   │       │   ├── AbstractChunkOutputBuilderTest.php
    │   │       │   ├── DiffOnlyOutputBuilderTest.php
    │   │       │   ├── Integration
    │   │       │   │   ├── StrictUnifiedDiffOutputBuilderIntegrationTest.php
    │   │       │   │   └── UnifiedDiffOutputBuilderIntegrationTest.php
    │   │       │   ├── StrictUnifiedDiffOutputBuilderDataProvider.php
    │   │       │   ├── StrictUnifiedDiffOutputBuilderTest.php
    │   │       │   ├── UnifiedDiffOutputBuilderDataProvider.php
    │   │       │   └── UnifiedDiffOutputBuilderTest.php
    │   │       ├── ParserTest.php
    │   │       ├── TimeEfficientImplementationTest.php
    │   │       ├── Utils
    │   │       │   ├── FileUtils.php
    │   │       │   ├── UnifiedDiffAssertTrait.php
    │   │       │   ├── UnifiedDiffAssertTraitIntegrationTest.php
    │   │       │   └── UnifiedDiffAssertTraitTest.php
    │   │       └── fixtures
    │   │           ├── UnifiedDiffAssertTraitIntegrationTest
    │   │           │   ├── 1_a.txt
    │   │           │   ├── 1_b.txt
    │   │           │   ├── 2_a.txt
    │   │           │   └── 2_b.txt
    │   │           ├── out
    │   │           ├── patch.txt
    │   │           ├── patch2.txt
    │   │           └── serialized_diff.bin
    │   ├── environment
    │   │   ├── ChangeLog.md
    │   │   ├── LICENSE
    │   │   ├── README.md
    │   │   ├── build.xml
    │   │   ├── composer.json
    │   │   ├── phpunit.xml
    │   │   ├── src
    │   │   │   ├── Console.php
    │   │   │   ├── OperatingSystem.php
    │   │   │   └── Runtime.php
    │   │   └── tests
    │   │       ├── ConsoleTest.php
    │   │       ├── OperatingSystemTest.php
    │   │       └── RuntimeTest.php
    │   ├── exporter
    │   │   ├── LICENSE
    │   │   ├── README.md
    │   │   ├── build.xml
    │   │   ├── composer.json
    │   │   ├── phpunit.xml
    │   │   ├── src
    │   │   │   └── Exporter.php
    │   │   └── tests
    │   │       └── ExporterTest.php
    │   ├── global-state
    │   │   ├── LICENSE
    │   │   ├── README.md
    │   │   ├── build.xml
    │   │   ├── composer.json
    │   │   ├── phpunit.xml
    │   │   ├── src
    │   │   │   ├── Blacklist.php
    │   │   │   ├── CodeExporter.php
    │   │   │   ├── Restorer.php
    │   │   │   ├── Snapshot.php
    │   │   │   └── exceptions
    │   │   │       ├── Exception.php
    │   │   │       └── RuntimeException.php
    │   │   └── tests
    │   │       ├── BlacklistTest.php
    │   │       ├── CodeExporterTest.php
    │   │       ├── RestorerTest.php
    │   │       ├── SnapshotTest.php
    │   │       └── _fixture
    │   │           ├── BlacklistedChildClass.php
    │   │           ├── BlacklistedClass.php
    │   │           ├── BlacklistedImplementor.php
    │   │           ├── BlacklistedInterface.php
    │   │           ├── SnapshotClass.php
    │   │           ├── SnapshotDomDocument.php
    │   │           ├── SnapshotFunctions.php
    │   │           └── SnapshotTrait.php
    │   ├── object-enumerator
    │   │   ├── ChangeLog.md
    │   │   ├── LICENSE
    │   │   ├── README.md
    │   │   ├── build.xml
    │   │   ├── composer.json
    │   │   ├── phpunit.xml
    │   │   ├── src
    │   │   │   ├── Enumerator.php
    │   │   │   ├── Exception.php
    │   │   │   └── InvalidArgumentException.php
    │   │   └── tests
    │   │       ├── EnumeratorTest.php
    │   │       └── _fixture
    │   │           └── ExceptionThrower.php
    │   ├── object-reflector
    │   │   ├── ChangeLog.md
    │   │   ├── LICENSE
    │   │   ├── README.md
    │   │   ├── build.xml
    │   │   ├── composer.json
    │   │   ├── phpunit.xml
    │   │   ├── src
    │   │   │   ├── Exception.php
    │   │   │   ├── InvalidArgumentException.php
    │   │   │   └── ObjectReflector.php
    │   │   └── tests
    │   │       ├── ObjectReflectorTest.php
    │   │       └── _fixture
    │   │           ├── ChildClass.php
    │   │           ├── ClassWithIntegerAttributeName.php
    │   │           └── ParentClass.php
    │   ├── recursion-context
    │   │   ├── LICENSE
    │   │   ├── README.md
    │   │   ├── build.xml
    │   │   ├── composer.json
    │   │   ├── phpunit.xml
    │   │   ├── src
    │   │   │   ├── Context.php
    │   │   │   ├── Exception.php
    │   │   │   └── InvalidArgumentException.php
    │   │   └── tests
    │   │       └── ContextTest.php
    │   ├── resource-operations
    │   │   ├── ChangeLog.md
    │   │   ├── LICENSE
    │   │   ├── README.md
    │   │   ├── build
    │   │   │   └── generate.php
    │   │   ├── build.xml
    │   │   ├── composer.json
    │   │   ├── src
    │   │   │   └── ResourceOperations.php
    │   │   └── tests
    │   │       └── ResourceOperationsTest.php
    │   └── version
    │       ├── LICENSE
    │       ├── README.md
    │       ├── composer.json
    │       └── src
    │           └── Version.php
    ├── symfony
    │   └── polyfill-ctype
    │       ├── Ctype.php
    │       ├── LICENSE
    │       ├── README.md
    │       ├── bootstrap.php
    │       └── composer.json
    ├── theseer
    │   └── tokenizer
    │       ├── CHANGELOG.md
    │       ├── LICENSE
    │       ├── README.md
    │       ├── build.xml
    │       ├── composer.json
    │       ├── phive.xml
    │       ├── phpunit.xml
    │       ├── src
    │       │   ├── Exception.php
    │       │   ├── NamespaceUri.php
    │       │   ├── NamespaceUriException.php
    │       │   ├── Token.php
    │       │   ├── TokenCollection.php
    │       │   ├── TokenCollectionException.php
    │       │   ├── Tokenizer.php
    │       │   └── XMLSerializer.php
    │       └── tests
    │           ├── NamespaceUriTest.php
    │           ├── TokenCollectionTest.php
    │           ├── TokenTest.php
    │           ├── TokenizerTest.php
    │           ├── XMLSerializerTest.php
    │           └── _files
    │               ├── customns.xml
    │               ├── test.php
    │               ├── test.php.tokens
    │               └── test.php.xml
    └── webmozart
        └── assert
            ├── CHANGELOG.md
            ├── LICENSE
            ├── README.md
            ├── composer.json
            └── src
                └── Assert.php

1111 directories, 10816 files
```
