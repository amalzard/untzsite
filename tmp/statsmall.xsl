<?xml version="1.0" encoding="utf-8" ?>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
<body>
<p>Current Viewer Count: 
<xsl:value-of select="rtmp/server/application/live/nclients - 1"/>
<xsl:if test="rtmp/server/application/live/stream/active">
stream live
</xsl:if>

</p>
</body>
</xsl:template>

</xsl:stylesheet>
