<HTML><HEAD><TITLE>tadview 120624</TITLE></HEAD><BODY>
<H1>tadview 120624</H1>

<FORM enctype="multipart/form-data" method=POST>
<P>
<INPUT type=file name=fl><INPUT type=submit>
<BR>[NOT WORK]input:
	<LABEL><INPUT type=radio name=input value=0 checked>TAD</LABEL>
	<LABEL><INPUT type=radio name=input value=1>TAD-text</LABEL>
	<LABEL><INPUT type=radio name=input value=2>TAD with [ffff]</LABEL>
	<LABEL><INPUT type=radio name=input value=3>ASCII with [ffff]</LABEL>
<BR>output:
	<LABEL><INPUT type=radio name=output value=1>image</LABEL>
	<!-- LABEL INPUT type=radio name=output value=2 PNG /LABEL -->
	<LABEL><INPUT type=radio name=output value=3>PDF</LABEL>
	<LABEL><INPUT type=radio name=output value=4 checked>PDF with font</LABEL>
	<LABEL><INPUT type=radio name=output value=5>SVG</LABEL>
	<LABEL><INPUT type=radio name=output value=0>none</LABEL>
	<LABEL><INPUT type=radio name=output value="-1">dump</LABEL>
	<LABEL><INPUT type=radio name=output value="-2">draw-log</LABEL>
----<LABEL><INPUT type=checkbox name=binary value=1>download</LABEL>
<BR>image:
	<LABEL><INPUT type=radio name=jpeg value=0 checked>PNG</LABEL>
	<LABEL><INPUT type=radio name=jpeg value=1>JPEG</LABEL>
<BR>truecolor:
	<LABEL><INPUT type=radio name=truecolor value=2 checked>all</LABEL>
	<LABEL><INPUT type=radio name=truecolor value=1>without text</LABEL>
	<LABEL><INPUT type=radio name=truecolor value=0>none</LABEL>
<BR>figure TAD output size:
	<LABEL><INPUT type=radio name=figurepage value=0>argued size</LABEL>
	<LABEL><INPUT type=radio name=figurepage value=1>contain all objects</LABEL>
	<LABEL><INPUT type=radio name=figurepage value=2 checked>paper size</LABEL>
<BR>[NOT WORK]default colormap:
	<LABEL><INPUT type=radio name=colormap value=0 checked>none</LABEL>
	<LABEL><INPUT type=radio name=colormap value=1>1B monochrome</LABEL>
	<LABEL><INPUT type=radio name=colormap value=2>1B color</LABEL>
	<LABEL><INPUT type=radio name=colormap value=3>M-CUBE beta</LABEL>
	<LABEL><INPUT type=radio name=colormap value=4>M-CUBE</LABEL>
	<LABEL><INPUT type=radio name=colormap value=5>TiPO</LABEL>
	<LABEL><INPUT type=radio name=colormap value=6>B-right/V</LABEL>
	<LABEL><INPUT type=radio name=colormap value=7>B-right/V R3</LABEL>
----<LABEL><INPUT type=checkbox name=colormapignore value=1>ignore colormap on file</LABEL>
</P>
</FORM>

<!-- write message here -->
<hr>このバージョンでは、図形TAD形式と文章TAD形式のデータ(TAD主レコード)をサポートします。
<!-- write message here -->
<BR>
<BR>
<DIV ALIGN="RIGHT">&#169; TAD Working Group, 2002-2010</DIV>
<!-- write message here -->
<HR></BODY></HTML>