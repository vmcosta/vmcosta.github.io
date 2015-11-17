<?php

/* partials/base.html.twig */
class __TwigTemplate_1c8be593fe8b0914c7d1a15e37dc31d97e0e8ad19e0afafcb3dbf3f6352b4d03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        $context["avatar_url"] = (($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "find", array(0 => "/about"), "method"), "media", array()), "images", array())), "url", array())) ? ($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "find", array(0 => "/about"), "method"), "media", array()), "images", array())), "url", array())) : ($this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/avatar.png")));
        // line 3
        $context["dates"] = $this->loadTemplate("macros/dates.twig", "partials/base.html.twig", 3);
        // line 4
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 5
        echo (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array())) ? ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array())) : ($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "default_lang", array())));
        echo "\">
<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <title>";
        // line 11
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array()), "html");
            echo " - ";
        }
        echo twig_escape_filter($this->env, $this->env->getExtension('GravTwigExtension')->translate("SITE.TITLE"), "html");
        echo "</title>
  <link rel=\"shortcut icon\" href=\"";
        // line 12
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/favicon.ico");
        echo "\" />
  <link rel=\"alternate\" type=\"application/rss+xml\" title=\"My Blog\" href=\"/rss.xml\">
  ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "  ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

  ";
        // line 20
        $this->displayBlock('javascripts', $context, $blocks);
        // line 25
        echo "  ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "
</head>
<body>

    ";
        // line 29
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 29)->display($context);
        // line 30
        echo "
    <section id=\"wrapper\">
        ";
        // line 32
        $this->displayBlock('header', $context, $blocks);
        // line 37
        echo "
        <div class=\"";
        // line 38
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "class", array());
        echo "\">
        ";
        // line 39
        $this->displayBlock('content', $context, $blocks);
        // line 40
        echo "        </div>

        ";
        // line 42
        $this->displayBlock('footer', $context, $blocks);
        // line 45
        echo "    </section>

    ";
        // line 47
        if ($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "analytics", array())) {
            // line 48
            echo "    ";
            $this->loadTemplate("partials/analytics.html.twig", "partials/base.html.twig", 48)->display($context);
            // line 49
            echo "    ";
        }
        // line 50
        echo "</body>
</html>
";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/style.css", 1 => 100), "method");
        // line 16
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/custom.css", 1 => 100), "method");
        // line 17
        echo "  ";
    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        // line 21
        echo "      ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "jquery", 1 => 101), "method");
        // line 22
        echo "      ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/main.js", 1 => 100), "method");
        // line 23
        echo "      ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/jquery.jscroll.min.js"), "method");
        // line 24
        echo "  ";
    }

    // line 32
    public function block_header($context, array $blocks = array())
    {
        // line 33
        echo "            ";
        if (( !($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header", array()) === false) && $this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "title_header", array()))) {
            // line 34
            echo "                ";
            $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 34)->display($context);
            // line 35
            echo "            ";
        }
        // line 36
        echo "        ";
    }

    // line 39
    public function block_content($context, array $blocks = array())
    {
    }

    // line 42
    public function block_footer($context, array $blocks = array())
    {
        // line 43
        echo "        ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 43)->display($context);
        // line 44
        echo "        ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 44,  167 => 43,  164 => 42,  159 => 39,  155 => 36,  152 => 35,  149 => 34,  146 => 33,  143 => 32,  139 => 24,  136 => 23,  133 => 22,  130 => 21,  127 => 20,  123 => 17,  120 => 16,  117 => 15,  114 => 14,  108 => 50,  105 => 49,  102 => 48,  100 => 47,  96 => 45,  94 => 42,  90 => 40,  88 => 39,  84 => 38,  81 => 37,  79 => 32,  75 => 30,  73 => 29,  65 => 25,  63 => 20,  57 => 18,  55 => 14,  50 => 12,  42 => 11,  33 => 5,  30 => 4,  28 => 3,  26 => 2,  24 => 1,);
    }
}
/* {% set theme_config = attribute(config.themes, config.system.pages.theme) %}*/
/* {% set avatar_url = pages.find('/about').media.images|first.url ?: url('theme://images/avatar.png') %}*/
/* {% import 'macros/dates.twig' as dates %}*/
/* <!DOCTYPE html>*/
/* <html lang="{{ grav.language.getActive ?: theme_config.default_lang }}">*/
/* <head>*/
/*   <meta charset="utf-8">*/
/*   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">*/
/*   <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/*   <title>{% if header.title %}{{ header.title|e('html') }} - {% endif %}{{ 'SITE.TITLE'|t|e('html') }}</title>*/
/*   <link rel="shortcut icon" href="{{ url('theme://images/favicon.ico') }}" />*/
/*   <link rel="alternate" type="application/rss+xml" title="My Blog" href="/rss.xml">*/
/*   {% block stylesheets %}*/
/*     {% do assets.addCss('theme://css/style.css',100) %}*/
/*     {% do assets.addCss('theme://css/custom.css',100) %}*/
/*   {% endblock %}*/
/*   {{ assets.css() }}*/
/* */
/*   {% block javascripts %}*/
/*       {% do assets.addJs('jquery',101) %}*/
/*       {% do assets.addJs('theme://js/main.js',100) %}*/
/*       {% do assets.addJs('theme://js/jquery.jscroll.min.js') %}*/
/*   {% endblock %}*/
/*   {{ assets.js() }}*/
/* </head>*/
/* <body>*/
/* */
/*     {% include 'partials/navigation.html.twig' %}*/
/* */
/*     <section id="wrapper">*/
/*         {% block header %}*/
/*             {% if page.header.header is not same as(false) and theme_config.title_header %}*/
/*                 {% include 'partials/header.html.twig' %}*/
/*             {% endif %}*/
/*         {% endblock %}*/
/* */
/*         <div class="{{ page.header.class }}">*/
/*         {% block content %}{% endblock %}*/
/*         </div>*/
/* */
/*         {% block footer %}*/
/*         {% include 'partials/footer.html.twig' %}*/
/*         {% endblock %}*/
/*     </section>*/
/* */
/*     {% if site.analytics %}*/
/*     {% include 'partials/analytics.html.twig' %}*/
/*     {% endif %}*/
/* </body>*/
/* </html>*/
/* */
