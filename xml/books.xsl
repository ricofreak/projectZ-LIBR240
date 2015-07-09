<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
  <html>
  <body>
  <h2>Literature on Online Privacy</h2>
  <table border="3">
    <tr bgcolor="#3fa338">
      <th>Title</th>
      <th>Link</th>
      <th>Author</th>
      <th>Publisher</th>
      <th>Year</th>
    </tr>
    <xsl:for-each select="collection/book">
    <tr>
      <td><xsl:value-of select="title"/></td>

      <a>
      <xsl:attribute name="href">
        <xsl:value-of select="link" />
      </xsl:attribute>
      <td><xsl:value-of select="link"/></td>
      </a>

      <td><xsl:value-of select="author"/></td>
      <td><xsl:value-of select="publisher"/></td>
      <td><xsl:value-of select="year"/></td>
    </tr>
    </xsl:for-each>
  </table>
  <hr />
  <xsl:for-each select="collection/book">
  <h3><xsl:value-of select="title"/></h3>
  <ul>
    <a>
      <xsl:attribute name="href">
        <xsl:value-of select="link" />
      </xsl:attribute>
    <li><xsl:value-of select="link"/></li>
    </a>
    <li><xsl:value-of select="author"/></li>
    <li><xsl:value-of select="publisher"/></li>
    <li><xsl:value-of select="year"/></li>
  </ul>
  </xsl:for-each>
  <hr />
  <xsl:for-each select="collection/book">
    <h3><xsl:value-of select="title"/></h3>
    <p><a>
      <xsl:attribute name="href">
        <xsl:value-of select="link" />
      </xsl:attribute>
    <xsl:value-of select="link"/>
    </a></p>
    
    <p><xsl:value-of select="author"/><br />
    <xsl:value-of select="publisher"/><br />
    <xsl:value-of select="year"/></p>
  </xsl:for-each>
  </body>
  </html>
</xsl:template>

</xsl:stylesheet>