<?php

/* form/templates/settings/label.hbs */
class __TwigTemplate_1df7a173cf7a21f6351dd3898395974f7d48ad36108f3043e6f496f590822b70 extends Twig_Template
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
        echo "<p class=\"clearfix\">
  <label for=\"label\">";
        // line 2
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Label:");
        echo "</label>
  <input id=\"label\" type=\"text\" name=\"params[label]\" value=\"{{ params.label }}\" />
</p>";
    }

    public function getTemplateName()
    {
        return "form/templates/settings/label.hbs";
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
        return new Twig_Source("", "form/templates/settings/label.hbs", "/mnt/hgfs/theme/wp-content/plugins/mailpoet/views/form/templates/settings/label.hbs");
    }
}
