<?php

/* form/templates/settings/label_within.hbs */
class __TwigTemplate_23fda55df82c7ee6e375dd154c26227ce75a7274c0637349a7b6557b28d27688 extends Twig_Template
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
  <label>";
        // line 2
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Display label within input:");
        echo "</label>
  <span class=\"group\">
    <label>
      <input class=\"mailpoet_radio\" type=\"radio\" name=\"params[label_within]\" value=\"1\" {{#if params.label_within}}checked=\"checked\"{{/if}} />";
        // line 5
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Yes");
        echo "
    </label>
    <label>
      <input class=\"mailpoet_radio\" type=\"radio\" name=\"params[label_within]\" value=\"\" {{#unless params.label_within}}checked=\"checked\"{{/unless}} />";
        // line 8
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("No");
        echo "
    </label>
  </span>
</p>";
    }

    public function getTemplateName()
    {
        return "form/templates/settings/label_within.hbs";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 8,  28 => 5,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "form/templates/settings/label_within.hbs", "/mnt/hgfs/theme/wp-content/plugins/mailpoet/views/form/templates/settings/label_within.hbs");
    }
}