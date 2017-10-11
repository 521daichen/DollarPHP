<?php

/* layout.html */
class __TwigTemplate_b4d28f07897aec7f3b7c8f9d37e5fc6780b7759fde1fa756db640b8d14ef1ef6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
    <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_constant("__BOOTSTRAP__"), "html", null, true);
        echo "/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
    <!-- 可选的 Bootstrap 主题文件（一般不用引入） -->
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_constant("__BOOTSTRAP__"), "html", null, true);
        echo "/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">

    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_constant("__STATIC__"), "html", null, true);
        echo "/css/cover.css\">
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_constant("__BOOTSTRAP__"), "html", null, true);
        echo "/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>

</head>

<body>


";
        // line 20
        $this->displayBlock('head', $context, $blocks);
        // line 22
        echo "

<div class=\"site-wrapper\">
    <div class=\"site-wrapper-inner\">

        <div class=\"cover-container\">

            <div class=\"masthead clearfix\">
                <div class=\"inner\">
                    <h3 class=\"masthead-brand\">DollarPHP</h3>
                    <nav>
                        <ul class=\"nav masthead-nav\">
                            <li class=\"active\"><a href=\"#\">Home</a></li>
                            <li><a href=\"#\">GitHub</a></li>
                            <li><a href=\"#\">About Me</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <div class=\"inner cover\">
                <h1 class=\"cover-heading\">DollarPHP</h1>
                <p class=\"lead\">A PHP FRAMEWORK FOR MY CAT</p><p class=\"lead\">
                <a href=\"#\" class=\"btn btn-lg btn-default\">Learn more</a>
            </p>
            </div>

            <div class=\"mastfoot\">
                <div class=\"inner\">
                    <p>橙橙同学 <a href=\"http://getbootstrap.com\">DollarPHP</a>
                </div>
            </div>

        </div>

    </div>

</div>

</body>
</html>";
    }

    // line 20
    public function block_head($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 20,  55 => 22,  53 => 20,  43 => 13,  38 => 11,  33 => 9,  28 => 7,  20 => 1,);
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
    <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
    <link rel=\"stylesheet\" href=\"{{constant('__BOOTSTRAP__')}}/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
    <!-- 可选的 Bootstrap 主题文件（一般不用引入） -->
    <link rel=\"stylesheet\" href=\"{{constant('__BOOTSTRAP__')}}/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">

    <link rel=\"stylesheet\" href=\"{{constant('__STATIC__')}}/css/cover.css\">
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src=\"{{constant('__BOOTSTRAP__')}}/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>

</head>

<body>


{% block head%}
{% endblock %}


<div class=\"site-wrapper\">
    <div class=\"site-wrapper-inner\">

        <div class=\"cover-container\">

            <div class=\"masthead clearfix\">
                <div class=\"inner\">
                    <h3 class=\"masthead-brand\">DollarPHP</h3>
                    <nav>
                        <ul class=\"nav masthead-nav\">
                            <li class=\"active\"><a href=\"#\">Home</a></li>
                            <li><a href=\"#\">GitHub</a></li>
                            <li><a href=\"#\">About Me</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <div class=\"inner cover\">
                <h1 class=\"cover-heading\">DollarPHP</h1>
                <p class=\"lead\">A PHP FRAMEWORK FOR MY CAT</p><p class=\"lead\">
                <a href=\"#\" class=\"btn btn-lg btn-default\">Learn more</a>
            </p>
            </div>

            <div class=\"mastfoot\">
                <div class=\"inner\">
                    <p>橙橙同学 <a href=\"http://getbootstrap.com\">DollarPHP</a>
                </div>
            </div>

        </div>

    </div>

</div>

</body>
</html>", "layout.html", "D:\\Dollar\\DollarPHP\\app\\home\\views\\index\\layout.html");
    }
}