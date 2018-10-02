<!DOCTYPE 
  HTML PUBLIC 
  "-//W3C//DTD HTML 4.01 Transitional//EN" 
  "http://www.w3.org/TR/html4/loose.dtd">

<!--

//
// Copyright (C) Julian I. Kamil <julian.kamil@gmail.com>
// No warranty is provided.  Use at your own risk.
//
// Commercial support is available through ESV Media Group
// who can be reached at: http://www.ESV-i.com/.
//
// Name: simple.tmpl
// Author: Julian I. Kamil <julian.kamil@gmail.com>
// Created: 2005-05-18
// Description:
//     This is a simple skin for PmWiki. Please see:
//         http://www.madhckr.com/project/PmWiki/SimpleSkin
//     for a live example and doumentation.
//
// $Id: simple.tmpl,v 1.1 2005/08/17 19:24:54 julian Exp $
//
// History:
//     2005-05-18  jik  Created.
//     2005-06-21  jik  Added the directive that enables
//                      the injection of additional stylesheets.
//     2005/06/27  jik  Added SkinTone feature.
//     2005/07/06  jik  Added group name in the title.
//     2005/07/15  jik  Added code to style abbr on IE.
//
//     2005-11-02  ksc  Added SideBar & removed menu
//                      Fixed IE detection
//		2005-11-06	ksc	Changed old menu style in favor of *.PageActions (suggested by MarcSeibert)
//						Fixed goofed isIE var
//
-->

<html>
    <head>
        <title>David Barber : Brml - Online browse</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <!--HeaderText--><style type='text/css'><!--
  ul, ol, pre, dl, p { margin-top:0px; margin-bottom:0px; }
  code.escaped { white-space: nowrap; }
  .vspace { margin-top:1.33em; }
  .indent { margin-left:40px; }
  .outdent { margin-left:40px; text-indent:-40px; }
  a.createlinktext { text-decoration:none; border-bottom:1px dotted gray; }
  a.createlink { text-decoration:none; position:relative; top:-0.5em;
    font-weight:bold; font-size:smaller; border-bottom:none; }
  img { border:0px; }
  .editconflict { color:green; 
  font-style:italic; margin-top:1.33em; margin-bottom:1.33em; }

  table.markup { border:2px dotted #ccf; width:90%; }
  td.markup1, td.markup2 { padding-left:10px; padding-right:10px; }
  table.vert td.markup1 { border-bottom:1px solid #ccf; }
  table.horiz td.markup1 { width:23em; border-right:1px solid #ccf; }
  table.markup caption { text-align:left; }
  div.faq p, div.faq pre { margin-left:2em; }
  div.faq p.question { margin:1em 0 0.75em 0; font-weight:bold; }
  div.faqtoc div.faq * { display:none; }
  div.faqtoc div.faq p.question 
    { display:block; font-weight:normal; margin:0.5em 0 0.5em 20px; line-height:normal; }
  div.faqtoc div.faq p.question * { display:inline; }
   
    .frame 
      { border:1px solid #cccccc; padding:4px; background-color:#f9f9f9; }
    .lfloat { float:left; margin-right:0.5em; }
    .rfloat { float:right; margin-left:0.5em; }
a.varlink { text-decoration:none; }

--></style><meta http-equiv='Content-Type' content='text/html; charset=utf-8' /><link rel='stylesheet' href='http://web4.cs.ucl.ac.uk/staff/D.Barber/pmwiki/pub/css/kob.css' type='text/css' />
<script type='text/JavaScript'>
<!--
Nix={map:null,convert:function(a){Nix.init();var s='';for(i=0;i<a.length;i++){var b=a.charAt(i);s+=((b>='A'&&b<='Z')||(b>='a'&&b<='z')?Nix.map[b]:b);}return s;},init:function(){if(Nix.map!=null)return;var map=new Array();var s='abcdefghijklmnopqrstuvwxyz';for(i=0;i<s.length;i++)map[s.charAt(i)]=s.charAt((i+13)%26);for(i=0;i<s.length;i++)map[s.charAt(i).toUpperCase()]=s.charAt((i+13)%26).toUpperCase();Nix.map=map;},decode:function(a){document.write(Nix.convert(a));}}
//-->
</script>

  <script src='http://www.google-analytics.com/urchin.js'
   type='text/javascript'></script>
  <script type='text/javascript'>
    _uacct = 'UA-792170-3';
    urchinTracker();
  </script><script type="text/javascript"  
  src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-MML-AM_HTMLorMML-full">
  </script><meta name="generator" content="BlogIt 20160330" /><link rel="stylesheet" href="http:web4.cs.ucl.ac.uk/staff/D.Barber/pmwiki/pub/blogit/jbox.css" type="text/css" /><link rel="stylesheet" href="http:web4.cs.ucl.ac.uk/staff/D.Barber/pmwiki/pub/blogit/awesomplete.css" type="text/css" /><link rel="stylesheet" href="http:web4.cs.ucl.ac.uk/staff/D.Barber/pmwiki/pub/blogit/blogit.min.css" type="text/css" /><link rel="alternate" type="application/rss+xml" title="David Barber" href="http://web4.cs.ucl.ac.uk/staff/D.Barber/pmwiki/pmwiki.php?n=Site.BlogIt-Admin?action=rss" />  <meta name='robots' content='index,follow' />

        <link rel='stylesheet' title="(NotSo) Simple" href='http://web4.cs.ucl.ac.uk/staff/D.Barber/pmwiki/pub/skins/notsosimple/notsosimple.css' type='text/css' />

		<script type="text/javascript">
		<!-- //
		
		isIE = 0;
		browser_type = navigator.appName;
		if (browser_type == "Microsoft Internet Explorer") { 
			document.write("<link href='http://web4.cs.ucl.ac.uk/staff/D.Barber/pmwiki/pub/skins/notsosimple/notsosimple-ie.css' rel='stylesheet' type='text/css' />"); 
			isIE = 1;
		}

        function styleAbbr() {
            var oldBodyText, newBodyText, reg;
            if (isIE) {
                oldBodyText = document.body.innerHTML;
                reg = /<ABBR([^>]*)>([^<]*)<\/ABBR>/g;
                newBodyText = oldBodyText.replace(reg, '<ABBR $1><SPAN class=\"abbr\" $1>$2</SPAN></ABBR>');
                document.body.innerHTML = newBodyText;
            }
        }

        window.onload = function(){
            styleAbbr();
        };

        // -->
        </script>
    </head>

    <body bgcolor="#ffffff">
	    
		<div id="header" style="border: 1px none #ccf; 
			background: url(http://web4.cs.ucl.ac.uk/staff/D.Barber/pmwiki/pub/skins/notsosimple/image/Box-Top-Red.jpg) no-repeat; " 
            title='Brml &raquo; Online was last modified on February 02, 2017, at 06:41 PM'>
            <table width="100%" style="padding: 0px; margin:0px;">
                <tr>
                    <td style="padding: 0px; margin:0px; border: none;">
                        <div id="page-title"><a href='http://web4.cs.ucl.ac.uk/staff/D.Barber/pmwiki/pmwiki.php'>David Barber</a></div>
                        <div id="page-subtitle"><a href='http://web4.cs.ucl.ac.uk/staff/D.Barber/pmwiki/pmwiki.php?n=Brml' title='Brml Home'>Brml</a> :: Online</div>
                    </td>
                    <td align="right" width="120" 
                        style="padding: 0px; margin:0px; padding-top: 16px; border: none;">
                        <center>
                            <!--<a href="http://web4.cs.ucl.ac.uk/staff/D.Barber/pmwiki/pmwiki.php?n=Main"><img src="http:web4.cs.ucl.ac.uk/staff/D.Barber/pmwiki/pub/skins/pmwiki/pmwiki-32.gif" border="0" /></a>-->
                        </center>
                    </td>
                </tr>
            </table>
        </div>

        <div id="main">
            <div id="menubar" style="display: none;">
                <div id="wikicmds" align="right">
					<ul><li class='browse'>      <a accesskey=''  rel='nofollow'  class='selflink' href='http://web4.cs.ucl.ac.uk/staff/D.Barber/pmwiki/pmwiki.php?n=Brml.Online'>View</a>
</li><li class='edit'>      <a accesskey='e'  rel='nofollow'  class='wikilink' href='http://web4.cs.ucl.ac.uk/staff/D.Barber/pmwiki/pmwiki.php?n=Brml.Online?action=edit'>Edit</a>
</li><li class='diff'>   <a accesskey='h'  rel='nofollow'  class='wikilink' href='http://web4.cs.ucl.ac.uk/staff/D.Barber/pmwiki/pmwiki.php?n=Brml.Online?action=diff'>History</a>
</li><li class='print'>     <a accesskey=''  rel='nofollow'  class='wikilink' href='http://web4.cs.ucl.ac.uk/staff/D.Barber/pmwiki/pmwiki.php?n=Brml.Online?action=print'>Print</a>
</li></ul>

                </div>
                <div class="clearer"></div>
            </div>

            <div class="content-mat">
                <div id="content">
					<div id='sidebar'><div> <img width='160px' src='../textbook/jacket.gif' alt='' title='' /></div>
<p class='vspace'><a class='wikilink' href='http://web4.cs.ucl.ac.uk/staff/D.Barber/pmwiki/pmwiki.php?n=Brml.HomePage'>BRML Homepage</a>
</p>
<p class='vspace'><a class='selflink' href='http://web4.cs.ucl.ac.uk/staff/D.Barber/pmwiki/pmwiki.php?n=Brml.Online'>Online version &amp; Errata</a>
</p>
<p class='vspace'><a class='wikilink' href='http://web4.cs.ucl.ac.uk/staff/D.Barber/pmwiki/pmwiki.php?n=Brml.Software'>Software</a>
</p>
<p class='vspace'><a class='wikilink' href='http://web4.cs.ucl.ac.uk/staff/D.Barber/pmwiki/pmwiki.php?n=Brml.Instructors'>Instructors Material</a>
</p>
<p class='vspace'><a class='wikilink' href='http://web4.cs.ucl.ac.uk/staff/D.Barber/pmwiki/pmwiki.php?n=Main.HomePage'>David Barber</a>
</p>
</div>
                    <!--PageText-->
<div id='wikitext'>
<p><strong>Online Versions &amp; Errata</strong><br clear='all' />
</p>
<p class='vspace'>The online version differs from the hardcopy in page numbering so please refer to the hardcopy if you wish to cite a particular page.  The list of errata for the first edition is <a class='wikilink' href='http://web4.cs.ucl.ac.uk/staff/D.Barber/pmwiki/pmwiki.php?n=Brml.Errata'>here</a>.
</p>
<p class='vspace'><!--Note for GI08 students: the starred sections (and chapters) are non-examinable.-->
<!---'''Bonus marks''' are still available if you find an error in the examinable part of the notes.--->
<!--* [[Path:../textbook/30908.pdf|30 Sept 2008]] This is just an initial version which covers some of the introductory material to Graphical Models. This constitutes the bulk of material that will be presented to UCL Graphical Model students.[[&lt;&lt;]]-->
<!--* [[Path:../textbook/031008.pdf|3 Oct 2008]] Added material about Random Walks and Markov Decision Processes-->
<!--* [[Path:../textbook/071008.pdf|7 Oct 2008]] Introduction to Machine Learning and the basic empirical risk versus Bayesian approaches.-->
<!--* [[Path:../textbook/091008.pdf|9 Oct 2008]] Includes an initial discussion of Learning as Bayesian inference.-->
<!--* [[Path:../textbook/141008.pdf|14 Oct 2008]] Includes a discussion of Bayesian Model Selection.-->
<!--* [[Path:../textbook/221008.pdf|22 Oct 2008]] More on soft evidence.-->
<!--* [[Path:../textbook/301008.pdf|30 Oct 2008]] Introductory material on distributions. Changed the layout to save paper.-->
<!--* [[Path:../textbook/010908.pdf|1 Nov 2008]] Minor update.-->
<!--* [[Path:../textbook/111108.pdf|11 Nov 2008]] Update including all corrections below to this date -- many thanks for your help -- credit will be awarded appropriately.-->
<!--* [[Path:../textbook/141108.pdf|14 Nov 2008]] Includes matlab/octave code.-->
<!--* [[Path:../textbook/191108.pdf|19 Nov 2008]] Includes more on shortest paths. Also an introduction to Machine Learning. More to come later on this.-->
<!--* [[Path:../textbook/261108.pdf|26 Nov 2008]] More on Influence Diagrams and learning discrete tables. Should have all errors corrected identified up to this date.-->
<!--* [[Path:../textbook/041208.pdf|04 Dec 2008]] Draft of learning in hidden variable models.-->
<!--* [[Path:../textbook/111208.pdf|11 Dec 2008]] More Machine Learning stuff.-->
<!--* [[Path:../textbook/140109.pdf|14 Jan 2009]] There were some big fat juicy bugs in the POMDP section, so many that I removed the whole section. Much of the added material on Machine Learning is still very much in the draft stage.-->
<!--* [[Path:../textbook/200109.pdf|20 Jan 2009]] Draft material on Gaussian Processes.-->
<!--* [[Path:../textbook/010209.pdf|1 Feb 2009]] Draft material on Hidden Markov Models.-->
<!--* [[Path:../textbook/060209.pdf|6 Feb 2009]] Draft material on Linear Dynamical Systems and Mixture Models.-->
<!--* [[Path:../textbook/260209.pdf|26 Feb 2009]] Some draft stuff on approximate inference and also Probabilistic Planning.-->
<!--* [[Path:../textbook/090309.pdf|9 Mar 2009]] Draft on Switching Linear Dynamical Systems.-->
<!--* [[Path:../textbook/100309.pdf|10 Mar 2009]] Minor update.-->
<!--* [[Path:../textbook/150309.pdf|15 Mar 2009]] First draft on distributed computation.-->
<!--* [[Path:../textbook/170309.pdf|17 Mar 2009]] Includes previously handed out material on Naive Bayes.-->
<!--* [[Path:../textbook/190309.pdf|19 Mar 2009]] Minor update.-->
<!--* [[Path:../textbook/270309.pdf|27 Mar 2009]] Minor update.-->
<!--* [[Path:../textbook/300309.pdf|30 Mar 2009]] Minor update.-->
<!--* [[Path:../textbook/010409.pdf|1 Apr 2009]] Minor update.-->
<!--* [[Path:../textbook/050409.pdf|5 Apr 2009]] Minor update.-->
<!--* [[Path:../textbook/100409.pdf|10 Apr 2009]] Minor update.-->
<!--* [[Path:../textbook/220409.pdf|22 Apr 2009]] Minor update.-->
<!--* [[Path:../textbook/040509.pdf|4 May 2009]] Corrections made to first 14 chapters.-->
<!--* [[Path:../textbook/060509.pdf|6 May 2009]] Minor corrections in first 14 chapters.-->
<!--* [[Path:../textbook/140509.pdf|14 May 2009]] Minor corrections in first 16 chapters -- remaining chapters are still early drafts.-->
<!--* [[Path:../textbook/260509.pdf|26 May 2009]] Minor corrections in first 21 chapters.-->
<!--* [[Path:../textbook/150609.pdf|15 June 2009]] Minor corrections in first 25 chapters -- remaining chapters are still early drafts.-->
<!--* [[Path:../textbook/230609.pdf|23 June 2009]] Still rather drafty in places but first 27 chapters are now almost complete.-->
<!--* [[Path:../textbook/070709.pdf|7 July 2009]] Still rather drafty in places but first 27 chapters are now almost complete. Minor update.-->
<!--* [[Path:../textbook/090709.pdf|9 July 2009]] Still rather drafty.-->
<!--* [[Path:../textbook/160709.pdf|16 July 2009]] Bug fixes in the Decision Tree section, plus fundamental code changes. Draft appendix on background mathematics.-->
<!-- * [[Path:../textbook/230709.pdf|23 July 2009]] Bug fixes mainly.-->
<!-- * [[Path:../textbook/050809.pdf|5 August 2009]] First complete draft.-->
<!-- * [[Path:../textbook/040909.pdf|4 September 2009]] Bug fixes in part I.-->
<!-- * [[Path:../textbook/230909.pdf|23 September 2009]] Bug fixes in parts I,II,III.-->
<!--* [[Path:../textbook/051009.pdf|5 October 2009]] Bug fixes in parts I,II,III,IV,V. Appendix remains uncorrected.-->
<!--* [[Path:../textbook/201009.pdf|20 October 2009]] Appendix  corrected and updates to Bayes Net chapter.-->
<!--* [[Path:../textbook/251009.pdf|25 October 2009]] Minor updates in intro to GM chapter and efficient inference.-->
<!--* [[Path:../textbook/021109.pdf|2 November 2009]] Minor update.-->
<!--* [[Path:../textbook/051109.pdf|5 November 2009]] Updated Junction Tree chapter.-->
<!--* [[Path:../textbook/181109.pdf|18 November 2009]] Minor update.-->
<!--* [[Path:../textbook/201109.pdf|20 November 2009]] Updated influence diagram section.-->
<!--* [[Path:../textbook/261109.pdf|26 November 2009]] Minor update.-->
<!--* [[Path:../textbook/301109.pdf|30 November 2009]] Minor update.-->
<!--* [[Path:../textbook/021209.pdf|2 December 2009]] Updated learning as inference chapter.-->
<!--* [[Path:../textbook/051209.pdf|5 December 2009]] Updated Naive Bayes chapter.-->
<!--* [[Path:../textbook/101209.pdf|10 December 2009]] Minor updates in Naive Bayes chapter.-->
<!--* [[Path:../textbook/211209.pdf|21 December 2009]] The code listings have been removed to save space. Minor updates in the training with latent variables chapter.-->
<!--* [[Path:../textbook/301209.pdf|30 December 2009]] Update on training using IPF. Additional minor updates throughout.-->
<!--* [[Path:../textbook/311209.pdf|31 December 2009]] Updated format to save space.-->
<!--* [[Path:../textbook/030110.pdf|3 January 2010]] Minor updates in chapters 16,17,18.-->
<!--* [[Path:../textbook/040110.pdf|4 January 2010]] Corrected the page layout.-->
<!--* [[Path:../textbook/050110.pdf|5 January 2010]] Minor update.-->
<!--* [[Path:../textbook/070110.pdf|7 January 2010]] Minor update.-->
<!--* [[Path:../textbook/130110.pdf|13 January 2010]] Minor update.-->
<!--* [[Path:../textbook/190110.pdf|19 January 2010]] Minor updates in the intro to Belief nets.-->
<!--* [[Path:../textbook/220110.pdf|22 January 2010]] Minor update.-->
<!--* [[Path:../textbook/260110.pdf|26 January 2010]] Minor update.-->
<!--* [[Path:../textbook/190210.pdf|19 February 2010]] Minor update.-->
<!--* [[Path:../textbook/240210.pdf|24 February 2010]] Minor update.-->
<!--* [[Path:../textbook/260210.pdf|26 February 2010]] Minor update.-->
<!--* [[Path:../textbook/020310.pdf|2 March  2010]] Minor update.-->
<!--* [[Path:../textbook/090310.pdf|9 March  2010]] Minor update.-->
<!--* [[Path:../textbook/230310.pdf|23 March  2010]] Minor update.-->
<!--* [[Path:../textbook/260310.pdf|26 March  2010]] Updated Sampling Chapter. Also included a discussion of Shafer-Shenoy propagation in the JT chapter.-->
<!--* [[Path:../textbook/280310.pdf|28 March  2010]] Updated Approximate Inference Chapter and Appendix.-->
<!--* [[Path:../textbook/100410.pdf|10 April 2010]] Additional roadmaps and intro sections throughout.-->  
<!--* [[Path:../textbook/260410.pdf|26 April 2010]] Revised preface and minor updates throughout. -->
<!--* [[Path:../textbook/060510.pdf|6 May 2010]] Changed the graphical rules for separation to be more consistent with path blocking.-->
<!--* [[Path:../textbook/110510.pdf|11 May 2010]] Minor update.-->
<!--* [[Path:../textbook/080610.pdf|8 June 2010]] Minor update.-->
<!--* [[Path:../textbook/020810.pdf|2 August 2010]] Minor update.-->
<!--* [[Path:../textbook/310810.pdf|31 August 2010]] Minor update, including a short section on options pricing and investment.-->
<!--* [[Path:../textbook/111010.pdf|11 October 2010]] Minor update to correct some typos. Note that the exercise numbering changed in chapters 3 and 4.-->
<!--* [[Path:../textbook/141010.pdf|14 October 2010]] Minor typos in first three chapters. Included a scientific inference example in first chapter.-->
<!--* [[Path:../textbook/281010.pdf|28 October 2010]] Usual typos. Moved some material around in chapters 8 and 9.-->
<!--* [[Path:../textbook/301010.pdf|30 October 2010]] Moved some material around in chapters 8 and 9 and added internal hyperlinks.-->
<!--* [[Path:../textbook/021210.pdf|2 December 2010]] Minor update.-->
<!--* [[Path:../textbook/061210.pdf|6 December 2010]] Minor update.-->
<!--* [[Path:../textbook/121210.pdf|12 December 2010]] Minor update.-->
<!--* [[Path:../textbook/130311.pdf|13 March 2011]] Minor update.-->
<!--* [[Path:../textbook/220311.pdf|22 March 2011]] Corrected a bug in the importance sampling discussion.-->
<!--* [[Path:../textbook/040511.pdf|4 May 2011]] Corrected some bugs in the influence diagram/MDP discussion.-->
<!--* [[Path:../textbook/240511.pdf|24 May 2011]] Minor update.-->
<!* [[Path:../textbook/180611.pdf|18 June 2011]] Minor update.-->
<!--* [[Path:../textbook/190811.pdf|19 August 2011]] General tidy up throughout.-->
<!--* [[Path:../textbook/200811.pdf|20 August 2011]] General tidy up throughout.-->
<!--* [[Path:../textbook/270811.pdf|27 August 2011]] General tidy up throughout.-->
<!--* [[Path:../textbook/041011.pdf|4 October 2011]] Minor typos corrected.-->
<!--* [[Path:../textbook/211111.pdf|21 November 2011]] Minor typos corrected.-->
<!--* [[Path:../textbook/270212.pdf|27 February 2012]] This version corresponds to the published version differing only in minor text details. There are some errata (in magenta) and addenda (in blue) from the published version highlighted using the margin text `@@' and `++'.  [[&lt;&lt;]][[&lt;&lt;]]-->
<!--* [[Path:../textbook/61112.pdf|6 November 2012]]-->
<!* [[Path:../textbook/030113.pdf|3 January 2013]]-->
<!--* [[Path:../textbook/090113.pdf|9 January 2013]]--> 
<!--* [[Path:../textbook/290313.pdf|29 March 2013]]-->
<!--[[Path:../textbook/180613.pdf|18 June 2013]]-->
<!--[[Path:../textbook/031013.pdf|3 October 2013]]-->
<!--[[Path:../textbook/180613.pdf|18 June 2013]]-->
<!--[[Path:../textbook/091213.pdf|9 December 2013]]-->
<!--[[Path:../textbook/250214.pdf|25 February 2014]]-->
<!--[[Path:../textbook/071014.pdf|7 October 2014]]-->
<!--[[Path:../textbook/161014.pdf|16 October 2014]]-->
<!--[[Path:../textbook/241014.pdf|24 October 2014]]-->
<!--[[Path:../textbook/311014.pdf|31 October 2014]]-->
<!--[[Path:../textbook/031114.pdf|3 November 2014]]-->
<!--[[Path:../textbook/041114.pdf|4 November 2014]]-->
<!--[[Path:../textbook/061114.pdf|6 November 2014]]-->
<!--[[Path:../textbook/231114.pdf|23 November 2014]]-->
<!--[[Path:../textbook/091214.pdf|9 December 2014]]-->
<!--[[Path:../textbook/131214.pdf|13 December 2014]]-->
<!--[[Path:../textbook/160315.pdf|16 March 2015]]-->
<!--[[Path:../textbook/240415.pdf|24 April 2015]]-->
<!--[[Path:../textbook/051115.pdf|5 Nov 2015]]-->
<!--[[Path:../textbook/101115.pdf|10 Nov 2015]]-->
<!--[[Path:../textbook/121115.pdf|12 Nov 2015]]-->
<!--[[Path:../textbook/181115.pdf|18 Nov 2015]]-->
<!--[[Path:../textbook/231116.pdf|23 Nov 2016]]-->
<!--[[Path:../textbook/011216.pdf|1 Dec 2016]]-->
<!--[[Path:../textbook/061216.pdf|6 Dec 2016]]-->
<!--[[Path:../textbook/141216.pdf|14 Dec 2016]]-->
<!--[[Path:../textbook/171216.pdf|17 Dec 2016]]-->
<a class='urllink' href='../textbook/020217.pdf' rel='nofollow'>2 Feb 2017</a>
</p>
<p class='vspace'>This version corresponds to the published Cambridge University Press version, differing only in minor text details. There are some errata (in magenta) and addenda (in blue) from the published version highlighted using the margin text `@@' and `++'.  <br clear='all' /><br clear='all' />
</p>
<p class='vspace'>Please leave a <a class='wikilink' href='http://web4.cs.ucl.ac.uk/staff/D.Barber/pmwiki/pmwiki.php?n=Brml.Comments'>comment</a> if you find an error or have a suggestion.
</p>
</div>

                </div>
                <div class="clearer"></div>
            </div>
        </div>

        <div id="footer">
            <div id="copyright">
                <span style="float: left; padding-left: 20px;">
                     
                </span>
                <span style="float: right; display: block; padding-right: 20px;">
                    <span id='sitepoweredby' title='Powered by PmWiki'>
    Powered by <a href='http://www.pmichaud.com/wiki/PmWiki/PmWiki' title='PmWiki Home'>PmWiki</a>
</span>
                </span>
            </div>
        </div>
<!--HTMLfooter-->
    </body>
</html>
