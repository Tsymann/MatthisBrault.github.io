<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @PrestaShop/Admin/Common/Grid/Blocks/bulk_actions_select_all.html.twig */
class __TwigTemplate_f3a7b0894db4f3a145dce6540b24abaf30bb7b47d667cbfdf22b28f2779bffe6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
<div class=\"md-checkbox\">
  <label>
    <input type=\"checkbox\"
           class=\"js-bulk-action-select-all\"
           id=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["grid"] ?? null), "id", []), "html", null, true);
        echo "_grid_bulk_action_select_all\"
    >
    <i class=\"md-checkbox-control\"></i>
  </label>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Blocks/bulk_actions_select_all.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 30,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Common/Grid/Blocks/bulk_actions_select_all.html.twig", "C:\\xampp\\htdocs\\QFi\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Common\\Grid\\Blocks\\bulk_actions_select_all.html.twig");
    }
}
