<?php

/* form/templates/settings/submit.hbs */
class __TwigTemplate_f0dd072ea38aa8ceb345f883f362ccb9b8984ef53ce780223d908ecd11e06d20 extends Twig_Template
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
        echo "<p class=\"mailpoet_align_right\">
  <input type=\"submit\" value=\"";
        // line 2
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Done");
        echo "\" class=\"button-primary\" />
</p>";
    }

    public function getTemplateName()
    {
        return "form/templates/settings/submit.hbs";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "form/templates/settings/submit.hbs", "/mnt/hgfs/theme/wp-content/plugins/mailpoet/views/form/templates/settings/submit.hbs");
    }
}