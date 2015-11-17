<?php

/* partials/navigation.html.twig */
class __TwigTemplate_f5b9510cc55dafc8a09ed9ef247e86d0362e6eb4499c8824aadf4cd4b312e402 extends Twig_Template
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
        // line 1
        echo "<secton id=\"navigation\">
    <nav class=\"main-nav\">
        <a href=\"/\"><span class=\"arrow\">←</span> Home</a>
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "children", array()), "visible", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 5
            echo "            ";
            $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("active") : (""));
            // line 6
            echo "            <a class=\"";
            echo (isset($context["current_page"]) ? $context["current_page"] : null);
            echo "\" href=\"";
            echo $this->getAttribute($context["page"], "url", array());
            echo "\">
                ";
            // line 7
            if ($this->getAttribute($this->getAttribute($context["page"], "header", array()), "icon", array())) {
                echo "<i class=\"fa fa-";
                echo $this->getAttribute($this->getAttribute($context["page"], "header", array()), "icon", array());
                echo "\"></i>";
            }
            // line 8
            echo "                ";
            echo $this->getAttribute($context["page"], "menu", array());
            echo "
            </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "        ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "feed", array()), "enabled", array())) {
            // line 12
            echo "            <a class=\"cta\" href=\"";
            echo (isset($context["base_url"]) ? $context["base_url"] : null);
            echo $this->getAttribute($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "find", array(0 => "/"), "method"), "rawRoute", array());
            echo ".rss\">";
            echo $this->env->getExtension('GravTwigExtension')->translate("RSS");
            echo "</a>
        ";
        }
        // line 14
        echo "    </nav>
    ";
        // line 15
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "langswitcher", array()), "enabled", array())) {
            // line 16
            echo "        ";
            $this->loadTemplate("partials/langswitcher.html.twig", "partials/navigation.html.twig", 16)->display($context);
            // line 17
            echo "    ";
        }
        // line 18
        echo "</secton>
";
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 18,  74 => 17,  71 => 16,  69 => 15,  66 => 14,  57 => 12,  54 => 11,  44 => 8,  38 => 7,  31 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* <secton id="navigation">*/
/*     <nav class="main-nav">*/
/*         <a href="/"><span class="arrow">←</span> Home</a>*/
/*         {% for page in pages.children.visible %}*/
/*             {% set current_page = (page.active or page.activeChild) ? 'active' : '' %}*/
/*             <a class="{{ current_page }}" href="{{ page.url }}">*/
/*                 {% if page.header.icon %}<i class="fa fa-{{ page.header.icon }}"></i>{% endif %}*/
/*                 {{ page.menu }}*/
/*             </a>*/
/*         {% endfor %}*/
/*         {% if config.plugins.feed.enabled %}*/
/*             <a class="cta" href="{{ base_url }}{{ pages.find('/').rawRoute }}.rss">{{ 'RSS'|t }}</a>*/
/*         {% endif %}*/
/*     </nav>*/
/*     {% if config.plugins.langswitcher.enabled %}*/
/*         {% include 'partials/langswitcher.html.twig' %}*/
/*     {% endif %}*/
/* </secton>*/
/* */
