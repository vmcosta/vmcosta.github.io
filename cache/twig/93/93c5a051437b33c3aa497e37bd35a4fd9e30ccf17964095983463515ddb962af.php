<?php

/* partials/footer.html.twig */
class __TwigTemplate_e00593f7bdad0673d0cc874bf6ba617b7978da720379c170b5cb8e5cdd4e801f extends Twig_Template
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
        echo "<footer id=\"footer\">
\t<p class=\"small\">";
        // line 2
        echo $this->env->getExtension('GravTwigExtension')->translate("SITE.COPYRIGHT", twig_date_format_filter($this->env, "now", "Y"));
        echo " &middot; Powered by <a href=\"http://getgrav.org\" target=\"_blank\">Grav</a></p>
</footer>
";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
/* <footer id="footer">*/
/* 	<p class="small">{{ 'SITE.COPYRIGHT'|t("now"|date('Y')) }} &middot; Powered by <a href="http://getgrav.org" target="_blank">Grav</a></p>*/
/* </footer>*/
/* */
