<?php

/* newsletter/templates/components/sidebar/sidebar.hbs */
class __TwigTemplate_edab0a7b238c3f8758cb5bea0b3c8f9389b0826d63c907bb4f43107fc307a262 extends Twig_Template
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
        echo "<div class=\"mailpoet_region mailpoet_content_region mailpoet_sidebar_region postbox\"></div>
<div class=\"mailpoet_region mailpoet_layout_region mailpoet_sidebar_region postbox closed\"></div>
<div class=\"mailpoet_region mailpoet_styles_region mailpoet_sidebar_region postbox closed\"></div>
<div class=\"mailpoet_region mailpoet_preview_region mailpoet_sidebar_region postbox closed\"></div>
";
    }

    public function getTemplateName()
    {
        return "newsletter/templates/components/sidebar/sidebar.hbs";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "newsletter/templates/components/sidebar/sidebar.hbs", "/mnt/hgfs/theme/wp-content/plugins/mailpoet/views/newsletter/templates/components/sidebar/sidebar.hbs");
    }
}
