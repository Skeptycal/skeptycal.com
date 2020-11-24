# Usage: prettier [options][file/glob ...]

> By default, output is written to stdout.
> Stdin is read if it is piped to Prettier and no files are given.

---

**_Output options:_**

**-c, --check**
Check if the given files are formatted, print a human-friendly summary message and paths to unformatted files (see also --list-different).

**-l, --list-different**
Print the names of files that are different from Prettier's formatting (see also --check).

**--write**
Edit files in-place. (Beware!)

---

**_Format options:_**

**--arrow-parens <avoid|always>**
Include parentheses around a sole arrow function parameter. _(Defaults to avoid.)_

**--no-bracket-spacing**
Do not print spaces between brackets.

**--end-of-line <auto|lf|crlf|cr>**
Which end of line characters to apply. _(Defaults to auto.)_

**--html-whitespace-sensitivity <css|strict|ignore>**
How to handle whitespaces in HTML. _(Defaults to css.)_

**--jsx-bracket-same-line Put >**
on the last line instead of at a new line. Defaults to false.

**--jsx-single-quote**
Use single quotes in JSX. Defaults to false.

**--parser <flow|babel|babel-flow|typescript|css|less|scss|json|json5|json-stringify|graphql|markdown|mdx|vue|yaml|html|angular|lwc>**
Which parser to use.

**--print-width <int>**
The line length where Prettier will try wrap. Defaults to 80.

**--prose-wrap <always|never|preserve>**
How to wrap prose. _(Defaults to preserve.)_

**--quote-props <as-needed|consistent|preserve>**
Change when properties in objects are quoted. _(Defaults to as-needed.)_

**--no-semi**
Do not print semicolons, except at the beginning of lines which may need them.

**--single-quote**
Use single quotes instead of double quotes. Defaults to false.

**--tab-width <int>**
Number of spaces per indentation level. Defaults to 2.

**--trailing-comma <none|es5|all>**
Print trailing commas wherever possible when multi-line. _(Defaults to none.)_

**--use-tabs**
Indent with tabs instead of spaces. Defaults to false.

---

**_Config options:_**

**--config <path>**
Path to a Prettier configuration file (.prettierrc, package.json, prettier.config.js).

**--no-config**
Do not look for a configuration file.

**--config-precedence <cli-override|file-override|prefer-file>**
Define in which order config files and CLI options should be evaluated. _(Defaults to cli-override.)_

**--no-editorconfig**
Don't take .editorconfig into account when parsing configuration.

**--find-config-path <path>**
Find and print the path to a configuration file for the given input file.

**--ignore-path <path>**
Path to a file with patterns describing files to ignore. Defaults to .prettierignore.

**--plugin <path>**
Add a plugin. Multiple plugins can be passed as separate `--plugin`s. Defaults to [].

**--plugin-search-dir <path>**
Custom directory that contains prettier plugins in node*modules subdirectory.
*(Overrides default behavior when plugins are searched relatively to the location of Prettier.) (Multiple values are accepted.) (Defaults to [].)\_

**--with-node-modules**
Process files inside 'node_modules' directory.

---

**_Editor options:_**

**--cursor-offset <int>**
Print (to stderr) where a cursor at the given position would move to after formatting. This option cannot be used with --range-start and --range-end. Defaults to -1.

**--range-end <int>**
Format code ending at a given character offset (exclusive). The range will extend forwards to the end of the selected statement. Defaults to Infinity. _(This option cannot be used with --cursor-offset.)_

**--range-start <int>**
Format code starting at a given character offset. The range will extend backwards to the start of the first line containing the selected statement. Defaults to 0. _(This option cannot be used with --cursor-offset.)_

---

**_Other options:_**

**--no-color**
Do not colorize error messages.

**--file-info <path>**
Extract the following info (as JSON) for a given file path.

Reported fields:

ignored (boolean) true if file path is filtered by --ignore-path
inferredParser (string | null) - name of parser inferred from file path

**-h, --help <flag>**
Show CLI usage, or details about the given flag. Example: --help write

**--insert-pragma**
Insert @format pragma into file's first docblock comment. Defaults to false.

**--loglevel <silent|error|warn|log|debug>**
What level of logs to report. _(Defaults to log.)_

**--require-pragma**
Require either '@prettier' or '@format' to be present in the file's first docblock comment in order for it to be formatted. _(Defaults to false.)_

**--stdin**
Force reading input from stdin.

**--stdin-filepath <path>**
Path to the file to pretend that stdin comes from.

**--support-info**
Print support information as JSON.

**-v, --version**
Print Prettier version.
