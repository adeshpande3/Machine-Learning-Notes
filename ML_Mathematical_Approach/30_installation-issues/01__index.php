<!DOCTYPE html>
<html class="client-nojs" lang="en" dir="ltr">
<head>
<meta charset="UTF-8"/>
<title>Octave for Microsoft Windows - Octave</title>
<script>document.documentElement.className = document.documentElement.className.replace( /(^|\s)client-nojs(\s|$)/, "$1client-js$2" );</script>
<script>(window.RLQ=window.RLQ||[]).push(function(){mw.config.set({"wgCanonicalNamespace":"","wgCanonicalSpecialPageName":false,"wgNamespaceNumber":0,"wgPageName":"Octave_for_Microsoft_Windows","wgTitle":"Octave for Microsoft Windows","wgCurRevisionId":10347,"wgRevisionId":10347,"wgArticleId":18,"wgIsArticle":true,"wgIsRedirect":false,"wgAction":"view","wgUserName":null,"wgUserGroups":["*"],"wgCategories":["Installation","Building","Microsoft Windows"],"wgBreakFrames":false,"wgPageContentLanguage":"en","wgPageContentModel":"wikitext","wgSeparatorTransformTable":["",""],"wgDigitTransformTable":["",""],"wgDefaultDateFormat":"dmy","wgMonthNames":["","January","February","March","April","May","June","July","August","September","October","November","December"],"wgMonthNamesShort":["","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"wgRelevantPageName":"Octave_for_Microsoft_Windows","wgRelevantArticleId":18,"wgRequestId":"Wc1WUq3s4IwAAFr83zgAAAAN","wgIsProbablyEditable":true,"wgRestrictionEdit":[],"wgRestrictionMove":[],"wgRedirectedFrom":"Octave_for_Windows","wgInternalRedirectTargetUrl":"/Octave_for_Microsoft_Windows"});mw.loader.state({"site.styles":"ready","noscript":"ready","user.styles":"ready","user.cssprefs":"ready","user":"ready","user.options":"loading","user.tokens":"loading","mediawiki.legacy.shared":"ready","mediawiki.legacy.commonPrint":"ready","mediawiki.sectionAnchor":"ready","mediawiki.skinning.interface":"ready","mediawiki.skinning.content.externallinks":"ready","skins.monobook.styles":"ready"});mw.loader.implement("user.options@0j3lz3q",function($,jQuery,require,module){mw.user.options.set({"variant":"en"});});mw.loader.implement("user.tokens@1vpgzwx",function ( $, jQuery, require, module ) {
mw.user.tokens.set({"editToken":"+\\","patrolToken":"+\\","watchToken":"+\\","csrfToken":"+\\"});/*@nomin*/;

});mw.loader.load(["mediawiki.action.view.redirect","mediawiki.page.startup"]);});</script>
<link rel="stylesheet" href="/wiki/load.php?debug=false&amp;lang=en&amp;modules=mediawiki.legacy.commonPrint%2Cshared%7Cmediawiki.sectionAnchor%7Cmediawiki.skinning.content.externallinks%7Cmediawiki.skinning.interface%7Cskins.monobook.styles&amp;only=styles&amp;skin=monobook"/>
<script async="" src="/wiki/load.php?debug=false&amp;lang=en&amp;modules=startup&amp;only=scripts&amp;skin=monobook"></script>
<!--[if IE 6]><link rel="stylesheet" href="/wiki/skins/MonoBook/IE60Fixes.css?303" media="screen"/><![endif]--><!--[if IE 7]><link rel="stylesheet" href="/wiki/skins/MonoBook/IE70Fixes.css?303" media="screen"/><![endif]-->
<meta name="ResourceLoaderDynamicStyles" content=""/>
<link rel="stylesheet" href="/wiki/load.php?debug=false&amp;lang=en&amp;modules=site.styles&amp;only=styles&amp;skin=monobook"/>
<meta name="generator" content="MediaWiki 1.28.2"/>
<link rel="alternate" type="application/x-wiki" title="Edit" href="/wiki/index.php?title=Octave_for_Microsoft_Windows&amp;action=edit"/>
<link rel="edit" title="Edit" href="/wiki/index.php?title=Octave_for_Microsoft_Windows&amp;action=edit"/>
<link rel="shortcut icon" href="/favicon.ico"/>
<link rel="search" type="application/opensearchdescription+xml" href="/wiki/opensearch_desc.php" title="Octave (en)"/>
<link rel="EditURI" type="application/rsd+xml" href="http://wiki.octave.org/wiki/api.php?action=rsd"/>
<link rel="alternate" type="application/atom+xml" title="Octave Atom feed" href="/wiki/index.php?title=Special:RecentChanges&amp;feed=atom"/>
<link rel="canonical" href="http://wiki.octave.org/Octave_for_Microsoft_Windows"/>
</head>
<body class="mediawiki ltr sitedir-ltr mw-hide-empty-elt ns-0 ns-subject page-Octave_for_Microsoft_Windows rootpage-Octave_for_Microsoft_Windows skin-monobook action-view"><div id="globalWrapper">
		<div id="column-content">
			<div id="content" class="mw-body" role="main">
				<a id="top"></a>
				
				<div class="mw-indicators">
</div>
				<h1 id="firstHeading" class="firstHeading" lang="en">Octave for Microsoft Windows</h1>
				
				<div id="bodyContent" class="mw-body-content">
					<div id="siteSub">From Octave</div>
					<div id="contentSub"><span class="mw-redirectedfrom">(Redirected from <a href="/wiki/index.php?title=Octave_for_Windows&amp;redirect=no" class="mw-redirect" title="Octave for Windows">Octave for Windows</a>)</span></div>
										<div id="jump-to-nav" class="mw-jump">Jump to: <a href="#column-one">navigation</a>, <a href="#searchInput">search</a></div>

					<!-- start content -->
					<div id="mw-content-text" lang="en" dir="ltr" class="mw-content-ltr"><dl><dd><i>This article is about using pre-built installers of Octave for Windows; for instructions about building it, see <a href="/Windows_Installer" title="Windows Installer">Windows Installer</a>.</i></dd></dl>
<p>The most recent Windows installers are available from <a rel="nofollow" class="external text" href="https://ftp.gnu.org/gnu/octave/windows/">ftp.gnu.org/gnu/octave/windows/</a>.
Users are encouraged to use the latest version unless a specific feature or requirement warrants using an older version of the software. Version specific instructions and installation notes are provided below.
</p><p>Be advised that GNU Octave is primarily developed on GNU/Linux and other <a rel="nofollow" class="external text" href="https://en.wikipedia.org/wiki/POSIX">POSIX</a> conform systems. The ports of GNU Octave to Microsoft Windows use different approaches to get most of the original Octave and adapt it to Microsoft Windows idiosyncrasies (e.g. dynamic libraries, file paths, permissions, environment variables, GUI system, etc). Bear this in mind and don't panic if you get unexpected results. There are a lot of suggestions on the mailing lists for tuning your Octave installation. GNU Octave standalone ports for Windows are independently compiled using either the <a rel="nofollow" class="external text" href="http://mingw.org">MinGW</a> or Microsoft Visual Studio development environments (3.6 or before).
</p>
<div id="toc" class="toc"><div id="toctitle"><h2>Contents</h2></div>
<ul>
<li class="toclevel-1 tocsection-1"><a href="#Installers_for_Microsoft_Windows"><span class="tocnumber">1</span> <span class="toctext">Installers for Microsoft Windows</span></a>
<ul>
<li class="toclevel-2 tocsection-2"><a href="#Octave-4.2.1"><span class="tocnumber">1.1</span> <span class="toctext">Octave-4.2.1</span></a>
<ul>
<li class="toclevel-3 tocsection-3"><a href="#Packages"><span class="tocnumber">1.1.1</span> <span class="toctext">Packages</span></a></li>
</ul>
</li>
<li class="toclevel-2 tocsection-4"><a href="#Octave_4.2.1_on_cygwin"><span class="tocnumber">1.2</span> <span class="toctext">Octave 4.2.1 on cygwin</span></a>
<ul>
<li class="toclevel-3 tocsection-5"><a href="#Notes"><span class="tocnumber">1.2.1</span> <span class="toctext">Notes</span></a></li>
</ul>
</li>
</ul>
</li>
<li class="toclevel-1 tocsection-6"><a href="#Older_version_instructions"><span class="tocnumber">2</span> <span class="toctext">Older version instructions</span></a>
<ul>
<li class="toclevel-2 tocsection-7"><a href="#Older_MXE_builds"><span class="tocnumber">2.1</span> <span class="toctext">Older MXE builds</span></a>
<ul>
<li class="toclevel-3 tocsection-8"><a href="#Octave-4.2.0"><span class="tocnumber">2.1.1</span> <span class="toctext">Octave-4.2.0</span></a></li>
<li class="toclevel-3 tocsection-9"><a href="#Octave-4.0.3"><span class="tocnumber">2.1.2</span> <span class="toctext">Octave-4.0.3</span></a>
<ul>
<li class="toclevel-4 tocsection-10"><a href="#Packages_2"><span class="tocnumber">2.1.2.1</span> <span class="toctext">Packages</span></a></li>
<li class="toclevel-4 tocsection-11"><a href="#gnuplot"><span class="tocnumber">2.1.2.2</span> <span class="toctext">gnuplot</span></a></li>
</ul>
</li>
</ul>
</li>
<li class="toclevel-2 tocsection-12"><a href="#Older_MinGW_ports"><span class="tocnumber">2.2</span> <span class="toctext">Older MinGW ports</span></a>
<ul>
<li class="toclevel-3 tocsection-13"><a href="#Octave-4.0.0"><span class="tocnumber">2.2.1</span> <span class="toctext">Octave-4.0.0</span></a>
<ul>
<li class="toclevel-4 tocsection-14"><a href="#Packages_3"><span class="tocnumber">2.2.1.1</span> <span class="toctext">Packages</span></a></li>
</ul>
</li>
<li class="toclevel-3 tocsection-15"><a href="#Octave-3.8.2"><span class="tocnumber">2.2.2</span> <span class="toctext">Octave-3.8.2</span></a></li>
<li class="toclevel-3 tocsection-16"><a href="#Octave-3.6.4-mingw_.2B_octaveforge_pkgs"><span class="tocnumber">2.2.3</span> <span class="toctext">Octave-3.6.4-mingw + octaveforge pkgs</span></a>
<ul>
<li class="toclevel-4 tocsection-17"><a href="#Files_for_manual_installation"><span class="tocnumber">2.2.3.1</span> <span class="toctext">Files for manual installation</span></a></li>
<li class="toclevel-4 tocsection-18"><a href="#Manual_installation_instructions"><span class="tocnumber">2.2.3.2</span> <span class="toctext">Manual installation instructions</span></a></li>
<li class="toclevel-4 tocsection-19"><a href="#Manual_installation_instructions_for_the_Octave-forge_packages"><span class="tocnumber">2.2.3.3</span> <span class="toctext">Manual installation instructions for the Octave-forge packages</span></a></li>
<li class="toclevel-4 tocsection-20"><a href="#Optional_installation_of_Notepad.2B.2B_as_an_editor_.28recommended.29"><span class="tocnumber">2.2.3.4</span> <span class="toctext">Optional installation of Notepad++ as an editor (recommended)</span></a></li>
<li class="toclevel-4 tocsection-21"><a href="#Troubleshooting"><span class="tocnumber">2.2.3.5</span> <span class="toctext">Troubleshooting</span></a></li>
</ul>
</li>
<li class="toclevel-3 tocsection-22"><a href="#Octave-3.6.2-mingw_.2B_octaveforge_pkgs"><span class="tocnumber">2.2.4</span> <span class="toctext">Octave-3.6.2-mingw + octaveforge pkgs</span></a>
<ul>
<li class="toclevel-4 tocsection-23"><a href="#Files_for_manual_installation_2"><span class="tocnumber">2.2.4.1</span> <span class="toctext">Files for manual installation</span></a></li>
</ul>
</li>
<li class="toclevel-3 tocsection-24"><a href="#Octave-3.6.1-mingw_.2B_octaveforge_pkgs"><span class="tocnumber">2.2.5</span> <span class="toctext">Octave-3.6.1-mingw + octaveforge pkgs</span></a>
<ul>
<li class="toclevel-4 tocsection-25"><a href="#Files_for_manual_installation_3"><span class="tocnumber">2.2.5.1</span> <span class="toctext">Files for manual installation</span></a></li>
<li class="toclevel-4 tocsection-26"><a href="#Manual_installation_instructions_2"><span class="tocnumber">2.2.5.2</span> <span class="toctext">Manual installation instructions</span></a></li>
<li class="toclevel-4 tocsection-27"><a href="#Manual_installation_instructions_for_the_Octave-forge_packages_2"><span class="tocnumber">2.2.5.3</span> <span class="toctext">Manual installation instructions for the Octave-forge packages</span></a></li>
<li class="toclevel-4 tocsection-28"><a href="#Optional_installation_of_Notepad.2B.2B_as_an_editor_.28recommended.29_2"><span class="tocnumber">2.2.5.4</span> <span class="toctext">Optional installation of Notepad++ as an editor (recommended)</span></a></li>
<li class="toclevel-4 tocsection-29"><a href="#Troubleshooting_2"><span class="tocnumber">2.2.5.5</span> <span class="toctext">Troubleshooting</span></a></li>
</ul>
</li>
<li class="toclevel-3 tocsection-30"><a href="#Octave-3.6.0-mingw_.2B_octaveforge_pkgs"><span class="tocnumber">2.2.6</span> <span class="toctext">Octave-3.6.0-mingw + octaveforge pkgs</span></a>
<ul>
<li class="toclevel-4 tocsection-31"><a href="#Files_for_manual_installation_4"><span class="tocnumber">2.2.6.1</span> <span class="toctext">Files for manual installation</span></a></li>
<li class="toclevel-4 tocsection-32"><a href="#Manual_installation_instructions_3"><span class="tocnumber">2.2.6.2</span> <span class="toctext">Manual installation instructions</span></a></li>
<li class="toclevel-4 tocsection-33"><a href="#Manual_installation_instructions_for_the_Octave-forge_packages_3"><span class="tocnumber">2.2.6.3</span> <span class="toctext">Manual installation instructions for the Octave-forge packages</span></a></li>
<li class="toclevel-4 tocsection-34"><a href="#Optional_installation_of_Notepad.2B.2B_as_an_editor_.28recommended.29_3"><span class="tocnumber">2.2.6.4</span> <span class="toctext">Optional installation of Notepad++ as an editor (recommended)</span></a></li>
<li class="toclevel-4 tocsection-35"><a href="#Troubleshooting_3"><span class="tocnumber">2.2.6.5</span> <span class="toctext">Troubleshooting</span></a></li>
</ul>
</li>
<li class="toclevel-3 tocsection-36"><a href="#Octave-3.4.3-mingw_.2B_octaveforge_pkgs"><span class="tocnumber">2.2.7</span> <span class="toctext">Octave-3.4.3-mingw + octaveforge pkgs</span></a>
<ul>
<li class="toclevel-4 tocsection-37"><a href="#Troubleshooting_4"><span class="tocnumber">2.2.7.1</span> <span class="toctext">Troubleshooting</span></a></li>
</ul>
</li>
<li class="toclevel-3 tocsection-38"><a href="#Octave-3.4.2-mingw_.2B_octaveforge_pkgs"><span class="tocnumber">2.2.8</span> <span class="toctext">Octave-3.4.2-mingw + octaveforge pkgs</span></a>
<ul>
<li class="toclevel-4 tocsection-39"><a href="#Installation"><span class="tocnumber">2.2.8.1</span> <span class="toctext">Installation</span></a></li>
<li class="toclevel-4 tocsection-40"><a href="#Notes_2"><span class="tocnumber">2.2.8.2</span> <span class="toctext">Notes</span></a></li>
</ul>
</li>
<li class="toclevel-3 tocsection-41"><a href="#Octave_3.2.4_for_Windows_MinGW32"><span class="tocnumber">2.2.9</span> <span class="toctext">Octave 3.2.4 for Windows MinGW32</span></a>
<ul>
<li class="toclevel-4 tocsection-42"><a href="#Includes"><span class="tocnumber">2.2.9.1</span> <span class="toctext">Includes</span></a></li>
<li class="toclevel-4 tocsection-43"><a href="#Notes_3"><span class="tocnumber">2.2.9.2</span> <span class="toctext">Notes</span></a></li>
</ul>
</li>
</ul>
</li>
<li class="toclevel-2 tocsection-44"><a href="#Older_Octave_versions_with_Visual_Studio"><span class="tocnumber">2.3</span> <span class="toctext">Older Octave versions with Visual Studio</span></a>
<ul>
<li class="toclevel-3 tocsection-45"><a href="#Installation_2"><span class="tocnumber">2.3.1</span> <span class="toctext">Installation</span></a></li>
<li class="toclevel-3 tocsection-46"><a href="#Printing_.28installing_Ghostscript.29"><span class="tocnumber">2.3.2</span> <span class="toctext">Printing (installing Ghostscript)</span></a></li>
<li class="toclevel-3 tocsection-47"><a href="#Using_the_Visual_C.2B.2B_compiler_with_Octave"><span class="tocnumber">2.3.3</span> <span class="toctext">Using the Visual C++ compiler with Octave</span></a></li>
<li class="toclevel-3 tocsection-48"><a href="#Octave_3.6.4"><span class="tocnumber">2.3.4</span> <span class="toctext">Octave 3.6.4</span></a>
<ul>
<li class="toclevel-4 tocsection-49"><a href="#Download"><span class="tocnumber">2.3.4.1</span> <span class="toctext">Download</span></a></li>
<li class="toclevel-4 tocsection-50"><a href="#Content"><span class="tocnumber">2.3.4.2</span> <span class="toctext">Content</span></a></li>
</ul>
</li>
<li class="toclevel-3 tocsection-51"><a href="#Octave_3.6.2"><span class="tocnumber">2.3.5</span> <span class="toctext">Octave 3.6.2</span></a>
<ul>
<li class="toclevel-4 tocsection-52"><a href="#Download_2"><span class="tocnumber">2.3.5.1</span> <span class="toctext">Download</span></a></li>
<li class="toclevel-4 tocsection-53"><a href="#Content_2"><span class="tocnumber">2.3.5.2</span> <span class="toctext">Content</span></a></li>
</ul>
</li>
<li class="toclevel-3 tocsection-54"><a href="#Octave_3.6.1"><span class="tocnumber">2.3.6</span> <span class="toctext">Octave 3.6.1</span></a>
<ul>
<li class="toclevel-4 tocsection-55"><a href="#Download_3"><span class="tocnumber">2.3.6.1</span> <span class="toctext">Download</span></a></li>
<li class="toclevel-4 tocsection-56"><a href="#Content_3"><span class="tocnumber">2.3.6.2</span> <span class="toctext">Content</span></a></li>
</ul>
</li>
<li class="toclevel-3 tocsection-57"><a href="#Alternative"><span class="tocnumber">2.3.7</span> <span class="toctext">Alternative</span></a></li>
</ul>
</li>
</ul>
</li>
</ul>
</div>

<h1><span class="mw-headline" id="Installers_for_Microsoft_Windows">Installers for Microsoft Windows</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/wiki/index.php?title=Octave_for_Microsoft_Windows&amp;action=edit&amp;section=1" title="Edit section: Installers for Microsoft Windows">edit</a><span class="mw-editsection-bracket">]</span></span></h1>
<h3><span class="mw-headline" id="Octave-4.2.1">Octave-4.2.1</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/wiki/index.php?title=Octave_for_Microsoft_Windows&amp;action=edit&amp;section=2" title="Edit section: Octave-4.2.1">edit</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>The easiest way to install GNU Octave on Microsoft Windows is using <a rel="nofollow" class="external text" href="http://hg.octave.org/mxe-octave/">MXE</a> builds. For the current 4.2.1 release both 32-bit and 64-bit installers and zip archived packages can be found at <a rel="nofollow" class="external text" href="https://ftp.gnu.org/gnu/octave/windows/">ftp.gnu.org/gnu/octave/windows/</a>. 
</p><p>For executable installers the user can simply run the downloaded file and follow the onscreen installation prompts.  It is recommended that the installation path not include spaces or non-ASCII characters. Shortcuts to the program will be automatically created. 
</p><p>For the zip-file archives, the user should extract the file content to a directory on the harddrive (such as C:\Octave). Manual shortcuts can then be created to either the octave.bat or octave.vbs files in the main installation directory. 
</p>
<h4><span class="mw-headline" id="Packages">Packages</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/wiki/index.php?title=Octave_for_Microsoft_Windows&amp;action=edit&amp;section=3" title="Edit section: Packages">edit</a><span class="mw-editsection-bracket">]</span></span></h4>
<p>A selection of pre-built octave-forge packages are prepared for all versions of the official release. If you installed Octave using the executable installer you can confirm the package list by typing the command below from the Octave command prompt:
</p>
<pre> &gt;&gt; pkg list
</pre>
<p>If you instead installed Octave from the .zip archive, you need to first rebuild the package list on your local machine. (The command above will produce a blank output and packages will be inaccessible before rebuilding.) Do this by typing the following command:
</p>
<pre>  &gt;&gt; pkg rebuild
</pre>
<p>Packages can be updated by running
</p>
<pre>  &gt;&gt; pkg update
</pre>
<p>Other packages can be installed by running
</p>
<pre>  &gt;&gt; pkg install -forge &lt;package name&gt;
</pre>
<p>To manually install a new or updated package version, the package file can be downloaded from the <a rel="nofollow" class="external text" href="https://octave.sourceforge.io/packages.php">Octave-Forge website</a>to the working directory and can be installed using:
</p>
<pre>  &gt;&gt; pkg install package_file_name.tar.gz
</pre>
<p>For detailed instruction of installing Octave-Forge packages is shown at <a rel="nofollow" class="external text" href="http://wiki.octave.org/Octave-Forge">Octave-Forge</a>
</p><p><br />
<i>Note that a security related issue in Windows XP currently prevents Octave from automatically retrieving packages from the website for installation or updates when running under that Operating System, and manual package installation is necessary to update or install new packages.</i>
</p>
<h2><span class="mw-headline" id="Octave_4.2.1_on_cygwin">Octave 4.2.1 on cygwin</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/wiki/index.php?title=Octave_for_Microsoft_Windows&amp;action=edit&amp;section=4" title="Edit section: Octave 4.2.1 on cygwin">edit</a><span class="mw-editsection-bracket">]</span></span></h2>
<ul><li><b>Web-Site:</b> <a rel="nofollow" class="external free" href="http://cygwin.com">http://cygwin.com</a> </li>
<li><b>Maintainer:</b> Marco Atzeri </li>
<li><b>Latest release:</b> 2017-04-06</li></ul>
<ul><li>Latest packages:</li></ul>
<dl><dd>octave-4.2.1-1</dd>
<dd>Its announce on cygwin mailing list <a rel="nofollow" class="external autonumber" href="https://cygwin.com/ml/cygwin-announce/2017-04/msg00017.html">[1]</a></dd></dl>
<dl><dd>octave-forge packages have each  a cygwin package</dd>
<dd>Its announce on cygwin mailing list <a rel="nofollow" class="external autonumber" href="https://cygwin.com/ml/cygwin-announce/2017-01/msg00078.html">[2]</a></dd>
<dd> Full cygwin package list is available here <a rel="nofollow" class="external autonumber" href="https://cygwin.com/packages/">[3]</a></dd>
<dd> At today 2017-04-06, 64 forge packages are available. </dd></dl>
<ul><li>To install&#160;: </li></ul>
<dl><dd>  run cygwin setup-x86.exe (for cygwin 32 bit) or  setup-x86_64.exe (for cygwin 64 bit) and select them in the Math category. </dd>
<dd>  All the package dependencies will be also installed.</dd></dl>
<dl><dd>Graphics is based on X and to plot you will need to start octave within xterm (or similar).</dd>
<dd>  I recommend to install "xinit", "xlaunch" and "gnuplot". These packages will pull all the functional Xserver. </dd>
<dd>  Otherwise the only graphics will be ASCII art&#160;;-)</dd></dl>
<h3><span class="mw-headline" id="Notes">Notes</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/wiki/index.php?title=Octave_for_Microsoft_Windows&amp;action=edit&amp;section=5" title="Edit section: Notes">edit</a><span class="mw-editsection-bracket">]</span></span></h3>
<ul><li>When building from development source (default branch) </li></ul>
<dl><dd>    "make check" </dd>
<dd>passes almost all the tests. Only, and not substantial, failures are:</dd></dl>
<pre>   
    /pub/hg/octave/src/data.cc : 8 failures due to different handling of complex Inf on sort
    /pub/hg/octave/src/syscalls.cc: 1 failure on fork. This disappears when octave is installed
    /pub/hg/octave/scripts/sparse/svds.m: 1 failure due to test sensitivity on starting point. See 
    https://mailman.cae.wisc.edu/pipermail/octave-maintainers/2011-September/024715.html
</pre>
<ul><li>To build from cygwin source package, you need to install "cygport" and the relevant development libraries</li></ul>
<pre>    
     $ tar -xf octave-4.2.0-1-src.tar.xz 
     $ cygport octave.cygport almostall
</pre>
<dl><dd>see cygport documentation for further info.</dd></dl>
<h1><span class="mw-headline" id="Older_version_instructions">Older version instructions</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/wiki/index.php?title=Octave_for_Microsoft_Windows&amp;action=edit&amp;section=6" title="Edit section: Older version instructions">edit</a><span class="mw-editsection-bracket">]</span></span></h1>
<p><i>Note that the instructions below may contain outdated links or instructions that are no longer relevant to current versions</i>
</p>
<h2><span class="mw-headline" id="Older_MXE_builds">Older MXE builds</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/wiki/index.php?title=Octave_for_Microsoft_Windows&amp;action=edit&amp;section=7" title="Edit section: Older MXE builds">edit</a><span class="mw-editsection-bracket">]</span></span></h2>
<h3><span class="mw-headline" id="Octave-4.2.0">Octave-4.2.0</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/wiki/index.php?title=Octave_for_Microsoft_Windows&amp;action=edit&amp;section=8" title="Edit section: Octave-4.2.0">edit</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>The instructions for Octave 4.2.0 are the same as for Octave 4.2.1 above. However, note that version 4.2.0 has a bug that prevents it from automatically retrieving packages from the <a rel="nofollow" class="external text" href="https://octave.sourceforge.io/packages.php">Octave-Forge website</a> for installation or updates. Manual package installation is necessary with this version to update or install new packages on Windows.
</p><p>To manually install a new or updated package version, the package file can be downloaded from the <a rel="nofollow" class="external text" href="https://octave.sourceforge.io/packages.php">Octave-Forge website</a> to the working directory and can be installed using:
</p>
<pre>  &gt;&gt; pkg install package_file_name.tar.gz
</pre>
<p>Detailed instruction of installing Octave-Forge packages is shown at <a rel="nofollow" class="external text" href="http://wiki.octave.org/Octave-Forge">Octave-Forge</a>
</p>
<h3><span class="mw-headline" id="Octave-4.0.3">Octave-4.0.3</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/wiki/index.php?title=Octave_for_Microsoft_Windows&amp;action=edit&amp;section=9" title="Edit section: Octave-4.0.3">edit</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>The easiest way to install GNU Octave on Microsoft Windows is using <a rel="nofollow" class="external text" href="http://hg.octave.org/mxe-octave/">MXE</a> builds. For the current 4.0. release installers and zip archived packages can be found at <a rel="nofollow" class="external text" href="https://ftp.gnu.org/gnu/octave/windows/">ftp.gnu.org/gnu/octave/windows/</a>. Unofficial 64 bit binary is available at "<a rel="nofollow" class="external text" href="http://www.tatsuromatsuoka.com/octave/Eng/Win/">File list of Octave for Windows</a>". 
</p><p>Known issue specific to windows version 4.0
</p>
<ol><li>Both cli and gui cannot handle path name of which contains non-ascii characters. (For 3.8, cli can handle non-ascii code if codepage is properly set to the machine locale)</li>
<li>nan package cannot be installed by "pkg install" commands. Workaround is to execute "setenv CC gcc" before "pkg install".</li></ol>
<p>Known issue of octave starup
</p>
<ol><li> octave sometimes will fail to startup because of internal troubles. On such occasion, please try to delete .config\octave folder by which USERPROFILE environmental variable points. (One of the way to see value of USERPROFILE, startup command prompt and type "set") </li></ol>
<h4><span class="mw-headline" id="Packages_2">Packages</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/wiki/index.php?title=Octave_for_Microsoft_Windows&amp;action=edit&amp;section=10" title="Edit section: Packages">edit</a><span class="mw-editsection-bracket">]</span></span></h4>
<p>Pre-built octave-forge packages are prepared for official release. If you installed Octave 4.0.3 using the executable installer you can confirm the package list by typing the command below from the Octave command prompt:
</p>
<pre> &gt;&gt; pkg list
</pre>
<p>If you instead installed Octave from the .zip archive, you need to first rebuild the package list on your local machine. (The command above will produce a blank output.) Do this by typing the following command:
</p>
<pre> &gt;&gt; pkg rebuild
</pre>
<p><br />
Other packages can be installed by
</p>
<pre>  &gt;&gt; pkg install -forge &lt;package name&gt;
</pre>
<p>For detailed instruction of installing Octave-Forge packages is shown at <a rel="nofollow" class="external text" href="http://wiki.octave.org/Octave-Forge">Octave-Forge</a>
</p><p>For 64 bit binary distributed from the unofficial site, pre-built package are not prepared.
Please follow the instruction on the distribution page.
</p>
<h4><span class="mw-headline" id="gnuplot">gnuplot</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/wiki/index.php?title=Octave_for_Microsoft_Windows&amp;action=edit&amp;section=11" title="Edit section: gnuplot">edit</a><span class="mw-editsection-bracket">]</span></span></h4>
<p>Current octave for windows ships a not full featured gnuplot. Therefore you cannot use the full features of gnuplot graphics toolkit  
(e.g. cannot use cairo based devise like "-dpdfcairo"). If you want use it, please use the following instruction
</p><p>Download and install gnuplot if you do not have it. You can find the windows installer in the "<a rel="nofollow" class="external text" href="https://sourceforge.net/projects/gnuplot/files/gnuplot/">gnuplot web site for Files section</a>" The latest version is 5.0.3.
</p><p>We can find path of USERPROFILE directory by 
</p>
<pre> &gt;&gt; getenv USERPROFILE
</pre>
<p>make an .octaverc file in USERPROFILE directory by your favorite text editor and set gnuplot_binary e.g.
</p>
<pre> gnuplot_binary 'C:\Program Files (x86)\gnuplot\bin\gnuplot.exe'
</pre>
<p>Please do not forget to quote the path name by single quote (') if name of which has (a) white space(s).
gnuplot ver. 5 supports windows, wxt and qt terminal. On octave, windows terminal is default.
If you want change it to wxt terminal, execute
</p>
<pre>&gt;&gt; setenv GNUTERM wxt
</pre>
<p>You can of course describe it in .octaverc.
</p>
<h2><span class="mw-headline" id="Older_MinGW_ports">Older MinGW ports</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/wiki/index.php?title=Octave_for_Microsoft_Windows&amp;action=edit&amp;section=12" title="Edit section: Older MinGW ports">edit</a><span class="mw-editsection-bracket">]</span></span></h2>
<h3><span class="mw-headline" id="Octave-4.0.0">Octave-4.0.0</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/wiki/index.php?title=Octave_for_Microsoft_Windows&amp;action=edit&amp;section=13" title="Edit section: Octave-4.0.0">edit</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>The easiest way to install GNU Octave on Microsoft Windows is using <a rel="nofollow" class="external text" href="http://hg.octave.org/mxe-octave/">MXE</a> builds. For the current 4.0.0 release installers can be found at <a rel="nofollow" class="external text" href="https://ftp.gnu.org/gnu/octave/windows/">ftp.gnu.org</a>.
</p><p>Known issues specific to windows version 4.0.0.
</p>
<ol><li>Both cli and gui cannot handle path name of which contains non-ascii characters. (For 3.8, cli can handle non-ascii code if codepage is properly set to the machine locale)</li></ol>
<h4><span class="mw-headline" id="Packages_3">Packages</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/wiki/index.php?title=Octave_for_Microsoft_Windows&amp;action=edit&amp;section=14" title="Edit section: Packages">edit</a><span class="mw-editsection-bracket">]</span></span></h4>
<p>Pre-build octave-forge packages are not prepared from octave-3.8 or later for windows. You can install some octave-forge packages using archived sources and build script. However, small flaws exist in current octave-4.0.0_0 distribution. Before install, correct version number of general and signal packages version to 2.0.0 and 1.3.2, respectively and comment out install io package as "#try_install io-2.2.7.tar.gz" in C:\octave\octave-4.0.0\src\build_packages.m". Then execute
</p>
<pre>   &gt;&gt; cd C:\octave\octave-4.0.0\src
   &gt;&gt; build_packages
   &gt;&gt; pkg install -forge io
</pre>
<p>Other octave-forge packages may be installed by
</p>
<pre>  &gt;&gt; pkg install -forge (package name)
</pre>
<p>For detailed instruction of installing Octave-Forge packages is shown at <a rel="nofollow" class="external text" href="http://wiki.octave.org/Octave-Forge">Octave-Forge</a>
</p>
<h3><span class="mw-headline" id="Octave-3.8.2">Octave-3.8.2</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/wiki/index.php?title=Octave_for_Microsoft_Windows&amp;action=edit&amp;section=15" title="Edit section: Octave-3.8.2">edit</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>The site that provide previous version of octave for windows of ver. 3.8.2 (unofficial build using mxe-octave) is closed.
A mirrored binary can be downloaded at <a rel="nofollow" class="external text" href="http://www.tatsuromatsuoka.com/octave/Eng/Win/">File list of Octave for Windows</a>  
</p><p>If you got any problems while running Windows 8 or libstdc++-6.dll errors, try this octave-gui.bat file and place it into your Octave folder (e.g. `C:/octave/octave-3.8.2`).
</p>
<pre>   @echo off
   set PATH=%CD%\bin\
   start octave --force-gui -i --line-editing
   exit
</pre>
<h3><span class="mw-headline" id="Octave-3.6.4-mingw_.2B_octaveforge_pkgs">Octave-3.6.4-mingw + octaveforge pkgs</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/wiki/index.php?title=Octave_for_Microsoft_Windows&amp;action=edit&amp;section=16" title="Edit section: Octave-3.6.4-mingw + octaveforge pkgs">edit</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>For build instructions before octave-3.8 see <a href="/Octave_for_MinGW" title="Octave for MinGW">Octave_for_MinGW</a> or the Octave-Forge repository <a rel="nofollow" class="external autonumber" href="http://sourceforge.net/projects/octave/files/Octave%20Windows%20binaries/">[4]</a>.
</p>
<h4><span class="mw-headline" id="Files_for_manual_installation">Files for manual installation</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/wiki/index.php?title=Octave_for_Microsoft_Windows&amp;action=edit&amp;section=17" title="Edit section: Files for manual installation">edit</a><span class="mw-editsection-bracket">]</span></span></h4>
<ol><li>Octave-3.6.4-mingw binaries tree
<ul><li> Octave3.6.4_gcc4.6.2_20130329.7z - MD5:46BD238C664E17B4B25E72A11C38163F</li></ul>
<dl><dd> This is a 7z archive which includes a directory tree of all the binaries and libraries required for a complete octave installation (excluding octaveforge packages)</dd>
<dd></dd>
<dd> It can be downloaded from <a rel="nofollow" class="external text" href="http://sourceforge.net/projects/octave/files/Octave%20Windows%20binaries/Octave%203.6.4%20for%20Windows%20MinGW%20installer/">Octave Forge</a></dd>
<dd></dd></dl>
<ul><li> The archive include:</li></ul>
<dl><dd><ul><li> octave-3.6.4 including PDF documentation (built using Tatsuro Matsuka OctaveLibs and gplibs <a rel="nofollow" class="external free" href="http://www.tatsuromatsuoka.com/octave/Eng/Win/">http://www.tatsuromatsuoka.com/octave/Eng/Win/</a>)</li>
<li> mingw32 + msys tool chain</li>
<li> gnuplot-4.6.0</li>
<li> fig2dev-3.2.5c</li>
<li> ghostscript-9.0.7</li>
<li> pstoedit-3.61</li>
<li> OpenBLAS-v2.6.0 and ATLAS-3.8.4 based libblas alternatives</li></ul></dd>
<dd></dd></dl>
<ul><li><b>Maintainer:</b> Nitzan Arazi</li>
<li><b>Latest update:</b> 2013-03-29</li></ul></li>
<li>Octaveforge pkgs, built for Octave-3.6.4-mingw
<ul><li> Octave3.6.4_gcc4.6.2_pkgs_20130331.7z - MD5:8AB5F5F88E7267FB1E47BABC29FD7FE0</li></ul>
<dl><dd></dd>
<dd> It can be downloaded from <a rel="nofollow" class="external text" href="http://sourceforge.net/projects/octave/files/Octave%20Windows%20binaries/Octave%203.6.4%20for%20Windows%20MinGW%20installer/">Octave Forge</a></dd>
<dd></dd>
<dd> This is a 7z archive which includes additional binaries and libraries for a set of octaveforge packages.</dd>
<dd></dd></dl>
<ul><li> The included packages are:</li></ul>
<dl><dd><ul><li> actuarial-1.1.0</li>
<li> ad-1.0.6_patched</li>
<li> audio-1.1.4</li>
<li> benchmark-1.1.1</li>
<li> bim-1.1.1</li>
<li> bioinfo-0.1.2</li>
<li> cgi-0.1.0</li>
<li> civil-engineering-1.0.7</li>
<li> combinatorics-2.0.0</li>
<li> communications-1.1.1_patched</li>
<li> control-2.4.2</li>
<li> data-smoothing-1.3.0</li>
<li> dataframe-0.9.1</li>
<li> econometrics-1.1.1</li>
<li> fenv-0.1.0</li>
<li> financial-0.4.0</li>
<li> fits-1.0.2</li>
<li> fpl-1.3.3</li>
<li> fuzzy-logic-toolkit-0.4.2</li>
<li> ga-0.10.0</li>
<li> general-1.3.2</li>
<li> generate_html-0.1.5</li>
<li> geometry-1.6.0</li>
<li> gnuplot-1.0.1</li>
<li> gsl-1.0.8</li>
<li> ident-1.0.7</li>
<li> image-2.0.0</li>
<li> informationtheory-0.1.8</li>
<li> integration-1.0.7_svn20120128</li>
<li> io-1.2.1</li>
<li> irsa-1.0.7</li>
<li> java-1.2.9_patched</li>
<li> linear-algebra-2.2.0</li>
<li> lssa-0.1.2</li>
<li> mapping-1.0.7</li>
<li> mechanics-1.3.1</li>
<li> miscellaneous-1.2.0</li>
<li> missing-functions-1.0.2</li>
<li> msh-1.0.6</li>
<li> multicore-0.2.15</li>
<li> nan-2.5.5</li>
<li> ncarray-1.0.0</li>
<li> nlwing2-1.2.0</li>
<li> nnet-0.1.13</li>
<li> nurbs-1.3.6</li>
<li> ocs-0.1.3_svn20120128_patched</li>
<li> octcdf-1.1.5</li>
<li> octclip-1.0.3</li>
<li> octgpr-1.2.0</li>
<li> octproj-1.1.2</li>
<li> odebvp-1.0.6</li>
<li> odepkg-0.8.4</li>
<li> optim-1.2.2</li>
<li> optiminterp-0.3.4</li>
<li> outliers-0.13.9</li>
<li> physicalconstants-1.0.0</li>
<li> plot-1.1.0</li>
<li> quaternion-2.0.2</li>
<li> queueing-1.2.1</li>
<li> secs1d-0.0.9</li>
<li> secs2d-0.0.8</li>
<li> secs3d-0.0.1</li>
<li> signal-1.2.1</li>
<li> simp-1.1.0</li>
<li> sockets-1.0.8_patched</li>
<li> specfun-1.1.0</li>
<li> special-matrix-1.0.7</li>
<li> splines-1.1.2</li>
<li> statistics-1.2.0</li>
<li> strings-1.1.0_patched</li>
<li> struct-1.0.10</li>
<li> symband-1.0.10</li>
<li> symbolic-1.1.0</li>
<li> tcl-octave-0.1.8</li>
<li> time-2.0.0</li>
<li> tsa-4.2.4</li>
<li> video-1.0.2_patched</li>
<li> vrml-1.0.13_patched</li>
<li> windows-1.2.1</li>
<li> xraylib-1.0.8</li>
<li> zenity-0.5.7</li></ul></dd>
<dd></dd></dl>
<ul><li><b>Maintainer:</b> Nitzan Arazi</li>
<li><b>Latest update:</b> 2013-03-31</li></ul></li></ol>
<h4><span class="mw-headline" id="Manual_installation_instructions">Manual installation instructions</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/wiki/index.php?title=Octave_for_Microsoft_Windows&amp;action=edit&amp;section=18" title="Edit section: Manual installation instructions">edit</a><span class="mw-editsection-bracket">]</span></span></h4>
<ol><li>Create an installation directory of which doesn't have space chars (i.e. C:\Octave\Octave3.6.4_gcc4.6.2\). This directory is referred hereafter as &lt;your_install_dir&gt;.</li>
<li>Extract the complete directories tree from Octave3.6.4_gcc4.6.2_20130329.7z to the installation directory  keeping the original directory structure as in the archive (you can use 7-zip tool from <a rel="nofollow" class="external free" href="http://www.7-zip.org/">http://www.7-zip.org/</a>).  Note that the archive contains Octave3.6.4_gcc4.6.2 folder, so you want to extract to the *parent* of &lt;your_install_dir&gt;.</li>
<li>Copy octave3.6.4_gcc4.6.2.lnk to any convenient location and edit its properties respectively to point to &lt;your_install_dir&gt;\bin\octave.exe and &lt;your_install_dir&gt;\doc\octave\icons\octave-logo.ico as an icon
<dl><dd>Note for windows 8 users: As a workaround for a gnulib windows 8 compatibility bug, add command line switches ' -i --line-editing' to the octave.exe shortcut (i.e. &lt;octave-dir&gt;\bin\octave.exe -i --line-editing)</dd></dl></li>
<li>Copy octave3.6.4_gcc4.6.2_docs.lnk to any convenient location and edit its properties respectively to point to &lt;your_install_dir&gt;\doc\octave and &lt;your_install_dir&gt;\doc\octave\icons\octave-logo.ico as an icon.
<dl><dd>At this point you can:</dd>
<dd> a. Launch and use octave by double-clicking the copied octave3.6.4_gcc4.6.2.lnk</dd>
<dd> b. Access and browse the documentation files by double-clicking the copied octave3.6.4_gcc4.6.2_docs.lnk</dd></dl></li>
<li>Optional libblas dll replacement for optimizing the linear algebra subroutines for your CPU:
<dl><dd><ul><li> The default configuration should automatically detect your cpu architecture and select an appropriately tuned library. </li>
<li> In case the default library is not properly functioning on the actual cpu, or you wish to explore the performance with another library, you can manually replace the default one by performing the following procedures (where libblas.dll.&lt;libblas_source&gt; should be replaced with the full name of the desired library from the list below these instructions):
<ol><li> Exit octave</li>
<li> Delete &lt;your_install_dir&gt;\bin\libblas.dll</li>
<li> Make a copy of the desired &lt;your_install_dir&gt;\bin\libblas.dll.&lt;libblas_source&gt;</li>
<li> Rename the copy of the desired &lt;your_install_dir&gt;\bin\libblas.dll.&lt;libblas_source&gt; to libblas.dll</li></ol></li>
<li>  The following is a list of the available libblas.dll.&lt;libblas_source&gt; options:
<ol><li> libblas.dll.ref - reference blas implementation, very slow but most stable</li>
<li> libblas.dll.OpenBLAS-v2.6.0-0-54e7b37_dynamicarch_nt4 - Openblas based, up to 4 threads, detects cpu architecture and selects respective lib</li>
<li> libblas.dll.OpenBLAS-v2.6.0-0-54e7b37_nehalem_nt4 - Openblas based, up to 4 threads, tuned for nehalem cpu architecture</li>
<li> libblas.dll.OpenBLAS-v2.6.0-0-54e7b37_core2_nt4 - Openblas based, up to 4 threads, tuned for core2 cpu architecture</li>
<li> libblas.dll.OpenBLAS-v2.6.0-0-54e7b37_sandybridge_nt4 - Openblas based, up to 4 threads, tuned for sandybridge cpu architecture</li>
<li> libblas.dll.OpenBLAS-v2.6.0-0-54e7b37_atom_nt4 - Openblas based, up to 4 threads, tuned for atom cpu architecture</li>
<li> libblas.dll.altas-3.8.4_ht-pentium - ATLAS based libblass, tuned for older ht-pentium (compiled by Tatsuro Matsuka)</li>
<li> libblas.dll.altas-3.8.4_corei5 - ATLAS based libblass, tuned for older core i5 cpu (compiled by Tatsuro Matsuka)</li></ol></li></ul></dd></dl></li></ol>
<h4><span class="mw-headline" id="Manual_installation_instructions_for_the_Octave-forge_packages">Manual installation instructions for the Octave-forge packages</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/wiki/index.php?title=Octave_for_Microsoft_Windows&amp;action=edit&amp;section=19" title="Edit section: Manual installation instructions for the Octave-forge packages">edit</a><span class="mw-editsection-bracket">]</span></span></h4>
<ol><li>Extract the complete directories tree from Octave3.6.4_gcc4.6.2_pkgs_20130331.7z to the installation directory (&lt;your_install_dir&gt;) keeping the original directory structure as in the archive (you can use 7zip tool from <a rel="nofollow" class="external free" href="http://www.7-zip.org/">http://www.7-zip.org/</a>).</li>
<li>In order to update octave_packages database with your installation tree and auto-load most packages (excluding 'ad' and 'windows' which may crash octave when loaded and 'clear all' is executed), launch Octave and execute the following five rebuild commands from the octave console:</li></ol>
<pre>   pkg rebuild -auto
   pkg rebuild -noauto ad&#160;% may crash octave when loaded and 'clear all' is executed
   pkg rebuild -noauto nan&#160;% shadows many statistics functions
   pkg rebuild -noauto gsl&#160;% shadows some core functions
   pkg rebuild -auto java
</pre>
<ol><li><dl><dd> Last pkg rebuild command is required in order for the java pkg entry to be moved to the top of &lt;your_install_dir&gt;\share\octave\octave_packages db file - thus java pkg is loaded before io pkg is loaded, and io pkg related jars are added to java class path.</dd></dl></li>
<li>You can optionally adjust your installed packages status per your specific needs and usage by executing  the following commands:</li></ol>
<dl><dd> a. To interactively load or unload a package</dd></dl>
<pre>pkg load &lt;pkg_name&gt;
</pre>
<dl><dd> or</dd></dl>
<pre>pkg unload &lt;pkg_name&gt;
</pre>
<dl><dd> b. To disable auto-load for specific pkg &lt;pkg_name&gt;</dd></dl>
<pre>pkg rebuild -noauto &lt;pkg_name&gt;
</pre>
<dl><dd> c. To enable auto-load for specific pkg &lt;pkg_name&gt;</dd></dl>
<pre>pkg rebuild -auto &lt;pkg_name&gt;
</pre>
<dl><dd> d. To completely uninstall a package</dd></dl>
<pre>pkg uninstall &lt;pkg_name&gt;
</pre>
<h4><span class="mw-headline" id="Optional_installation_of_Notepad.2B.2B_as_an_editor_.28recommended.29">Optional installation of Notepad++ as an editor (recommended)</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/wiki/index.php?title=Octave_for_Microsoft_Windows&amp;action=edit&amp;section=20" title="Edit section: Optional installation of Notepad++ as an editor (recommended)">edit</a><span class="mw-editsection-bracket">]</span></span></h4>
<ol><li>Download recent Notepad++ installation package from <a rel="nofollow" class="external free" href="http://notepad-plus-plus.org/">http://notepad-plus-plus.org/</a> and install it on your system.</li>
<li>Edit &lt;your_install_dir&gt;\share\octave\site\m\startup\octaverc and un-comment the line which sets octave default editor:</li></ol>
<pre>EDITOR('C:\Program Files\Notepad++\notepad++.exe');
edit ("editor", sprintf ("%s&#160;%%s", EDITOR ()))
edit mode async
</pre>
<dl><dd> Note: win64 users may use the w32 programs directory:</dd></dl>
<pre>EDITOR('C:\Program Files (x86)\Notepad++\notepad++.exe');
</pre>
<dl><dd> Note: You may adjust the above line for the location of notepad++.exe as installed on your system.</dd></dl>
<h4><span class="mw-headline" id="Troubleshooting">Troubleshooting</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/wiki/index.php?title=Octave_for_Microsoft_Windows&amp;action=edit&amp;section=21" title="Edit section: Troubleshooting">edit</a><span class="mw-editsection-bracket">]</span></span></h4>
<p>Upon launching, some warnings may be displayed. These warnings can be ignored.
</p>
<ul><li>Following warnings are about missing external tools which may reduce some of the functions of some packages. These external tools are not provided by the 7z archives in sourceforge. </li></ul>
<pre>warning: gmsh does not seem to be present some functionalities will be disabled 
warning: dx does not seem to be present some functionalities will be disabled 
</pre>
<ul><li>Following warning is about fstat function of the statistics package that overloads the old (to be deprecated) fstat function of octave-3.6.4 </li></ul>
<pre>warning: function C:\Octave\3.6.4_gcc-4.6.2\share\octave\packages\statistics-1.2.0\fstat.m shadows a core library function
</pre>
<h3><span class="mw-headline" id="Octave-3.6.2-mingw_.2B_octaveforge_pkgs">Octave-3.6.2-mingw + octaveforge pkgs</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/wiki/index.php?title=Octave_for_Microsoft_Windows&amp;action=edit&amp;section=22" title="Edit section: Octave-3.6.2-mingw + octaveforge pkgs">edit</a><span class="mw-editsection-bracket">]</span></span></h3>
<h4><span class="mw-headline" id="Files_for_manual_installation_2">Files for manual installation</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/wiki/index.php?title=Octave_for_Microsoft_Windows&amp;action=edit&amp;section=23" title="Edit section: Files for manual installation">edit</a><span class="mw-editsection-bracket">]</span></span></h4>
<ol><li>Octave-3.6.2-mingw binaries tree
<ul><li> Octave362_gcc462_20120609.7z - MD5:1FA1F6191C151D527830722F71822312</li></ul>
<dl><dd> This is a 7z archive which includes a directory tree of all the binaries and libraries required for a complete octave installation (excluding octaveforge packages)</dd>
<dd></dd>
<dd> It can be downloaded from <a rel="nofollow" class="external text" href="http://sourceforge.net/projects/octave/files/Octave%20Windows%20binaries/Octave%203.6.2%20for%20Windows%20MinGW%20installer/">Octave Forge</a></dd></dl></li></ol>
<h3><span class="mw-headline" id="Octave-3.6.1-mingw_.2B_octaveforge_pkgs">Octave-3.6.1-mingw + octaveforge pkgs</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/wiki/index.php?title=Octave_for_Microsoft_Windows&amp;action=edit&amp;section=24" title="Edit section: Octave-3.6.1-mingw + octaveforge pkgs">edit</a><span class="mw-editsection-bracket">]</span></span></h3>
<h4><span class="mw-headline" id="Files_for_manual_installation_3">Files for manual installation</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/wiki/index.php?title=Octave_for_Microsoft_Windows&amp;action=edit&amp;section=25" title="Edit section: Files for manual installation">edit</a><span class="mw-editsection-bracket">]</span></span></h4>
<ol><li>Octave-3.6.1-mingw binaries tree
<ul><li> Octave3.6.1_gcc4.6.2_20120303.7z - MD5:294B99B5E4D47CAA83E8940EB2918D10</li></ul>
<dl><dd> This is a 7z archive which includes a directory tree of all the binaries and libraries required for a complete octave installation (excluding octaveforge packages)</dd>
<dd></dd>
<dd> It can be downloaded from <a rel="nofollow" class="external text" href="http://sourceforge.net/projects/octave/files/Octave%20Windows%20binaries/Octave%203.6.1%20for%20Windows%20MinGW%20installer/">Octave Forge</a></dd>
<dd></dd></dl>
<ul><li> The archive include:</li></ul>
<dl><dd><ul><li> octave-3.6.1 including PDF documentation (built by Tatsuro Matsuka <a rel="nofollow" class="external free" href="http://www.tatsuromatsuoka.com/octave/Eng/Win/">http://www.tatsuromatsuoka.com/octave/Eng/Win/</a>)</li>
<li> OpenBLAS-r0.1alpha2.5 and ATLAS-3.8.4 based libblas altenatives</li>
<li> mingw32 + msys tool chain</li>
<li> gnuplot-4.4.4</li>
<li> fig2dev-3.2.5c</li>
<li> ghostscript-9.0.4</li>
<li> pstoedit-3.60</li></ul></dd>
<dd></dd></dl>
<ul><li><b>Maintainer:</b> Nitzan Arazi</li>
<li><b>Latest update:</b> 2012-03-03</li></ul></li>
<li>Octaveforge pkgs, built for Octave-3.6.1-mingw
<ul><li> Octave3.6.1_gcc4.6.2_pkgs_20120303.7z - MD5:44A85F26A8925FEC5E1F0856408C9DD5</li></ul>
<dl><dd></dd>
<dd> It can be downloaded from <a rel="nofollow" class="external text" href="http://sourceforge.net/projects/octave/files/Octave%20Windows%20binaries/Octave%203.6.1%20for%20Windows%20MinGW%20installer/">Octave Forge</a></dd>
<dd></dd>
<dd> This is a 7z archive which includes additional binaries and libraries for a set of octaveforge packages.</dd>
<dd></dd></dl>
<ul><li> The included packages are:</li></ul>
<dl><dd><ul><li> actuarial-1.1.0</li>
<li> ad-1.0.6_patched</li>
<li> audio-1.1.4</li>
<li> benchmark-1.1.1</li>
<li> bim-1.0.2</li>
<li> bioinfo-0.1.2</li>
<li> civil-engineering-1.0.7</li>
<li> combinatorics-1.0.9</li>
<li> communications-1.1.0_svn20120127_patched</li>
<li> control-2.2.5</li>
<li> data-smoothing-1.3.0</li>
<li> dataframe-0.9.1</li>
<li> econometrics-1.0.8</li>
<li> fenv-0.1.0</li>
<li> financial-0.3.2</li>
<li> fpl-1.2.0</li>
<li> fuzzy-logic-toolkit-0.3.0</li>
<li> ga-0.9.8</li>
<li> general-1.2.2</li>
<li> generate_html-0.1.3</li>
<li> geometry-1.4.0</li>
<li> gnuplot-1.0.1</li>
<li> gpc-0.1.7</li>
<li> gsl-1.0.8</li>
<li> ident-1.0.7</li>
<li> image-1.0.15</li>
<li> informationtheory-0.1.8</li>
<li> integration-1.0.7_svn20120128</li>
<li> io-1.0.17</li>
<li> irsa-1.0.7</li>
<li> java-1.2.8_patched</li>
<li> linear-algebra-2.1.0_svn20120225</li>
<li> mapping-1.0.7</li>
<li> mechanics-1.2.0</li>
<li> miscellaneous-1.0.11_svn20120127</li>
<li> missing-functions-1.0.2</li>
<li> msh-1.0.2</li>
<li> multicore-0.2.15</li>
<li> nan-2.5.2</li>
<li> nlwing2-1.2.0</li>
<li> nnet-0.1.13</li>
<li> nurbs-1.3.5</li>
<li> ocs-0.1.3_svn20120128_patched</li>
<li> octclip-1.0.0</li>
<li> octgpr-1.2.0</li>
<li> odebvp-1.0.6</li>
<li> odepkg-0.8.0_svn20120127</li>
<li> optim-1.0.17_patched</li>
<li> optiminterp-0.3.4_svn20120128_patched</li>
<li> outliers-0.13.9</li>
<li> physicalconstants-0.1.7</li>
<li> plot-1.1.0</li>
<li> quaternion-1.0.0</li>
<li> queueing-1.0.0</li>
<li> secs1d-0.0.8</li>
<li> secs2d-0.0.8</li>
<li> secs3d-0.0.1</li>
<li> signal-1.1.2</li>
<li> simp-1.1.0</li>
<li> sockets-1.0.7_svn20120128_patched</li>
<li> specfun-1.1.0</li>
<li> special-matrix-1.0.7</li>
<li> spline-gcvspl-1.0.8</li>
<li> splines-1.0.7</li>
<li> statistics-1.1.0_svn20120128</li>
<li> strings-1.0.7</li>
<li> struct-1.0.9</li>
<li> symband-1.0.10</li>
<li> symbolic-1.1.0</li>
<li> tcl-octave-0.1.8</li>
<li> time-1.0.9</li>
<li> tsa-4.1.1</li>
<li> video-1.0.2_patched</li>
<li> vrml-1.0.12_svn20111014_patched</li>
<li> windows-1.1.0</li>
<li> xraylib-1.0.8</li>
<li> zenity-0.5.7</li></ul></dd>
<dd></dd></dl>
<ul><li><b>Maintainer:</b> Nitzan Arazi</li>
<li><b>Latest update:</b> 2012-03-03</li></ul></li></ol>
<h4><span class="mw-headline" id="Manual_installation_instructions_2">Manual installation instructions</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/wiki/index.php?title=Octave_for_Microsoft_Windows&amp;action=edit&amp;section=26" title="Edit section: Manual installation instructions">edit</a><span class="mw-editsection-bracket">]</span></span></h4>
<ol><li>Create an installation directory of which doesn't have space chars (i.e. C:\Octave\Octave3.6.1_gcc4.6.2\). This directory is referred hereafter as &lt;your_install_dir&gt;.</li>
<li>Extract the complete directories tree from Octave3.6.1_gcc4.6.2_20120303.7z to the installation directory  keeping the original directory structure as in the archive (you can use 7-zip tool from <a rel="nofollow" class="external free" href="http://www.7-zip.org/">http://www.7-zip.org/</a>).  Note that the archive contains Octave3.6.1_gcc4.6.2 folder, so you want to extract to the *parent* of &lt;your_install_dir&gt;.</li>
<li>Copy octave3.6.1_gcc4.6.2.lnk to any convenient location and edit its properties respectively to point to &lt;your_install_dir&gt;\bin\octave.exe and &lt;your_install_dir&gt;\share\octave\3.6.1\imagelib\octave-logo.ico as an icon</li>
<li>Copy octave3.6.1_gcc4.6.2_docs.lnk to any convenient location and edit its properties respectively to point to &lt;your_install_dir&gt;\doc\octave and &lt;your_install_dir&gt;\share\octave\3.6.1\imagelib\octave-logo.ico as an icon.
<dl><dd>At this point you can:</dd>
<dd> a. Launch and use octave by double-clicking the copied octave3.6.1_gcc4.6.2.lnk</dd>
<dd> b. Access and browse the documentation files by double-clicking the copied octave3.6.1_gcc4.6.2_docs.lnk</dd></dl></li>
<li>Optional libblas dll replacement for optimizing the linear algebra subroutines for your CPU:
<dl><dd><ul><li> The default configuration should automatically detect your cpu architecture and select an appropriately tuned library. </li>
<li> In case the default library is not properly functioning on the actual cpu, or you wish to explore the performance with another library, you can manually replace the default one by performing the following procedures (where libblas.dll.&lt;libblas_source&gt; should be replaced with the full name of the desired library from the list below these instructions):
<ol><li> Exit octave</li>
<li> Delete &lt;your_install_dir&gt;\bin\libblas.dll</li>
<li> Make a copy of the desired &lt;your_install_dir&gt;\bin\libblas.dll.&lt;libblas_source&gt;</li>
<li> Rename the copy of the desired &lt;your_install_dir&gt;\bin\libblas.dll.&lt;libblas_source&gt; to libblas.dll</li></ol></li>
<li>  The following is a list of the available libblas.dll.&lt;libblas_source&gt; options:
<ol><li> libblas.dll.ref - reference blas implementation, very slow but most stable</li>
<li> libblas.dll.libopenblas_dynamicarch-r0.1alpha2.5-0-fda39c6 - Openblas based, up to 2 threads, detects cpu architecture and selects respective lib</li>
<li> libblas.dll.libopenblas_dynamicarch_nt4-r0.1alpha2.5-0-fda39c6 - Openblas based, up to 4 threads, detects cpu architecture and selects respective lib</li>
<li> libblas.dll.libopenblas_nehalemp-r0.1alpha2.5-0-fda39c6 - Openblas based, up to 2 threads, tuned for nehalem cpu architecture</li>
<li> libblas.dll.libopenblas_nehalemp_nt4-r0.1alpha2.5-0-fda39c6 - Openblas based, up to 4 threads, tuned for nehalem cpu architecture</li>
<li> libblas.dll.libopenblas_core2p-r0.1alpha2.5-0-fda39c6 - Openblas based, up to 2 threads, tuned for core2 cpu architecture</li>
<li> libblas.dll.libopenblas_core2p_nt4-r0.1alpha2.5-0-fda39c6 - Openblas based, up to 4 threads, tuned for core2 cpu architecture</li>
<li> libblas.dll.altas-3.8.4_ht-pentium - ATLAS based libblass, tuned for older ht-pentium (compiled by Tatsuro Matsuka)</li>
<li> libblas.dll.altas-3.8.4_corei5 - ATLAS based libblass, tuned for older core i5 cpu (compiled by Tatsuro Matsuka)</li></ol></li></ul></dd></dl></li></ol>
<h4><span class="mw-headline" id="Manual_installation_instructions_for_the_Octave-forge_packages_2">Manual installation instructions for the Octave-forge packages</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/wiki/index.php?title=Octave_for_Microsoft_Windows&amp;action=edit&amp;section=27" title="Edit section: Manual installation instructions for the Octave-forge packages">edit</a><span class="mw-editsection-bracket">]</span></span></h4>
<ol><li>Extract the complete directories tree from Octave3.6.1_gcc4.6.2_pkgs_20120303.7z to the installation directory (&lt;your_install_dir&gt;) keeping the original directory structure as in the archive (you can use 7zip tool from <a rel="nofollow" class="external free" href="http://www.7-zip.org/">http://www.7-zip.org/</a>).</li>
<li>In order to update octave_packages database with your installation tree and auto-load most packages (excluding 'ad' and 'windows' which may crash octave when loaded and 'clear all' is executed), launch Octave and execute the following 3 rebuild commands from the octave console:</li></ol>
<pre>   pkg rebuild -auto
   pkg rebuild -noauto ad windows
   pkg rebuild -noauto nan&#160;% shadows many statistics functions
   pkg rebuild -noauto gsl&#160;% shadows some core functions
   pkg rebuild -auto java
</pre>
<ol><li><dl><dd> Last pkg rebuild command is required in order for the java pkg entry to be moved to the top of &lt;your_install_dir&gt;\share\octave\octave_packages db file - thus java pkg is loaded before io pkg is loaded, and io pkg related jars are added to java class path.</dd></dl></li>
<li>You can optionally adjust your installed packages status per your specific needs and usage by executing  the following commands:</li></ol>
<dl><dd> a. To interactively load or unload a package</dd></dl>
<pre>pkg load &lt;pkg_name&gt;
</pre>
<dl><dd> or</dd></dl>
<pre>pkg unload &lt;pkg_name&gt;
</pre>
<dl><dd> b. To disable auto-load for specific pkg &lt;pkg_name&gt;</dd></dl>
<pre>pkg rebuild -noauto &lt;pkg_name&gt;
</pre>
<dl><dd> c. To enable auto-load for specific pkg &lt;pkg_name&gt;</dd></dl>
<pre>pkg rebuild -auto &lt;pkg_name&gt;
</pre>
<dl><dd> d. To completely uninstall a package</dd></dl>
<pre>pkg uninstall &lt;pkg_name&gt;
</pre>
<h4><span class="mw-headline" id="Optional_installation_of_Notepad.2B.2B_as_an_editor_.28recommended.29_2">Optional installation of Notepad++ as an editor (recommended)</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/wiki/index.php?title=Octave_for_Microsoft_Windows&amp;action=edit&amp;section=28" title="Edit section: Optional installation of Notepad++ as an editor (recommended)">edit</a><span class="mw-editsection-bracket">]</span></span></h4>
<ol><li>Download recent Notepad++ installation package from <a rel="nofollow" class="external free" href="http://notepad-plus-plus.org/">http://notepad-plus-plus.org/</a> and install it on your system.</li>
<li>Edit &lt;your_install_dir&gt;\share\octave\site\m\startup\octaverc and un-comment the line which sets octave default editor:</li></ol>
<pre>EDITOR('C:\Program Files\Notepad++\notepad++.exe');
edit ("editor", sprintf ("%s&#160;%%s", EDITOR ()))
edit mode async
</pre>
<dl><dd> Note: You may adjust the above line for the location of notepad++.exe as installed on your system.</dd></dl>
<h4><span class="mw-headline" id="Troubleshooting_2">Troubleshooting</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/wiki/index.php?title=Octave_for_Microsoft_Windows&amp;action=edit&amp;section=29" title="Edit section: Troubleshooting">edit</a><span class="mw-editsection-bracket">]</span></span></h4>
<p>Upon launching, some warnings may be displayed. These warnings can be ignored.
</p>
<ul><li>Following warnings are about missing external tools which may reduce some of the functions of some packages. These external tools are not provided by the 7z archives in sourceforge. </li></ul>
<pre>warning: gmsh does not seem to be present some functionalities will be disabled 
warning: dx does not seem to be present some functionalities will be disabled 
</pre>
<ul><li>Following warning is about fstat function of the statistics package that overloads the old (to be deprecated) fstat function of octave-3.6.1 </li></ul>
<pre>warning: function C:\Octave\3.6.1_gcc-4.6.2\share\octave\packages\statistics-1.1.0\fstat.m shadows a core library function
</pre>
<h3><span class="mw-headline" id="Octave-3.6.0-mingw_.2B_octaveforge_pkgs">Octave-3.6.0-mingw + octaveforge pkgs</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/wiki/index.php?title=Octave_for_Microsoft_Windows&amp;action=edit&amp;section=30" title="Edit section: Octave-3.6.0-mingw + octaveforge pkgs">edit</a><span class="mw-editsection-bracket">]</span></span></h3>
<h4><span class="mw-headline" id="Files_for_manual_installation_4">Files for manual installation</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/wiki/index.php?title=Octave_for_Microsoft_Windows&amp;action=edit&amp;section=31" title="Edit section: Files for manual installation">edit</a><span class="mw-editsection-bracket">]</span></span></h4>
<ol><li>Octave-3.6.0-mingw binaries tree
<ul><li> Octave3.6.0_gcc4.6.2_20120129.7z - MD5:53E4823B0DC5F2923C4CBCB8B60FC1B6</li></ul>
<dl><dd> This is a 7z archive which includes a directory tree of all the binaries and libraries required for a complete octave installation (excluding octaveforge packages)</dd>
<dd></dd>
<dd> It can be downloaded from <a rel="nofollow" class="external text" href="http://sourceforge.net/projects/octave/files/Octave%20Windows%20binaries/Octave%203.6.0%20for%20Windows%20MinGW%20installer/Octave3.6.0_gcc4.6.2_20120129.7z/download">octave forge</a></dd>
<dd></dd></dl>
<ul><li> The archive include:</li></ul>
<dl><dd><ul><li> octave-3.6.0 including PDF documentation (built by Tatsuro Matsuka <a rel="nofollow" class="external free" href="http://www.tatsuromatsuoka.com/octave/Eng/Win/">http://www.tatsuromatsuoka.com/octave/Eng/Win/</a>)</li>
<li> mingw32 + msys tool chain</li>
<li> gnuplot-4.4.4</li>
<li> fig2dev-3.2.5c</li>
<li> ghostscript-9.0.4</li>
<li> pstoedit-3.60</li></ul></dd>
<dd></dd></dl>
<ul><li><b>Maintainer:</b> Nitzan Arazi</li>
<li><b>Latest update:</b> 2012-01-29</li></ul></li>
<li>Octaveforge pkgs, built for Octave-3.6.0-mingw
<ul><li> Octave3.6.0_gcc4.6.2_pkgs_20120128.7z - MD5:93CC6207EED411BCE747193D3A8B6625</li></ul>
<dl><dd></dd>
<dd> It can be downloaded from <a rel="nofollow" class="external text" href="http://sourceforge.net/projects/octave/files/Octave%20Windows%20binaries/Octave%203.6.0%20for%20Windows%20MinGW%20installer/Octave3.6.0_gcc4.6.2_pkgs_20120128.7z/download">octave forge</a></dd>
<dd></dd>
<dd> This is a 7z archive which includes additional binaries and libraries for a set of octaveforge packages.</dd>
<dd></dd></dl>
<ul><li> The included packages are:</li></ul>
<dl><dd><ul><li> actuarial-1.1.0</li>
<li> ad-1.0.6_patched</li>
<li> audio-1.1.4</li>
<li> benchmark-1.1.1</li>
<li> bim-1.0.2</li>
<li> bioinfo-0.1.2</li>
<li> civil-engineering-1.0.7</li>
<li> combinatorics-1.0.9</li>
<li> communications-1.1.0_svn20120127_patched</li>
<li> control-2.2.4</li>
<li> data-smoothing-1.2.3</li>
<li> dataframe-0.8.2</li>
<li> econometrics-1.0.8</li>
<li> fenv-0.1.0</li>
<li> financial-0.3.2</li>
<li> fpl-1.2.0</li>
<li> fuzzy-logic-toolkit-0.3.0</li>
<li> ga-0.9.8</li>
<li> general-1.2.2</li>
<li> generate_html-0.1.3</li>
<li> geometry-1.4.0</li>
<li> gnuplot-1.0.1</li>
<li> gpc-0.1.7</li>
<li> gsl-1.0.8</li>
<li> ident-1.0.7</li>
<li> image-1.0.15</li>
<li> informationtheory-0.1.8</li>
<li> integration-1.0.7_svn20120128</li>
<li> io-1.0.16</li>
<li> irsa-1.0.7</li>
<li> java-1.2.8_patched</li>
<li> linear-algebra-2.1.0_svn20120127</li>
<li> mapping-1.0.7</li>
<li> mechanics-1.2.0</li>
<li> miscellaneous-1.0.11_svn20120127</li>
<li> missing-functions-1.0.2</li>
<li> msh-1.0.2</li>
<li> multicore-0.2.15</li>
<li> nlwing2-1.2.0</li>
<li> nnet-0.1.13</li>
<li> nurbs-1.3.5</li>
<li> ocs-0.1.3_svn20120128_patched</li>
<li> octclip-1.0.0</li>
<li> octgpr-1.2.0</li>
<li> odebvp-1.0.6</li>
<li> odepkg-0.8.0_svn20120127</li>
<li> optim-1.0.17_patched</li>
<li> optiminterp-0.3.4_svn20120128_patched</li>
<li> outliers-0.13.9</li>
<li> physicalconstants-0.1.7</li>
<li> plot-1.1.0</li>
<li> quaternion-1.0.0</li>
<li> secs1d-0.0.8</li>
<li> secs2d-0.0.8</li>
<li> secs3d-0.0.1</li>
<li> signal-1.1.2</li>
<li> simp-1.1.0</li>
<li> sockets-1.0.7_svn20120128_patched</li>
<li> specfun-1.1.0</li>
<li> special-matrix-1.0.7</li>
<li> spline-gcvspl-1.0.8</li>
<li> splines-1.0.7</li>
<li> statistics-1.1.0_svn20120128</li>
<li> strings-1.0.7</li>
<li> struct-1.0.9</li>
<li> symband-1.0.10</li>
<li> symbolic-1.1.0</li>
<li> tcl-octave-0.1.8</li>
<li> time-1.0.9</li>
<li> tsa-4.1.1</li>
<li> video-1.0.2_patched</li>
<li> vrml-1.0.12_svn20111014_patched</li>
<li> windows-1.1.0</li>
<li> xraylib-1.0.8</li>
<li> zenity-0.5.7</li></ul></dd>
<dd></dd></dl>
<ul><li><b>Maintainer:</b> Nitzan Arazi</li>
<li><b>Latest update:</b> 2012-01-28</li></ul></li></ol>
<h4><span class="mw-headline" id="Manual_installation_instructions_3">Manual installation instructions</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/wiki/index.php?title=Octave_for_Microsoft_Windows&amp;action=edit&amp;section=32" title="Edit section: Manual installation instructions">edit</a><span class="mw-editsection-bracket">]</span></span></h4>
<ol><li>Create an installation directory of which doesn't have space chars (i.e. C:\Octave\Octave3.6.0_gcc4.6.2\). This directory is referred hereafter as &lt;your_install_dir&gt;.</li>
<li>Extract the complete directories tree from Octave3.6.0_gcc4.6.2_20120129.7z to the installation directory  keeping the original directory structure as in the archive (you can use 7-zip tool from <a rel="nofollow" class="external free" href="http://www.7-zip.org/">http://www.7-zip.org/</a>).</li>
<li>Copy octave3.6.0_gcc4.6.2.lnk to any convenient location and edit its properties respectively to point to &lt;your_install_dir&gt;\bin\octave.exe and &lt;your_install_dir&gt;\share\octave\3.6.0\imagelib\octave-logo.ico as an icon</li>
<li>Copy octave3.6.0_gcc4.6.2_docs.lnk to any convenient location and edit its properties respectively to point to &lt;your_install_dir&gt;\doc\octave and &lt;your_install_dir&gt;\share\octave\3.6.0\imagelib\octave-logo.ico as an icon.
<dl><dd>At this point you can:</dd>
<dd> a. Launch and use octave by double-clicking the copied octave3.6.0_gcc4.6.2.lnk</dd>
<dd> b. Access and browse the documentation files by double-clicking the copied octave3.6.0_gcc4.6.2_docs.lnk</dd></dl></li></ol>
<h4><span class="mw-headline" id="Manual_installation_instructions_for_the_Octave-forge_packages_3">Manual installation instructions for the Octave-forge packages</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/wiki/index.php?title=Octave_for_Microsoft_Windows&amp;action=edit&amp;section=33" title="Edit section: Manual installation instructions for the Octave-forge packages">edit</a><span class="mw-editsection-bracket">]</span></span></h4>
<ol><li>Extract the complete directories tree from Octave3.6.0_gcc4.6.2_pkgs_20120128.7z to the installation directory (&lt;your_install_dir&gt;) keeping the original directory structure as in the archive (you can use 7zip tool from <a rel="nofollow" class="external free" href="http://www.7-zip.org/">http://www.7-zip.org/</a>).</li>
<li>In order to update octave_packages database with your installation tree and auto-load most packages (excluding 'ad' and 'windows' which may crash octave when loaded and 'clear all' is executed), launch Octave and execute the following 3 rebuild commands from the octave console:</li></ol>
<pre>   pkg rebuild -auto
   pkg rebuild -noauto ad windows
   pkg rebuild -auto java
</pre>
<ol><li><dl><dd> Last pkg rebuild command is required in order for the java pkg entry to be moved to the top of &lt;your_install_dir&gt;\share\octave\octave_packages db file - thus java pkg is loaded before io pkg is loaded, and io pkg related jars are added to java class path.</dd></dl></li>
<li>You can optionally adjust your installed packages status per your specific needs and usage by executing  the following commands:</li></ol>
<dl><dd> a. To interactively load or unload a package</dd></dl>
<pre>pkg load &lt;pkg_name&gt;
</pre>
<dl><dd> or</dd></dl>
<pre>pkg unload &lt;pkg_name&gt;
</pre>
<dl><dd> b. To disable auto-load for specific pkg &lt;pkg_name&gt;</dd></dl>
<pre>pkg rebuild -noauto &lt;pkg_name&gt;
</pre>
<dl><dd> c. To enable auto-load for specific pkg &lt;pkg_name&gt;</dd></dl>
<pre>pkg rebuild -auto &lt;pkg_name&gt;
</pre>
<dl><dd> d. To completely uninstall a package</dd></dl>
<pre>pkg uninstall &lt;pkg_name&gt;
</pre>
<h4><span class="mw-headline" id="Optional_installation_of_Notepad.2B.2B_as_an_editor_.28recommended.29_3">Optional installation of Notepad++ as an editor (recommended)</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/wiki/index.php?title=Octave_for_Microsoft_Windows&amp;action=edit&amp;section=34" title="Edit section: Optional installation of Notepad++ as an editor (recommended)">edit</a><span class="mw-editsection-bracket">]</span></span></h4>
<ol><li>Download recent Notepad++ installation package from <a rel="nofollow" class="external free" href="http://notepad-plus-plus.org/">http://notepad-plus-plus.org/</a> and install it on your system.</li>
<li>Edit &lt;your_install_dir&gt;\share\octave\site\m\startup\octaverc and un-comment the line which sets octave default editor:</li></ol>
<pre>EDITOR('C:\Program Files\Notepad++\notepad++.exe');
edit ("editor", sprintf ("%s&#160;%%s", EDITOR ()))
edit mode async
</pre>
<dl><dd> Note: You may adjust the above line for the location of notepad++.exe as installed on your system.</dd></dl>
<h4><span class="mw-headline" id="Troubleshooting_3">Troubleshooting</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/wiki/index.php?title=Octave_for_Microsoft_Windows&amp;action=edit&amp;section=35" title="Edit section: Troubleshooting">edit</a><span class="mw-editsection-bracket">]</span></span></h4>
<p>Upon launching, some warnings may be displayed. These warnings can be ignored.
</p>
<ul><li>Following warnings are about missing external tools which may reduce some of the functions of some packages. These external tools are not provided by the 7z archives in sourceforge. </li></ul>
<pre>warning: gmsh does not seem to be present some functionalities will be disabled 
warning: dx does not seem to be present some functionalities will be disabled 
</pre>
<ul><li>Following warning is about fstat function of the statistics package that overloads the old (to be deprecated) fstat function of octave-3.6.0 </li></ul>
<pre>warning: function C:\Octave\3.6.0_gcc-4.6.2\share\octave\packages\statistics-1.1.0\fstat.m shadows a core library function
</pre>
<h3><span class="mw-headline" id="Octave-3.4.3-mingw_.2B_octaveforge_pkgs">Octave-3.4.3-mingw + octaveforge pkgs</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/wiki/index.php?title=Octave_for_Microsoft_Windows&amp;action=edit&amp;section=36" title="Edit section: Octave-3.4.3-mingw + octaveforge pkgs">edit</a><span class="mw-editsection-bracket">]</span></span></h3>
<ol><li>Octave-3.4.3-mingw (without pkgs)
<dl><dd> Octave3.4.3_gcc4.5.2_20111025.7z - MD5:5AA004D933E000E762AE2AE95573ACBD - <a rel="nofollow" class="external free" href="http://www.multiupload.com/KDQ1N463UW">http://www.multiupload.com/KDQ1N463UW</a> </dd></dl></li>
<li>Octaveforge pkgs, built for Octave-3.4.3-mingw
<dl><dd> Octave3.4.3_gcc4.5.2_pkgs_20111026.7z - MD5:2987F6078B4AD161F2D23634D5109D61 - <a rel="nofollow" class="external free" href="http://www.multiupload.com/7U6J23CSZ6">http://www.multiupload.com/7U6J23CSZ6</a> </dd></dl></li></ol>
<dl><dd></dd>
<dd>The above  archive files are now able to be downloaded from <a rel="nofollow" class="external text" href="http://sourceforge.net/projects/octave/files/Octave%20Windows%20binaries/Octave%203.4.3%20for%20Windows%20MinGW%20Installer/">octave forge</a></dd></dl>
<ul><li><b>Maintainer:</b> Nitzan Arazi</li>
<li><b>Latest update:</b> 2011-10-26</li>
<li>Packages are archived by 7zip. 7zip software can be download from <a rel="nofollow" class="external free" href="http://www.7-zip.org/">http://www.7-zip.org/</a></li>
<li>Octave Binaries are built using Tatsuro Matsuka OctaveLibs.zip and gplibs.zip (<a rel="nofollow" class="external free" href="http://www.tatsuromatsuoka.com/octave/Eng/Win/">http://www.tatsuromatsuoka.com/octave/Eng/Win/</a>)</li></ul>
<h4><span class="mw-headline" id="Troubleshooting_4">Troubleshooting</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/wiki/index.php?title=Octave_for_Microsoft_Windows&amp;action=edit&amp;section=37" title="Edit section: Troubleshooting">edit</a><span class="mw-editsection-bracket">]</span></span></h4>
<p>Upon launching, some warnings may be displayed. The following warnings can be ignored:
</p>
<ul><li>Following warning is about interpretation of logical operators (on scalars) in octave which is slightly different than matlab's interpretation. </li></ul>
<pre>warning: C:\Octave\3.4.3_gcc-4.5.2\share\octave\packages\integration-1.0.7\PKG_ADD: possible Matlab-style short-circuit operator
at line 9, column 32 
</pre>
<ul><li>Following messages are from java package about loading of java classes that have been found and how to manually run a statement which will display its capabilities. </li></ul>
<pre>io PKG_ADD: java classes has been found and added in C:\Octave\3.4.3_gcc-4.5.2\bin 
io PKG_ADD: run chk_spreadsheet_support([],3) to view io support 
</pre>
<ul><li>Following warnings are about missing external tools which may reduce some of the functions of some packages. These external tools are not provided by the 7z archives in sourceforge. </li></ul>
<pre>warning: gmsh does not seem to be present some functionalities will be disabled 
warning: dx does not seem to be present some functionalities will be disabled 
</pre>
<ul><li>Following warning is about fstat function of the statistics package that overloads the old (to be deprecated) fstat function of octave-3.4.3 </li></ul>
<pre>warning: function C:\Octave\3.4.3_gcc-4.5.2\share\octave\packages\statistics-1.0.10\fstat.m shadows a core library function
</pre>
<h3><span class="mw-headline" id="Octave-3.4.2-mingw_.2B_octaveforge_pkgs">Octave-3.4.2-mingw + octaveforge pkgs</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/wiki/index.php?title=Octave_for_Microsoft_Windows&amp;action=edit&amp;section=38" title="Edit section: Octave-3.4.2-mingw + octaveforge pkgs">edit</a><span class="mw-editsection-bracket">]</span></span></h3>
<ol><li>Octave-3.4.2-mingw (without pkgs)
<dl><dd>Octave3.4.2_gcc4.5.2_20110914.7z - MD5:4AA0DD4C97F73B2E9E0F7370CD8AD719 - <a rel="nofollow" class="external free" href="http://www.multiupload.com/TCUHKNNH9S">http://www.multiupload.com/TCUHKNNH9S</a> </dd></dl></li>
<li>Octaveforge pkgs, built for Octave-3.4.2-mingw
<dl><dd>Octave3.4.2_gcc4.5.2_pkgs_20111014.7z - MD5:49097AF3C6FC6CDB58EE83F510A50993 - <a rel="nofollow" class="external free" href="http://www.multiupload.com/DCWFZOUGZA">http://www.multiupload.com/DCWFZOUGZA</a> </dd></dl></li></ol>
<ul><li><b>Maintainer:</b> Nitzan Arazi</li>
<li><b>Latest update:</b> 2011-10-14</li>
<li>Packages are archived by the 7zip. The 7zip software can be download from <a rel="nofollow" class="external free" href="http://www.7-zip.org/">http://www.7-zip.org/</a></li>
<li>Octave Binaries are built by Tatsuro Matsuoka (<a rel="nofollow" class="external free" href="http://www.tatsuromatsuoka.com/octave/Eng/Win/">http://www.tatsuromatsuoka.com/octave/Eng/Win/</a>)</li>
<li>Octave manual (<code>octave-3.4.2.pdf.zip, octave-3.4.2.html.zip</code>) can be downloaded from <a rel="nofollow" class="external free" href="http://www.tatsuromatsuoka.com/octave/Eng/Win/">http://www.tatsuromatsuoka.com/octave/Eng/Win/</a></li></ul>
<h4><span class="mw-headline" id="Installation">Installation</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/wiki/index.php?title=Octave_for_Microsoft_Windows&amp;action=edit&amp;section=39" title="Edit section: Installation">edit</a><span class="mw-editsection-bracket">]</span></span></h4>
<p>The installation instructions are the same as for the 3.4.3 version, above.
</p>
<h4><span class="mw-headline" id="Notes_2">Notes</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/wiki/index.php?title=Octave_for_Microsoft_Windows&amp;action=edit&amp;section=40" title="Edit section: Notes">edit</a><span class="mw-editsection-bracket">]</span></span></h4>
<p>For details, please see <a rel="nofollow" class="external free" href="http://old.nabble.com/Octave-3.4.2-mingw-%2B-octaveforge-pkgs-to32394771.html">http://old.nabble.com/Octave-3.4.2-mingw-%2B-octaveforge-pkgs-to32394771.html</a>
</p><p>Upon launching, some warnings may be displayed. The following warnings can be ignored:
</p>
<ul><li>Following warning is about interpretation of logical operators (on scalars) in octave which is slightly different than matlab's interpretation. </li></ul>
<pre>warning: C:\Octave\Octave3.4.2_gcc4.5.2\share\octave\packages\integration-1.0.7\PKG_ADD: possible Matlab-style 
short-circuit operator at line 9, column 32
</pre>
<ul><li>Following warnings are about missing external tools which may reduce some of the functions of some packages. These external tools are not provided by the 7z archives in sourceforge. </li></ul>
<pre>warning: gmsh does not seem to be present some functionalities will be disabled
warning: dx does not seem to be present some functionalities will be disabled
</pre>
<ul><li>Following warning is about fstat function of the statistics package that overloads the old (to be deprecated) fstat function of octave-3.4.3 </li></ul>
<pre>warning: function C:\Octave\Octave3.4.2_gcc4.5.2\share\octave\packages\statistics-1.0.10\fstat.m shadows a core library
</pre>
<p><br />
</p>
<h3><span class="mw-headline" id="Octave_3.2.4_for_Windows_MinGW32">Octave 3.2.4 for Windows MinGW32</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/wiki/index.php?title=Octave_for_Microsoft_Windows&amp;action=edit&amp;section=41" title="Edit section: Octave 3.2.4 for Windows MinGW32">edit</a><span class="mw-editsection-bracket">]</span></span></h3>
<ul><li><b>Download:</b> <a rel="nofollow" class="external text" href="http://sourceforge.net/projects/octave/files/Octave%20Windows%20binaries/Octave%203.2.4%20for%20Windows%20MinGW32%20Installer/Octave-3.2.4_i686-pc-mingw32_gcc-4.4.0_setup.exe/download">Octave-3.2.4_i686-pc-mingw32_gcc-4.4.0_setup.exe</a></li>
<li><b>Maintainer:</b> Benjamin Lindner </li>
<li><b>Latest release:</b> 2010-03-25</li></ul>
<h4><span class="mw-headline" id="Includes">Includes</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/wiki/index.php?title=Octave_for_Microsoft_Windows&amp;action=edit&amp;section=42" title="Edit section: Includes">edit</a><span class="mw-editsection-bracket">]</span></span></h4>
<ul><li>GNU Octave, version 3.2.4 (i686-pc-mingw32)</li>
<li>atlas 3.8.2</li>
<li>mingw32 (GCC 4.4.0 on <a rel="nofollow" class="external free" href="http://www.mingw.org">http://www.mingw.org</a> )</li>
<li>gnuplot Version 4.4.0 specially prepared for octave</li>
<li>mini-MSYS 1.0.11</li>
<li>notepad++ 5.6.7 as text editor</li>
<li>Some components of octave-forge packages 
<ul><li>actuarial-1.1.0 (New!) </li>
<li>audio-1.1.4 </li>
<li>benchmark-1.1.1 </li>
<li>bim-1.0.0 (New!) </li>
<li>bioinfo-0.1.2 </li>
<li>combinatorics-1.0.9 </li>
<li>communications-1.0.10 </li>
<li>control-1.0.11 </li>
<li>data-smoothing-1.2.0 </li>
<li>econometrics-1.0.8 </li>
<li>fenv-0.1.0 (New!) </li>
<li>financial-0.3.2 </li>
<li>fixed-0.7.10 </li>
<li>fpl-1.0.0 (New!) </li>
<li>ga-0.9.7 </li>
<li>general-1.2.0 (updated) </li>
<li>generate_html-0.1.2 (New!) </li>
<li>gnuplot-1.0.1 (New!) </li>
<li>gpc-0.1.7 </li>
<li>gsl-1.0.8 </li>
<li>ident-1.0.7 </li>
<li>image-1.0.10 </li>
<li>informationtheory-0.1.8 </li>
<li>integration-1.0.7 </li>
<li>io-1.0.11 (updated) </li>
<li>irsa-1.0.7 </li>
<li>java-1.2.7 (New!) </li>
<li>jhandles-0.3.5 (New!) </li>
<li>linear-algebra-1.0.8 </li>
<li>mapping-1.0.7 </li>
<li>miscellaneous-1.0.9 </li>
<li>missing-functions-1.0.2 </li>
<li>msh-1.0.0 (New!) </li>
<li>nlwing2-1.1.1 (New!) </li>
<li>nnet-0.1.10 </li>
<li>nurbs-1.0.3 (New!) </li>
<li>ocs-0.0.4 (New!) </li>
<li>oct2mat-1.0.7 (New!) </li>
<li>octcdf-1.0.17 (updated 1.0.17+) </li>
<li>octgpr-1.1.5 (New!) </li>
<li>odebvp-1.0.6 </li>
<li>odepkg-0.6.10 (updated) </li>
<li>optim-1.0.12 (updated) </li>
<li>optiminterp-0.3.2 </li>
<li>outliers-0.13.9 </li>
<li>physicalconstants-0.1.7 </li>
<li>plot-1.0.7 </li>
<li>quaternion-1.0.0 </li>
<li>signal-1.0.10 </li>
<li>simp-1.1.0 (New!) </li>
<li>sockets-1.0.5 </li>
<li>specfun-1.0.8 </li>
<li>special-matrix-1.0.7 </li>
<li>spline-gcvspl-1.0.8 (New!) </li>
<li>splines-1.0.7 </li>
<li>statistics-1.0.9 </li>
<li>strings-1.0.7 </li>
<li>struct-1.0.7 </li>
<li>symband-1.0.10 (New!) </li>
<li>symbolic-1.0.9 </li>
<li>time-1.0.9 </li>
<li>video-1.0.2 (New!) </li>
<li>windows-1.0.8(updated to 1.0.8+) </li>
<li>zenity-0.5.7</li></ul></li></ul>
<h4><span class="mw-headline" id="Notes_3">Notes</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/wiki/index.php?title=Octave_for_Microsoft_Windows&amp;action=edit&amp;section=43" title="Edit section: Notes">edit</a><span class="mw-editsection-bracket">]</span></span></h4>
<ul><li>Although there are some remaining known issues, some bugs reported to the octave-3.2.3 have been corrected. In addition, useful octave-forge packages are added (Java, Jhandles, ....). Please see <a rel="nofollow" class="external text" href="http://sourceforge.net/projects/octave/files/Octave%20Windows%20binaries/Octave%203.2.4%20for%20Windows%20MinGW32%20Installer/RELEASE_NOTES-3.2.4.txt/download">RELEASE_NOTES.txt</a> for details:  </li>
<li>Default Octave install folder changed to e.g. <code>C:\Octave\3.2.4_gcc-4.4.0\</code>. 
<dl><dd>If you have installed octave in a folder where the path name has whitespace, for example, <code>C:\Program Files\</code>, 'pkg install (package name)' command <b>will fail</b>: See <a rel="nofollow" class="external free" href="http://sourceforge.net/mailarchive/message.php?msg_name=4A1AF9EF.1000005@hotmail.com">http://sourceforge.net/mailarchive/message.php?msg_name=4A1AF9EF.1000005@hotmail.com</a> for details</dd></dl></li></ul>
<p><b>Additional important topics found after the release:</b>
</p>
<ul><li>It is reported that the oct2mat octave-forge package affects plot related commands. The purpose of the package is to convert m-file into matlab-compatible coding style. Please see the documentation of the octave-forge (oct2mat - freetb4matlab) from <a rel="nofollow" class="external free" href="http://octave.sourceforge.net/functions_by_package.php">http://octave.sourceforge.net/functions_by_package.php</a>) 
<ul><li>Report for this problem: <a rel="nofollow" class="external free" href="http://old.nabble.com/Re:-Octave-3.2.4-mingw32-available-p28053703.html">http://old.nabble.com/Re:-Octave-3.2.4-mingw32-available-p28053703.html</a> </li>
<li>Explanation of the problem: <a rel="nofollow" class="external free" href="http://old.nabble.com/Re:-Octave-3.2.4-mingw32-available-p28090303.html">http://old.nabble.com/Re:-Octave-3.2.4-mingw32-available-p28090303.html</a> </li>
<li>Realistic solution at this moment, do not install the oct2mat package when you install octave with octave-forge packages if you do not use this package. Another solution is to execute</li></ul></li></ul>
<pre>     pkg rebuild -noauto oct2mat
</pre>
<dl><dd><dl><dd>at the octave prompt and then restart octave. The operation results in the oct2mat package not to be auto-loaded in startup. When you want to use oct2mat, execute </dd></dl></dd></dl>
<pre>     pkg load oct2mat 
</pre>
<ul><li>The plot octave-forge package still have ginput code although the ginput function is now merge into octave itself. Therefore conflict occur if the plot package is installed. To avoid this problem, rename 'ginput.m' in the folder <code>..\Octave\3.2.4_gcc-4.4.0\share\octave\packages\plot-1.0.7</code>, for example ginput.ob.m. In some computers which has one core CPU, response of ginput is very slow. In the case, modify '__gnuplot_ginput__.m' according to the following thread. <a rel="nofollow" class="external free" href="http://old.nabble.com/ginput-on-Octave-3.2.4-mingw32-to28093888.html">http://old.nabble.com/ginput-on-Octave-3.2.4-mingw32-to28093888.html</a> </li>
<li>From gnuplot-4.4.0, the default terminal of gnuplot for windows is the wxt terminal. Some users may set the GNUTERM environmental variable for the windows terminal being default. The gnuplot for windows allows to set GNUTERM to 'win' (abbreviated form) but octave does not recognize the abbreviated form for terminal name. If one would like set GNUTERM to windows terminal, one should specify it as 'windows' (full form) but not 'win' (abbreviated form). In detail see the following thread: <a rel="nofollow" class="external free" href="http://old.nabble.com/flicking-problem-again-Octave-3.2.4-mingw32-td28038688.html">http://old.nabble.com/flicking-problem-again-Octave-3.2.4-mingw32-td28038688.html</a></li></ul>
<h2><span class="mw-headline" id="Older_Octave_versions_with_Visual_Studio">Older Octave versions with Visual Studio</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/wiki/index.php?title=Octave_for_Microsoft_Windows&amp;action=edit&amp;section=44" title="Edit section: Older Octave versions with Visual Studio">edit</a><span class="mw-editsection-bracket">]</span></span></h2>
<p>Octave binaries compiled with Microsoft Visual Studio are available for download from <a rel="nofollow" class="external text" href="http://sourceforge.net/projects/octave/files/Octave%20Windows%20binaries/Octave%203.6.4%20for%20Windows%20Microsoft%20Visual%20Studio/">Octave-Forge site</a>. These binaries come in the form of an easy-to-use installer (created with <a rel="nofollow" class="external text" href="http://nsis.sourceforge.net/">NSIS</a>) and are provided in 2 flavors: pre-compiled version for Visual Studio 2008 and for Visual Studio 2010.
</p><p>These binaries do not include the Microsoft Visual C++ compiler. This must be installed separately, but is only required if you plan to compile and link source code against the pre-compiled octave release. If the Visual C++ compiler is not present on the target system, then the Visual C++ runtime libraries must be installed prior the installation of these binaries. These runtime libraries are support libraries that are required by any code compiled with the Visual C++ compiler. They can be downloaded for free from the Microsoft download site:
</p>
<ul><li> <a rel="nofollow" class="external text" href="http://www.microsoft.com/download/en/details.aspx?id=5582">Visual C++ 2008 runtime libraries</a></li>
<li> <a rel="nofollow" class="external text" href="http://www.microsoft.com/download/en/details.aspx?id=8328">Visual C++ 2010 runtime libraries</a></li></ul>
<p>Note that if you already installed other software on your system, there is a possibility that these runtime libraries are already present. Search for a files named msvcr90.dll (Visual Studio 2008) or msvcr100.dll (Visual Studio 2010) in the&#160;%WINDIR% directory (usually C:\WINDOWS).
</p>
<h3><span class="mw-headline" id="Installation_2">Installation</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/wiki/index.php?title=Octave_for_Microsoft_Windows&amp;action=edit&amp;section=45" title="Edit section: Installation">edit</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>The pre-compiled versions for Visual Studio come in the form of a self-installing executable. Simply download the executable, run it and follow the installer instructions. To avoid possible problems with white spaces in the octave paths, it is <b>strongly recommended</b> to install octave in a directory that do not contain any white spaces.
</p><p>Octave-Forge packages are not installed by default. To install packages, expand the section "Octave Forge" in the component selection page of the installer and select the packages you wish to install. Note that installed packages are not loaded by default. To use the packages, you still need to load them into octave.
</p>
<h3><span class="mw-headline" id="Printing_.28installing_Ghostscript.29">Printing (installing Ghostscript)</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/wiki/index.php?title=Octave_for_Microsoft_Windows&amp;action=edit&amp;section=46" title="Edit section: Printing (installing Ghostscript)">edit</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>In order to use the <code>print</code> command ghostscript must be installed.
The installer may be obtained at
<a rel="nofollow" class="external text" href="http://sourceforge.net/projects/ghostscript/">sourceforge</a>.
</p><p>The instructions below assume the GLP version of Ghostscript is installed with
the Destination directory <code>C:\Program Files (x86)\GPLGS\</code>.
The Destination directory may be different for 32 bit and 64 bit windows and can also
change for different versions of Ghostscript.  Therefore, it is important that the user 
make note of the Destination directory used to install Ghostscript and use it in place of
the Destination directory used in these instructions.
</p><p>In order for Octave to find Ghostscript, the directory containing Ghostscript's command line
program must be in the command shell's path.  The name of Ghostscript's command
line program may vary.  Some examples are <code>gswin32c.exe</code>, <code>gswin64c.exe</code>, 
<code>gs.exe</code>, and <code>mgs.exe</code>.
To directory containing Ghostscript's command line program may either be added to the command
shell's using Windows Control Panel, or by having Octave modify the <code>path</code> variable to
include the directory where Ghostscript's command line programs resides.
</p><p>For the latter, to following lines may be placed in the <code>~/.octaverc</code>
file (where <code>~</code> indicates the user's home folder).
The variable <code>gs_path</code> should be set to the Destination
directory where Ghostscript was installed.
</p>
<pre> cmd_path = getenv ("path");
 gs_path = 'C:\Program Files (x86)\GPLGS\';
 if (isempty (strfind (cmd_path, gs_path)))
   setenv ('path', strcat (cmd_path, pathsep (), gs_path));
 endif
</pre>
<p>In this case, the value of <code>gs_path</code> has been set to the location of Ghostscript's command
line program for the GPL's 8.15 version of Ghostscript.  The location for other versions may differ.
Please determine the location of the installed Ghostscript command line program and make the needed
adjustments to these instructions.
</p><p>To set the path via the Control Panel,
</p>
<ul><li> Go to <b>Control Panel</b> --&gt; <b>System and Security</b> --&gt; <b>System</b></li>
<li> Click <b>Advanced System Settings</b></li>
<li> Click <b>Environment Variables</b></li>
<li> In the <b>System Variables</b> area, locate the Path variable, highlight it and click <b>Edit</b>.</li>
<li> Add the Destination directory where Ghostscript is installed and confirm the change by clickiing <b>OK</b>, <b>OK</b>, <b>OK</b>.</li></ul>
<p>If the 64 bit version of Ghostscript is installed, Octave will not automatically detect it.  To use the 64 bit version an
option telling Octave about it must be passed to the <code>print</code> command.  For example to produce PDF
output for a figure, using the 64 bit version of Ghostscript, the command below may be used.
</p>
<pre> print -Ggswin64c.exe figure.pdf
</pre>
<p>At this point most of Octave's printing functionality should work.  When output is
produced using the <code>print</code> command the warnings below will be given.
</p>
<pre> warning: print.m: epstool binary is not available.
 Some output formats are not available.
 warning: print.m: fig2dev binary is not available.
 Some output formats are not available.
 warning: print.m: pstoedit binary is not available.
 Some output formats are not available.
</pre>
<p>For the <code>print</code> command to be fully functional, each of these utilities will also need to be installed,
and their locations added to the Path variable via either the Control Panel
or Octave's <code>~/.octaverc</code> file.
</p>
<h3><span class="mw-headline" id="Using_the_Visual_C.2B.2B_compiler_with_Octave">Using the Visual C++ compiler with Octave</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/wiki/index.php?title=Octave_for_Microsoft_Windows&amp;action=edit&amp;section=47" title="Edit section: Using the Visual C++ compiler with Octave">edit</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>As of version 3.6.1, the Microsoft Visual C++ compiler is not automatically detected. If you need to use it from octave (for instance to compile a MEX, OCT file, and building packages), then you must configure your system by updating the appropriate environment variables: <b>%PATH%</b>, <b>%INCLUDE%</b> and <b>%LIB%</b>. One way to achieve this easily is to call the vcvarsall.bat script (from the Visual C++ installation directory) prior executing octave. You can for instance automate this by creating a batch script with the following content (adapt paths to your actual installation):
</p>
<pre>call "C:\Program Files\Microsoft Visual Studio 9.0\VC\vcvarsall.bat"
"C:\Octave-3.6.1\bin\octave.exe"
</pre>
<h3><span class="mw-headline" id="Octave_3.6.4">Octave 3.6.4</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/wiki/index.php?title=Octave_for_Microsoft_Windows&amp;action=edit&amp;section=48" title="Edit section: Octave 3.6.4">edit</a><span class="mw-editsection-bracket">]</span></span></h3>
<h4><span class="mw-headline" id="Download">Download</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/wiki/index.php?title=Octave_for_Microsoft_Windows&amp;action=edit&amp;section=49" title="Edit section: Download">edit</a><span class="mw-editsection-bracket">]</span></span></h4>
<p><a rel="nofollow" class="external text" href="http://sourceforge.net/projects/octave/files/Octave%20Windows%20binaries/Octave%203.6.4%20for%20Windows%20Microsoft%20Visual%20Studio/">Octave-Forge</a>
</p>
<h4><span class="mw-headline" id="Content">Content</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/wiki/index.php?title=Octave_for_Microsoft_Windows&amp;action=edit&amp;section=50" title="Edit section: Content">edit</a><span class="mw-editsection-bracket">]</span></span></h4>
<ul><li> Octave 3.6.4</li>
<li> OpenBLAS-0.2.2 (dynamic architectures, up to 4 threads)</li>
<li> ATLAS 3.8.4 single-threaded and multi-threaded (2 threads)</li>
<li> All required libraries</li>
<li> Gnuplot 4.4.4</li>
<li> FLTK</li>
<li> 82 packages from Octave-Forge (Must be installed through the Octave installer, see README: 3. Content)</li></ul>
<h3><span class="mw-headline" id="Octave_3.6.2">Octave 3.6.2</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/wiki/index.php?title=Octave_for_Microsoft_Windows&amp;action=edit&amp;section=51" title="Edit section: Octave 3.6.2">edit</a><span class="mw-editsection-bracket">]</span></span></h3>
<h4><span class="mw-headline" id="Download_2">Download</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/wiki/index.php?title=Octave_for_Microsoft_Windows&amp;action=edit&amp;section=52" title="Edit section: Download">edit</a><span class="mw-editsection-bracket">]</span></span></h4>
<p><a rel="nofollow" class="external text" href="http://sourceforge.net/projects/octave/files/Octave%20Windows%20binaries/Octave%203.6.2%20for%20Windows%20Microsoft%20Visual%20Studio/">Octave-Forge</a>
</p>
<h4><span class="mw-headline" id="Content_2">Content</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/wiki/index.php?title=Octave_for_Microsoft_Windows&amp;action=edit&amp;section=53" title="Edit section: Content">edit</a><span class="mw-editsection-bracket">]</span></span></h4>
<ul><li> Octave 3.6.2</li>
<li> OpenBLAS-0.1.1 (dynamic architectures, up to 4 threads)</li>
<li> ATLAS 3.8.4 single-threaded and multi-threaded (2 threads)</li>
<li> All required libraries</li>
<li> <a rel="nofollow" class="external text" href="https://github.com/goffioul/QtHandles">QtHandles</a></li>
<li> Octave GUI (experimental, compiled from development sources)</li>
<li> Gnuplot 4.4.4</li>
<li> 72 packages from Octave-Forge (see README: 3. Content)</li></ul>
<h3><span class="mw-headline" id="Octave_3.6.1">Octave 3.6.1</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/wiki/index.php?title=Octave_for_Microsoft_Windows&amp;action=edit&amp;section=54" title="Edit section: Octave 3.6.1">edit</a><span class="mw-editsection-bracket">]</span></span></h3>
<h4><span class="mw-headline" id="Download_3">Download</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/wiki/index.php?title=Octave_for_Microsoft_Windows&amp;action=edit&amp;section=55" title="Edit section: Download">edit</a><span class="mw-editsection-bracket">]</span></span></h4>
<p><a rel="nofollow" class="external text" href="http://sourceforge.net/projects/octave/files/Octave%20Windows%20binaries/Octave%203.6.1%20for%20Windows%20Microsoft%20Visual%20Studio/">Octave-Forge</a>
</p>
<h4><span class="mw-headline" id="Content_3">Content</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/wiki/index.php?title=Octave_for_Microsoft_Windows&amp;action=edit&amp;section=56" title="Edit section: Content">edit</a><span class="mw-editsection-bracket">]</span></span></h4>
<ul><li> Octave 3.6.1</li>
<li> ATLAS 3.8.4 single-threaded (SSE/SSE2/SSE3) and multi-threaded (SSE3, 2 threads)</li>
<li> All required libraries</li>
<li> <a rel="nofollow" class="external text" href="https://github.com/goffioul/QtHandles">QtHandles</a></li>
<li> Octave GUI (experimental, compiled from development sources)</li>
<li> Gnuplot 4.4.4</li>
<li> 72 packages from Octave-Forge</li></ul>
<p><br />
</p>
<h3><span class="mw-headline" id="Alternative">Alternative</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/wiki/index.php?title=Octave_for_Microsoft_Windows&amp;action=edit&amp;section=57" title="Edit section: Alternative">edit</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>In addition to the instructions provided in the Octave manual and Octave-Forge repository, a basic toolkit for building Octave in windows using the MSVC compiler has been produced by Michael Goffioul. It consists of a set of scripts that can be used to compile Octave and its dependencies. 
</p><p>A pre-compiled (with VS2010) version of everything has also been provided, so it is not necessary to recompile everything from scratch. The files can be found at: <a rel="nofollow" class="external free" href="http://dl.dropbox.com/u/45539519/octave-build2.zip">http://dl.dropbox.com/u/45539519/octave-build2.zip</a> and <a rel="nofollow" class="external free" href="http://dl.dropbox.com/u/45539519/VC10Libs.zip">http://dl.dropbox.com/u/45539519/VC10Libs.zip</a>
</p><p>Note that this is not a enterprise-level SDK, so don't try to start an enterprise with it.
</p>
<!-- 
NewPP limit report
Cached time: 20170928101526
Cache expiry: 86400
Dynamic content: false
CPU time usage: 0.176 seconds
Real time usage: 0.182 seconds
Preprocessor visited node count: 363/1000000
Preprocessor generated node count: 634/1000000
Post‐expand include size: 400/2097152 bytes
Template argument size: 205/2097152 bytes
Highest expansion depth: 3/40
Expensive parser function count: 0/100
-->

<!-- 
Transclusion expansion time report (%,ms,calls,template)
100.00%   13.181      1 - -total
 71.76%    9.458     15 - Template:Codeline
-->

<!-- Saved in parser cache with key octave_org:pcache:idhash:18-0!*!0!!en!*!* and timestamp 20170928101525 and revision id 10347
 -->
</div><div class="printfooter">
Retrieved from "<a dir="ltr" href="http://wiki.octave.org/wiki/index.php?title=Octave_for_Microsoft_Windows&amp;oldid=10347">http://wiki.octave.org/wiki/index.php?title=Octave_for_Microsoft_Windows&amp;oldid=10347</a>"</div>
					<div id="catlinks" class="catlinks" data-mw="interface"><div id="mw-normal-catlinks" class="mw-normal-catlinks"><a href="/Special:Categories" title="Special:Categories">Categories</a>: <ul><li><a href="/Category:Installation" title="Category:Installation">Installation</a></li><li><a href="/Category:Building" title="Category:Building">Building</a></li><li><a href="/Category:Microsoft_Windows" title="Category:Microsoft Windows">Microsoft Windows</a></li></ul></div></div>					<!-- end content -->
										<div class="visualClear"></div>
				</div>
			</div>
		</div>
		<div id="column-one">
			<h2>Navigation menu</h2>
					<div id="p-cactions" class="portlet" role="navigation">
			<h3>Views</h3>

			<div class="pBody">
				<ul>
				<li id="ca-nstab-main" class="selected"><a href="/Octave_for_Microsoft_Windows" title="View the content page [c]" accesskey="c">Page</a></li>
				<li id="ca-talk"><a href="/Talk:Octave_for_Microsoft_Windows" rel="discussion" title="Discussion about the content page [t]" accesskey="t">Discussion</a></li>
				<li id="ca-edit"><a href="/wiki/index.php?title=Octave_for_Microsoft_Windows&amp;action=edit" title="Edit this page [e]" accesskey="e">Edit</a></li>
				<li id="ca-history"><a href="/wiki/index.php?title=Octave_for_Microsoft_Windows&amp;action=history" title="Past revisions of this page [h]" accesskey="h">History</a></li>
				</ul>
							</div>
		</div>
				<div class="portlet" id="p-personal" role="navigation">
				<h3>Personal tools</h3>

				<div class="pBody">
					<ul>
						<li id="pt-anonuserpage">Not logged in</li>							<li id="pt-anontalk"><a href="/Special:MyTalk" title="Discussion about edits from this IP address [n]" accesskey="n">Talk</a></li>
													<li id="pt-anoncontribs"><a href="/Special:MyContributions" title="A list of edits made from this IP address [y]" accesskey="y">Contributions</a></li>
													<li id="pt-createaccount"><a href="/wiki/index.php?title=Special:CreateAccount&amp;returnto=Octave+for+Microsoft+Windows" title="You are encouraged to create an account and log in; however, it is not mandatory">Create account</a></li>
													<li id="pt-login"><a href="/wiki/index.php?title=Special:UserLogin&amp;returnto=Octave+for+Microsoft+Windows" title="You are encouraged to log in; however, it is not mandatory [o]" accesskey="o">Log in</a></li>
											</ul>
				</div>
			</div>
			<div class="portlet" id="p-logo" role="banner">
				<a href="/Main_Page" class="mw-wiki-logo" title="Visit the main page"></a>
			</div>
				<div class="generated-sidebar portlet" id="p-navigation" role="navigation">
		<h3>Navigation</h3>
		<div class='pBody'>
							<ul>
											<li id="n-mainpage-description"><a href="/Main_Page" title="Visit the main page [z]" accesskey="z">Main page</a></li>
											<li id="n-portal"><a href="/Octave:Community_portal" title="About the project, what you can do, where to find things">Community portal</a></li>
											<li id="n-currentevents"><a href="/Octave:Current_events" title="Find background information on current events">Current events</a></li>
											<li id="n-recentchanges"><a href="/Special:RecentChanges" title="A list of recent changes in the wiki [r]" accesskey="r">Recent changes</a></li>
											<li id="n-Package-list"><a href="/Category:Packages">Package list</a></li>
											<li id="n-Index"><a href="/Special:Categories">Index</a></li>
											<li id="n-randompage"><a href="/Special:Random" title="Load a random page [x]" accesskey="x">Random page</a></li>
											<li id="n-help"><a href="https://www.mediawiki.org/wiki/Special:MyLanguage/Help:Contents" title="The place to find out">Help</a></li>
									</ul>
					</div>
		</div>
			<div id="p-search" class="portlet" role="search">
			<h3><label for="searchInput">Search</label></h3>

			<div id="searchBody" class="pBody">
				<form action="/wiki/index.php" id="searchform">
					<input type='hidden' name="title" value="Special:Search"/>
					<input type="search" name="search" placeholder="Search Octave" title="Search Octave [f]" accesskey="f" id="searchInput"/>
					<input type="submit" name="go" value="Go" title="Go to a page with this exact name if it exists" id="searchGoButton" class="searchButton"/>&#160;
						<input type="submit" name="fulltext" value="Search" title="Search the pages for this text" id="mw-searchButton" class="searchButton"/>
				</form>

							</div>
		</div>
			<div class="portlet" id="p-tb" role="navigation">
			<h3>Tools</h3>

			<div class="pBody">
				<ul>
											<li id="t-whatlinkshere"><a href="/Special:WhatLinksHere/Octave_for_Microsoft_Windows" title="A list of all wiki pages that link here [j]" accesskey="j">What links here</a></li>
											<li id="t-recentchangeslinked"><a href="/Special:RecentChangesLinked/Octave_for_Microsoft_Windows" rel="nofollow" title="Recent changes in pages linked from this page [k]" accesskey="k">Related changes</a></li>
											<li id="t-specialpages"><a href="/Special:SpecialPages" title="A list of all special pages [q]" accesskey="q">Special pages</a></li>
											<li id="t-print"><a href="/wiki/index.php?title=Octave_for_Microsoft_Windows&amp;printable=yes" rel="alternate" title="Printable version of this page [p]" accesskey="p">Printable version</a></li>
											<li id="t-permalink"><a href="/wiki/index.php?title=Octave_for_Microsoft_Windows&amp;oldid=10347" title="Permanent link to this revision of the page">Permanent link</a></li>
											<li id="t-info"><a href="/wiki/index.php?title=Octave_for_Microsoft_Windows&amp;action=info" title="More information about this page">Page information</a></li>
									</ul>
							</div>
		</div>
			</div><!-- end of the left (by default at least) column -->
		<div class="visualClear"></div>
					<div id="footer" role="contentinfo">
						<div id="f-poweredbyico">
									<a href="//www.mediawiki.org/"><img src="/wiki/resources/assets/poweredby_mediawiki_88x31.png" alt="Powered by MediaWiki" srcset="/wiki/resources/assets/poweredby_mediawiki_132x47.png 1.5x, /wiki/resources/assets/poweredby_mediawiki_176x62.png 2x" width="88" height="31"/></a>
							</div>
					<ul id="f-list">
									<li id="lastmod"> This page was last modified on 11 May 2017, at 12:25.</li>
									<li id="privacy"><a href="/Octave:Privacy_policy" title="Octave:Privacy policy">Privacy policy</a></li>
									<li id="about"><a href="/Octave:About" title="Octave:About">About Octave</a></li>
									<li id="disclaimer"><a href="/Octave:General_disclaimer" title="Octave:General disclaimer">Disclaimers</a></li>
							</ul>
		</div>
		</div>
		<script>(window.RLQ=window.RLQ||[]).push(function(){mw.loader.load(["mediawiki.toc","mediawiki.action.view.postEdit","site","mediawiki.user","mediawiki.hidpi","mediawiki.page.ready","mediawiki.searchSuggest"]);});</script><script>(window.RLQ=window.RLQ||[]).push(function(){mw.config.set({"wgBackendResponseTime":652});});</script></body></html>
