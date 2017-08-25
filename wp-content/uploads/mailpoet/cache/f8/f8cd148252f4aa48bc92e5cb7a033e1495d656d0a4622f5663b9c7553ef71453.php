<?php

/* form/templates/blocks/select.hbs */
class __TwigTemplate_8ce24a4257d7070b55ce8c4d3f9a268bb669dc617637c223c66fe1ff8c181897 extends Twig_Template
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
        echo "{{#unless params.label_within}}
  {{#if params.label}}
    <p>
      <label>{{ params.label }}{{#if params.required}} *{{/if}}</label>
    </p>
  {{/if}}
{{/unless}}
<select>
  {{#if params.label_within}}
    <option value=\"\">{{ params.label }}{{#if params.required}} *{{/if}}</option>
  {{else}}
    {{#unless params.required}}<option value=\"\">-</option>{{/unless}}
  {{/if}}
  {{#each params.values}}
    <option {{#if is_checked}}selected=\"selected\"{{/if}}>{{ value }}</option>
  {{/each}}
</select>";
    }

    public function getTemplateName()
    {
        return "form/templates/blocks/select.hbs";
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
        return new Twig_Source("", "form/templates/blocks/select.hbs", "/mnt/hgfs/theme/wp-content/plugins/mailpoet/views/form/templates/blocks/select.hbs");
    }
}
