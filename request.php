<?php

// accept a term (keyword)
// respond with a value

$query = $_GET['q'];
$definition = [
    "definition" => "A statement of the exact meaning of a word, especially in a dictionary.",
    "bar" => "A place that sells alcholic beverages",
    "ajax" => "Technique which involves the use of javascript and xml (or JSON)",
    "html" => "The standard markup language for creating web pages and web applications.",
    "css" => "A style sheet language used for describing the presentation of a document written in a markup language.",
    "javascript" => "A lightweight, interpreted programming language with first-class functions that adds interactivity to your website.",
    "php" => "A server-side scripting language, and a powerful tool for making dynamic and interactive websites",
];

print "<h3>" . strtoupper($query) . "</h3>";
print "<p>" . $definition[$query] . "</p>";


?>

<?xml version="1.0" encoding="UTF-8"?> 
<meaning>
    <entry>
        <name>definition</name>
        <author>Oxford</author>
        <definition>A statement of the exact meaning of a word, especially in a dictionary.</definition>
    </entry>
    <entry>
        <name>bar</name>
        <author>Helix</author>
        <definition>A place that sells alcholic beverages</definition>
    </entry>
    <entry>
        <name>ajax</name>
        <author>Cambridge</author>
        <definition>Technique which involves the use of javascript and xml (or JSON)</definition>
    </entry>
    <entry>
        <name>html</name>
        <author>Urban</author>
        <definition>The standard markup language for creating web pages and web applications.</definition>
    </entry>
    <entry>
        <name>css</name>
        <author>Webster</author>
        <definition>A style sheet language used for describing the presentation of a document written in a markup language.</definition>
    </entry>
    <entry>
        <name>javascript</name>
        <author>Collins</author>
        <definition>A lightweight, interpreted programming language with first-class functions that adds interactivity to your website.</definition>
    </entry>
    <entry>
        <name>php</name>
        <author>Merriam</author>
        <definition>A server-side scripting language, and a powerful tool for making dynamic and interactive websites</definition>
    </entry>
</meaning>


