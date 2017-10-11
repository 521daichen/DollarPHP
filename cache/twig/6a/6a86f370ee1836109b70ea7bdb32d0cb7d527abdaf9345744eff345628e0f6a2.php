<?php

/* forms.html */
class __TwigTemplate_fd3719ac1cc970edf6814987c0cb6c78915d96f447cb7730a3ac19652584b359 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
    }

    // line 1
    public function getinput($__name__ = null, $__value__ = null, $__type__ = null, $__size__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "value" => $__value__,
            "type" => $__type__,
            "size" => $__size__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "<input type=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "text")) : ("text")), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null));
            echo "\" size=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("size", $context)) ? (_twig_default_filter(($context["size"] ?? null), 20)) : (20)), "html", null, true);
            echo "\" />
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "forms.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 2,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro input(name, value, type, size) %}
<input type=\"{{ type|default('text') }}\" name=\"{{ name }}\" value=\"{{ value|e }}\" size=\"{{ size|default(20) }}\" />
{% endmacro %}", "forms.html", "D:\\Dollar\\DollarPHP\\app\\home\\views\\index\\forms.html");
    }
}
