<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:output method="xml" indent="yes" encoding="UTF-8" omit-xml-declaration="no"/>
<!--<xsl:strip-space elements="dict" />//-->

 
		<xsl:template match="dict">
		<dict>
			<xsl:apply-templates/>
		</dict>
		</xsl:template>
		
		<xsl:template match="entry">
			<pair>
			|<xsl:value-of select="hwblk/pos"/>|<xsl:value-of select="hwblk/hw"/>
			<xsl:apply-templates/></pair>
		</xsl:template>
		
		<xsl:template match="hwblk">
			<div/><xsl:apply-templates/><div/>
		</xsl:template>
		
		<xsl:template match="hw">
			<hw><b><xsl:apply-templates/></b></hw>
		</xsl:template>
		
		<xsl:template match="pos">
			<pos> (<i><xsl:apply-templates/></i>)</pos>
		</xsl:template>
		
		<xsl:template match="transblk">
			<transblk><xsl:apply-templates/></transblk>
		</xsl:template>
		
		<xsl:template match="trans">
		<xsl:choose>
			<xsl:when test="following-sibling::trans">
				<trans><xsl:apply-templates/>; </trans>
			</xsl:when>
			<xsl:otherwise>
				<trans><xsl:apply-templates/></trans>
			</xsl:otherwise>
		</xsl:choose>
			
		</xsl:template>
	<!--	
		<xsl:template match="entry">
		<xsl:choose>
			<xsl:when test="//hw='911'"><xsl:apply-templates/></xsl:when>
		</xsl:choose>
			
		</xsl:template>
	//-->
	
</xsl:stylesheet>
