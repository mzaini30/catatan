<?php defined('BASEPATH') || exit('No direct script access allowed');

/**
 * Configuration settings for the CodeIgniter Markdown Library.
 *
 * https://github.com/jonlabelle/ci-markdown
 */

/*
| --------------------------------------------------------------------------
| Tab Width
| --------------------------------------------------------------------------
|
| This is the width of a tab character on input. Changing
| this will affect how many spaces a tab character represents.
|
| Note: Keep in mind that when the Markdown syntax spec says
| "four spaces or one tab", it actually means "four spaces
| after tabs are expanded to spaces". So setting tab_width
| to 8 will make parser treat a tab character as two levels
| of indentation.
|
| @int (default = 4)
*/

$config['tab_width'] = 4;

/*
| --------------------------------------------------------------------------
| Allow Markup
| --------------------------------------------------------------------------
|
| Setting this variable to true will prevent HTML tags
| in the input from being passed to the output.
|
| Important: This is not a protection against malicious
| javascript being injected in a document. See why in
| Markdown and XSS https://michelf.ca/blog/2010/markdown-and-xss/
|
| @bool (default = false)
*/

$config['no_markup'] = false;

/*
| --------------------------------------------------------------------------
| Allow Entities
| --------------------------------------------------------------------------
|
| Setting this variable to true will prevent HTML entities
| (such as &lt;) from being passed verbatim in the output
| as it is the standard with Markdown. Instead, the
| HTML output will be &amp;tl; and once shown in shown
| the browser it will match perfectly what was written.
|
| @bool (default = false)
*/

$config['no_entities'] = false;

/*
| --------------------------------------------------------------------------
| Hard Wrap
| --------------------------------------------------------------------------
|
| Change to `true` to enable line breaks on "\n" without
| two trailing spaces.
|
| @bool (default = false)
*/

$config['hard_wrap'] = true;

/*
| --------------------------------------------------------------------------
| Predefined URLs
| --------------------------------------------------------------------------
|
| You can predefine reference links by setting predef_urls to a
| list of URLs where the key is the name of the reference.
|
| For instance:
|
|     $parser->predef_urls = array('ref' => 'https://michelf.ca/');
|
| will make this Markdown input to create a link:
|
|     This is [my website][ref].
|
| @array (default = array())
*/

$config['predef_urls'] = array();

/*
| --------------------------------------------------------------------------
| Predefined Titles
| --------------------------------------------------------------------------
|
| Use predef_titles to set the title of the link references
| passed in predef_urls. As for predef_urls, the key is
| the reference name.
|
| @array (default = array())
*/

$config['predef_titles'] = array();

/*
| --------------------------------------------------------------------------
| Predefined Abbreviations
| --------------------------------------------------------------------------
|
| You can predefine abbreviations by setting predef_abbr
| to a list of abbreviations where the key is the text of
| the abbreviation and the value is the expanded name.
|
| See: https://michelf.ca/projects/php-markdown/extra/#abbr
|
| @array (default = array())
*/

$config['predef_abbr'] = array();

/*
| --------------------------------------------------------------------------
| Footnote ID Prefix
| --------------------------------------------------------------------------
|
| A prefix for the id attributes generated by footnotes.
| This is useful if you have multiple Markdown documents
| displayed inside one HTML document to avoid footnote
| ids to clash each other.
|
| @string (default = '')
*/

$config['fn_id_prefix'] = '';

/*
| --------------------------------------------------------------------------
| Footnote Link Title
| --------------------------------------------------------------------------
|
| Optional title attribute for footnote links.
|
| @string (default = '')
*/

$config['fn_link_title'] = '';

/*
| --------------------------------------------------------------------------
| Footnote Back-Link Title
| --------------------------------------------------------------------------
|
| Optional title attribute for footnote back-links.
|
| @string (default = '')
*/

$config['fn_backlink_title'] = '';

/*
| --------------------------------------------------------------------------
| Footnote Link Class Attribute
| --------------------------------------------------------------------------
|
| Optional class attribute for footnote links.
|
| @string (default = 'footnote-ref')
*/

$config['fn_link_class'] = 'footnote-ref';

/*
| --------------------------------------------------------------------------
| Footnote Back-Link Class Attribute
| --------------------------------------------------------------------------
|
| Optional class attribute for footnote back-links.
|
| @string (default = 'footnote-backref')
*/

$config['fn_backlink_class'] = 'footnote-backref';

/*
| --------------------------------------------------------------------------
| Footnote Back-Link HTML
| --------------------------------------------------------------------------
|
| HTML content for a footnote back-link. The &#xFE0E; suffix
| in the default value is there to avoid the curled arrow
| being rendered as an emoji on mobile devices, but it might
| cause an unrecognized character to appear on older browsers.
|
| @string (default = '&#8617;&#xFE0E;')
*/

$config['fn_backlink_html'] = '&#8617;&#xFE0E;';

/*
| --------------------------------------------------------------------------
| Table Align Class
| --------------------------------------------------------------------------
|
| Value for the class attribute determining the alignment
| of table cells. The default value, which is empty, will cause
| the align attribute to be used instead of class to specify
| the alignment.
|
| If not empty, the align attribute will not appear. Instead,
| the value for the class attribute will be determined by
| replacing any occurrence of %% within the string by left,
| center, or right. For instance, if the configuration
| variable is "go-%%" and the cell is right-aligned, the
| result will be: class="go-right".
|
| @string (default = '')
*/

$config['table_align_class_tmpl'] = '';

/*
| --------------------------------------------------------------------------
| Code Class Prefix
| --------------------------------------------------------------------------
|
| An optional prefix for the class names associated with
| fenced code blocks. This will be prepended to the class
| name if you write your fenced code block this way:
|
|     ~~~~ .html
|     <br>
|     ~~~~
|
| Note however that it has no effect if you add a class name
| using the more generic extra syntax that uses braces:
|
|     ~~~~ {.html .flashy}
|     <br>
|     ~~~~
|
| @string (default = '')
*/

$config['code_class_prefix'] = '';

/*
| --------------------------------------------------------------------------
| Code/Pre Attributes Option
| --------------------------------------------------------------------------
|
| When set to false (the default), attributes for code
| blocks will go on the <code> tag; setting this to
| true will put attributes on the <pre> tag instead.
|
| @bool (default = false)
*/

$config['code_attr_on_pre'] = false;

/*
| --------------------------------------------------------------------------
| Enhanced ordered List
| --------------------------------------------------------------------------
|
| Class attribute to toggle "enhanced ordered list"
| behavior setting this to true will allow ordered lists
| to start from the index number that is defined first.
|
| For example:
|
|     2. List item two
|     3. List item three
|
| becomes...
|
|     <ol start="2">
|         <li>List item two</li>
|         <li>List item three</li>
|     </ol>
|
| @bool (default = true)
*/

$config['enhanced_ordered_list'] = true;

/*
| --------------------------------------------------------------------------
| Empty Element/Tag Suffix
| --------------------------------------------------------------------------
|
| This is the string used to close tags for HTML elements
| with no content such as <br> and <hr>.
|
| @string (default = '>')
*/

$config['empty_element_suffix'] = '>';

/*
| --------------------------------------------------------------------------
| Hash Tag Protection
| --------------------------------------------------------------------------
|
| When true, prevents ATX-style headers with no space after
| the initial hash from being interpreted as headers. This way
| those precious hash tags can be preserved.
|
| @bool (default = false)
*/

$config['hashtag_protection'] = false;

/*
| --------------------------------------------------------------------------
| Omit Footnotes
| --------------------------------------------------------------------------
|
| Determines whether footnotes should be appended to the end
| of the document. If true, footnote html can be retrieved from
| $this->footnotes_assembled.
|
| @bool (default = false)
*/

$config['omit_footnotes'] = false;
