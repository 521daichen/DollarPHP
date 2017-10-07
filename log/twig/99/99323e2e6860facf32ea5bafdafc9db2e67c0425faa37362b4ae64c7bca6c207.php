<?php

/* index.html */
class __TwigTemplate_d854477ccd5c8559a6839e9a2b5e3257948eaa16864ab5fd4fd94e12030f31a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "index.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["daichen"]) ? $context["daichen"] : null), "html", null, true);
        echo "


<form action=\"/users\" method=\"post\">

    <input type=\"text\" name=\"foo\">
    <input type=\"submit\">

</form>
";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html\" %}

{% block content%}

{{daichen}}


<form action=\"/users\" method=\"post\">

    <input type=\"text\" name=\"foo\">
    <input type=\"submit\">

</form>
{% endblock%}


", "index.html", "E:\\PHPstudy2016\\WWW\\DollarPHP\\app\\views\\index.html");
    }
}
