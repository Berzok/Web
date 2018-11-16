<?xml version="1.0" encoding="utf-8"?>
	
	
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
	
	<xsl:output encoding="utf-8" method="html" version="5.0"  indent="yes"/>
	<xsl:template match="transat">
		<html lang="fr">
			<head>
				<meta charset="utf-8" />
				<link rel="stylesheet" href="css/route_du_rhum.css" />
				<title>Route du Rhum - 2018</title>
			</head>
			<body>
				<h1 align="left">Route du Rhum</h1>
				<xsl:apply-templates select="voilier"/>
			</body>
			
			<body>
				<table border="2">
					<tr>
						<td><img src="..." alt="logo de la {@nom}" /></td>
						<td>
							<xsl:value-of	select="@nom"/><br />
							<xsl:value-of	select="concat('De ', ville-depart, ' à ', ville-arrivee)"/><br />
							<xsl:value-of	select="date-depart"/>
						</td>
					</tr>
					
					<tr>
						<td valign="top">
							<xsl:apply-templates	select="classes/classe" mode="sommaire"/>
						</td>
						<td>
							<xsl:apply-templates	select="classes/classe"/>
						</td>
					</tr>
					
				</table>
			</body>
			
		</html>
	</xsl:template>
	
	
	<xsl:template	match="classe" mode="sommaire">
		<h2>
			<xsl:number	count="classe"	format="I "/>
			<a href="#{@nom}">
				<xsl:attribute	name="@nom">
					<xsl:value-of select="concat('#', classe/@nom)"/>
				</xsl:attribute>
				<xsl:value-of	select="@nom"/>
			</a>
		</h2>		
		
		
	</xsl:template>
	
	
	
	<xsl:template	match="classe">
		<h2 id="{@nom}">
			<xsl:value-of	select="@nom"/>
		</h2>
		<xsl:value-of	select="descriptif"/>
		<xsl:apply-templates	select="voiliers/voilier"/>
		
		<xsm:apply-templates	
		
	</xsl:template>
	
	<xsl:template	match="voilier">
		<h4>
			<a href="">
				<xsl:value-of	select="."/>
			</a>
		</h4>
	</xsl:template>
	
</xsl:stylesheet>