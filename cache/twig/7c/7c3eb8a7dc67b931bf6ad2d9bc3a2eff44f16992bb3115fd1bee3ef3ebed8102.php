<?php

/* layout.html */
class __TwigTemplate_8c9ca2e131c42875aa6e4a665560153976dbbc7a540ba76efde4f63176a2cc84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Title</title>
</head>
<body>

<header></header>
<content>

    ";
        // line 12
        $this->displayBlock('content', $context, $blocks);
        // line 14
        echo "
</content>
<footer></footer>
</body>
</html>";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "    ";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function getDebugInfo()
    {
        return array (  46 => 13,  43 => 12,  35 => 14,  33 => 12,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Title</title>
</head>
<body>

<header></header>
<content>

    {% block content %}
    {% endblock %}

</content>
<footer></footer>
</body>
</html>", "layout.html", "E:\\PHPstudy2016\\WWW\\DollarPHP\\app\\views\\layout.html");
    }
}
