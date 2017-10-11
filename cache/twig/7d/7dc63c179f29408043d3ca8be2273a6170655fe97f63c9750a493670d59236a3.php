<?php

/* /index.html */
class __TwigTemplate_5b0ffa9ef4d30a52baefe506ec4cb374a516652c2533c3aea029e5c1dff53d55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "/index.html", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["forms"] = $this->loadTemplate("forms.html", "/index.html", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_head($context, array $blocks = array())
    {
        // line 7
        echo "
<p>";
        // line 8
        echo $context["forms"]->getinput("username", "ss", "button");
        echo "</p>

<form action=\"/users\" method=\"post\">

    <input type=\"text\" name=\"foo\">
    <input type=\"submit\">

</form>

";
    }

    public function getTemplateName()
    {
        return "/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 8,  34 => 7,  31 => 6,  27 => 1,  25 => 2,  11 => 1,);
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
{% import \"forms.html\" as forms %}



{% block head%}

<p>{{ forms.input('username','ss','button') }}</p>

<form action=\"/users\" method=\"post\">

    <input type=\"text\" name=\"foo\">
    <input type=\"submit\">

</form>

{% endblock%}


", "/index.html", "D:\\Dollar\\DollarPHP\\app\\home\\views\\index\\index.html");
    }
}
