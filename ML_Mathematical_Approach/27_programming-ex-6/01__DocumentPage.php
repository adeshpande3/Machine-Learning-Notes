<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
<head> 
	 
	 
	<title>
	Machine Learning	</title>
	<meta name="author" content="openclassroom.stanford.edu" /> 
	<meta name="description" content="K-12 Free Education." /> 
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="css/common.css" />
	<base href = http://openclassroom.stanford.edu/MainFolder/courses/MachineLearning/exercises/ex7/ex7.html />


<script type="text/javascript" language="javascript">
var display = 0;
function showSolution()
  {
  if(display==0)
    {
    display = 1;
    document.getElementById("solutionDiv").style.display = "block";
    document.getElementById("button1").value = "Hide Solution";
    }
  else
    {
    display = 0;
    document.getElementById("solutionDiv").style.display = "none";
    document.getElementById("button1").value = "Show Solution";
    }
  }
</script>



	
</head> 
 
 	<div class="inner"> 
    
	<div id="header"> 			
		<ul id="navigation"> 
			<li><a href="http://openclassroom.stanford.edu/MainFolder/HomePage.php">OpenClassroom</a></li> 
		</ul> 
	</div> 
 
	<div id="main" class=""> 
		<div id="feature-bar">
			<div class="tabbed">
				<div id="left">
				<a href= http://openclassroom.stanford.edu/MainFolder/CoursePage.php?course=MachineLearning >
				    <img src= http://openclassroom.stanford.edu/MainFolder/courses/MachineLearning/ML-icon2.png					alt= Machine Learning                    		class="thumb" /> 
				</a>
				</div>
   	    			<div id="title-text">
            			<a href= http://openclassroom.stanford.edu/MainFolder/CoursePage.php?course=MachineLearning ><h1>Machine Learning</h1></a>
					<h2>Andrew Ng</h2>
            		</div>
			</div> 
    		</div>
		<div class="tabbed">
			<div class="results-list"> 
				<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<!--Converted with LaTeX2HTML 2008 (1.71)
original version by:  Nikos Drakos, CBLU, University of Leeds
* revised and updated by:  Marcus Hennecke, Ross Moore, Herb Swan
* with significant contributions from:
  Jens Lippmann, Marek Rouchal, Martin Wilck and others -->
<HTML>
<HEAD>
<TITLE>ex7</TITLE>
<META NAME="description" CONTENT="ex7">
<META NAME="keywords" CONTENT="ex7">
<META NAME="resource-type" CONTENT="document">
<META NAME="distribution" CONTENT="global">

<META NAME="Generator" CONTENT="LaTeX2HTML v2008">
<META HTTP-EQUIV="Content-Style-Type" CONTENT="text/css">

<LINK REL="STYLESHEET" HREF="ex7.css">

</HEAD>

<BODY text="#000000" bgcolor="#FFFFFF">

<P>

<P>
<BIG CLASS="XHUGE"><B>Exercise 7: SVM Linear Classification</B></BIG>

<P>
This exercise gives you practice with using SVMs for linear classification.
You will use a free SVM software package called

<a href="http://www.csie.ntu.edu.tw/~cjlin/libsvm/">LIBSVM</a> that interfaces to MATLAB/Octave. To begin, download the 

<a href="http://www.csie.ntu.edu.tw/~cjlin/libsvm/#matlab">
LIBSVM Matlab Interface</a> (choose the package with the description "a simple MATLAB interface") and
unzip the contents to any convenient location on your computer.

<P>
Then, download the data for this exercise: 
<a href="http://openclassroom.stanford.edu/MainFolder/courses/MachineLearning/exercises/ex7materials/ex7Data.zip">ex7Data.zip</a>. 

<P>

<P><P>
<BR>

<P>
<BIG CLASS="XLARGE"><B>Installing LIBSVM</B></BIG> 

<P>
After you've downloaded the 

<a href="http://www.csie.ntu.edu.tw/~cjlin/libsvm/#matlab">
LIBSVM Matlab Interface,</a>
follow the instructions in the package's README file
 to build LIBSVM from its source code. Instructions are provided for both
Matlab and Octave on Unix and Windows systems.

<P>
If you've built LIBSVM successfully, you should see 4 files with the suffix "mexglx"
 ("mexw32" on Windows). These are the binaries that you will run from MATLAB/Octave, and you 
need to make them visible to your working directory for this exercise. 
This can be done in any of the following 3 ways:

<P>
(1). Creating links to the binaries from your working directory

<P>
(2). Adding the location of the binaries to the Matlab/Octave path

<P>
(3). Copying the binaries to your working directory.

<P>
<BIG CLASS="XLARGE"><B>Linear classification</B></BIG> 

<P>
Recall from the video lectures that SVM classification solves the following
optimization problem:

<P>
<BR><P></P>
<DIV ALIGN="CENTER" CLASS="mathdisplay">
<!-- MATH
 \begin{displaymath}
\min_{w,b}\qquad\left\Vert w\right\Vert ^{2}+C\sum_{i}^{m}\xi_{i}
\end{displaymath}
 -->

<IMG
 WIDTH="191" HEIGHT="55" BORDER="0"
 SRC="img1.png"
 ALT="\begin{displaymath}
\min_{w,b}\qquad\left\Vert w\right\Vert ^{2}+C\sum_{i}^{m}\xi_{i}
\end{displaymath}">
</DIV>
<BR CLEAR="ALL">
<P></P>

<P>
<P></P>
<DIV ALIGN="CENTER" CLASS="mathdisplay">
<!-- MATH
 \begin{eqnarray*}
\mbox{subject to}\qquad y^{(i)}(w^{T}x^{(i)}+b) & \geq & 1-\xi_{i},\qquad i=1,2...,m\\
\xi_{i} & \geq & 0,\qquad i=1,2...,m
\end{eqnarray*}
 -->
<IMG
 WIDTH="478" HEIGHT="60" BORDER="0"
 SRC="img2.png"
 ALT="\begin{eqnarray*}
\mbox{subject to}\qquad y^{(i)}(w^{T}x^{(i)}+b) &amp; \geq &amp; 1-\xi_{i},\qquad i=1,2...,m\\
\xi_{i} &amp; \geq &amp; 0,\qquad i=1,2...,m\end{eqnarray*}"></DIV>
<BR CLEAR="ALL"><P></P>
<BR CLEAR="ALL"><P></P>

<P>
After solving, the SVM classifier predicts "1" 
if <!-- MATH
 $w^T x + b \geq 0$
 -->
<SPAN CLASS="MATH"><IMG
 WIDTH="106" HEIGHT="39" ALIGN="MIDDLE" BORDER="0"
 SRC="img3.png"
 ALT="$w^T x + b \geq 0$"></SPAN> and "-1" otherwise. The decision boundary is given by the
line <SPAN CLASS="MATH"><IMG
 WIDTH="105" HEIGHT="39" ALIGN="MIDDLE" BORDER="0"
 SRC="img4.png"
 ALT="$w^T x + b = 0$"></SPAN>.

<P>
<BIG CLASS="XLARGE"><B>2-Dimensional classification problem </B></BIG>

<P>
Let's first consider a classification problem with two features. 
Load the "twofeature.txt" data file into Matlab/Octave with the following 
command:

<P>
<PRE>
[trainlabels, trainfeatures] = libsvmread('twofeature.txt');
</PRE>

<P>
Note that this file is formatted for LIBSVM, so loading it with the 
usual Matlab/Octave commands would not work. 

<P>
After loading, the "trainlabels" vector should contain the classification 
labels for your training data, and the "trainfeatures" matrix should contain 
2 features per training example. 

<P>
Now plot your data, using separate symbols for positives and negatives. Your
plot should look similar to this:

<P>
 <div align="center"> 
<img src="http://openclassroom.stanford.edu/MainFolder/courses/MachineLearning/exercises/ex7materials/twofeaturedata.png" 
alt="twofeaturedata.png" width="560" height="420"/> </div> 

<P>
In this plot, we see two classes of data with a somewhat obvious
 separation gap. However, the blue class has an outlier on the far left. 
We'll now look at how this outlier affects the SVM decision boundary.

<P>
<B>Setting cost to C = 1</B>

<P>
Recall from the lecture videos that the parameter <SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="17" ALIGN="BOTTOM" BORDER="0"
 SRC="img5.png"
 ALT="$C$"></SPAN> in the SVM optimization
problem is a positive cost factor that 
penalizes misclassified training examples. 
A larger <SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="17" ALIGN="BOTTOM" BORDER="0"
 SRC="img5.png"
 ALT="$C$"></SPAN> discourages misclassification more than a smaller <SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="17" ALIGN="BOTTOM" BORDER="0"
 SRC="img5.png"
 ALT="$C$"></SPAN>.

<P>
First, we'll run the classifier with <SPAN CLASS="MATH"><IMG
 WIDTH="54" HEIGHT="17" ALIGN="BOTTOM" BORDER="0"
 SRC="img6.png"
 ALT="$C = 1$"></SPAN>.

<P>
To train your model, call

<P>
<PRE>
model = svmtrain(trainlabels, trainfeatures, '-s 0 -t 0 -c 1');
</PRE>

<P>
The last string argument tells LIBSVM to train using the options

<P>
<B>a.</B> <TT>-s 0</TT>, SVM classification

<P>
<B>b.</B> <TT>-t 0</TT>, a linear kernel, because we want a linear decision boundary

<P>
<B>c.</B> <TT>-c 1</TT>, a cost factor of 1

<P>
You can see all available options by typing "svmtrain" at the Matlab/Octave
console.

<P>
After training is done, "model" will be a struct 
that contains the model parameters. We're now interested 
in getting the variables <SPAN CLASS="MATH"><IMG
 WIDTH="19" HEIGHT="17" ALIGN="BOTTOM" BORDER="0"
 SRC="img7.png"
 ALT="$w$"></SPAN> and <SPAN CLASS="MATH"><IMG
 WIDTH="13" HEIGHT="17" ALIGN="BOTTOM" BORDER="0"
 SRC="img8.png"
 ALT="$b$"></SPAN>. Unfortunately, these are not
 explicity represented in the model struct, but you can 
calculate them with the following commands:

<P>
<PRE>
w = model.SVs' * model.sv_coef;
b = -model.rho;
if (model.Label(1) == -1)
    w = -w; b = -b;
end
</PRE>

<P>
Once you have <SPAN CLASS="MATH"><IMG
 WIDTH="19" HEIGHT="17" ALIGN="BOTTOM" BORDER="0"
 SRC="img7.png"
 ALT="$w$"></SPAN> and <SPAN CLASS="MATH"><IMG
 WIDTH="13" HEIGHT="17" ALIGN="BOTTOM" BORDER="0"
 SRC="img8.png"
 ALT="$b$"></SPAN>, use them to plot the decision boundary. The outcome
should look like the graph below.

<P>
 <div align="center"> 
<img src="http://openclassroom.stanford.edu/MainFolder/courses/MachineLearning/exercises/ex7materials/twofeature_a.png" 
alt="twofeature_a.png" width="560" height="420"/> </div> 

<P>
With <SPAN CLASS="MATH"><IMG
 WIDTH="54" HEIGHT="17" ALIGN="BOTTOM" BORDER="0"
 SRC="img6.png"
 ALT="$C = 1$"></SPAN>, we see that the outlier is misclassified, but the decision boundary
seems like a reasonable fit.

<P>
<B>Setting cost to C = 100</B>

<P>
Now let's look at what happens when the cost factor is much higher. Train your
model and plot the decision boundary again, this time with <SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="17" ALIGN="BOTTOM" BORDER="0"
 SRC="img5.png"
 ALT="$C$"></SPAN> set to 100.
The outlier will now be classified correctly, but the decision boundary will
not seem like a natural fit for the rest of the data:

<P>
 <div align="center"> 
<img src="http://openclassroom.stanford.edu/MainFolder/courses/MachineLearning/exercises/ex7materials/twofeature_b.png" 
alt="twofeature_b.png" width="560" height="420"/> </div> 

<P>
This example shows that when cost penalty is large, the
 SVM algorithm will very hard to avoid misclassifications. The tradeoff is that
the algorithm will give less weight to producing a large separation margin.

<P>
<BIG CLASS="XLARGE"><B>Text classification</B></BIG>

<P>
Now let's return to our spam classification example from the previous exercise.
In your data folder, there should be the same 4 training sets you saw in the
Naive Bayes exercise, only now formatted for LIBSVM. They are named:

<P>
<B>a. </B> email_train-50.txt (based on 50 email documents)

<P>
<B>b. </B> email_train-100.txt (100 documents)

<P>
<B>c. </B> email_train-400.txt (400 documents)

<P>
<B>d. </B> email_train-all.txt (the complete 700 training documents)

<P>
You will train a linear SVM model on each of the four training sets with 
<SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="17" ALIGN="BOTTOM" BORDER="0"
 SRC="img5.png"
 ALT="$C$"></SPAN> left at the default SVM value. After training, test
 the performance of each model on set the named "email_test.txt." This
is done with the "svmpredict" command, which you can find out more about
by typing "svmpredict" at the MATLAB/Octave console.

<P>
During test time, the accuracy on the test set will be printed to the console.
Record the classification accuracy for each training set 
and check your answers with the solutions.
How do the errors compare to the Naive Bayes errors?

<P>

<div style='padding-left: 0px;'>
<input id="button1" type="button" onclick="showSolution()" value="Show Solution" style='font-size: 20px;'/>
</div>
<div id="solutionDiv" style='display: none'>

<P>
<BIG CLASS="XHUGE"><B>Solutions</B></BIG>

<P>

<P><P>
<BR>

<P>
An m-file implementation of the two-feature exercise can be found 

<a href="http://openclassroom.stanford.edu/MainFolder/courses/MachineLearning/exercises/ex7materials/twofeature.m" target="_blank">here.</a>

<P>
An m-file for the email classification exercise is 

<a href="http://openclassroom.stanford.edu/MainFolder/courses/MachineLearning/exercises/ex7materials/emails.m" target="_blank">here.</a>

<P>
<B>Classification accuracy</B>

<P>
Here are the classification performance results that LIBSVM reports. 

<P>
<B>a. </B> 50 documents: Accuracy = 75.3846% (196/260)

<P>
<B>b. </B> 100 documents: Accuracy =  88.4615% (230/260)

<P>
<B>c. </B> 400 documents: Accuracy = 98.0769% (255/260)

<P>
<B>d. </B> the complete 700 training documents: Accuracy = 98.4615% (256/260)

<P>
Here are the error comparisons with Naive Bayes:

<P>

<div align="center"> <table cellpadding = "10">
<tr align="center">
  <th> </th>
  <th>Naive Bayes</th>
  <th>SVM</th>
</tr>
<tr align="center">
  <th>50 train docs</th>
  <td>2.7%</td>
  <td>24.6%</td>
</tr>
<tr align="center">
  <th>100 train docs</th>
  <td>2.3%</td>
  <td>11.5%</td>
</tr>
<tr align="center">
  <th>400 train docs</th>
  <td>2.3%</td>
  <td>1.9%</td>
</tr>
<tr align="center">
  <th>700 train docs</th>
  <td>1.9%</td>
  <td>1.5%</td>
</tr>
</table> </div>

<P>
The conclusion from these results is that Naive
Bayes performs better than SVM with less data, but SVM shows better asymptotic
 performance as the amount of training data increases.

<P>
</div>

<P>
<BR><HR>

</BODY>
</HTML>
			</div> 
 
			<div class="results-more"> 
				<h3>Resources</h3> <br/>
				<ul class="related-resources"> 

<li><a href='http://openclassroom.stanford.edu/MainFolder/courses/MachineLearning/syllabus.html'>Syllabus</a> </li><li><a href='http://openclassroom.stanford.edu/MainFolder/courses/MachineLearning/faq.html'>FAQ</a> </li><li><a href='http://openclassroom.stanford.edu/MainFolder/DocumentPage.php?course=MachineLearning&doc=notes/credits.html'>Credits/Acknowledgments</a> </li>			

			</div> 
		</div>
	</div> 
		
	<div id="footer"> 
	<div class="tabbed">
		<!--<p> 
			<a href="/about" rel="nofollow">About Us</a>&nbsp;&nbsp;|&nbsp;&nbsp;
			<a href="/pages/contact/" rel="nofollow">Contact</a>&nbsp;&nbsp;|&nbsp;&nbsp;
			<a href="/pages/privacy" rel="nofollow">Privacy Policy</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;
			<a href="/pages/faq" rel="nofollow">FAQ</a>&nbsp;&nbsp;|&nbsp;&nbsp;</p> -->
			<p class="copyright">&copy;  2010-2012 <!--<a href="HomePage.php" title="OpenClassroom" style="color: #666666; font-weight: normal; text-decoration: none;">OpenClassroom</a>-->Andrew Ng, Stanford University. All rights reserved.<br />

<!--
				<a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-nc-sa/3.0/88x31.png" /></a>
				This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/">Creative Commons Attribution-NonCommercial-ShareAlike 3.0 Unported License</a> !-->
			</p> 
  	</div>
</div>


</body> 
</html> 
