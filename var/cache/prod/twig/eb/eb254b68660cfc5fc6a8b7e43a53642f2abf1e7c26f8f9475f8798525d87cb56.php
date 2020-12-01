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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/options.html.twig */
class __TwigTemplate_327de743ddf686f1df3926a65d54e7f1d24493e6b4fccab418d2cc82a32226f0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'backup_options_card' => [$this, 'block_backup_options_card'],
            'backup_options_rest' => [$this, 'block_backup_options_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
";
        // line 27
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/options.html.twig", 27)->unwrap();
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('backup_options_card', $context, $blocks);
    }

    public function block_backup_options_card($context, array $blocks = [])
    {
        // line 30
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["backupForm"] ?? null), 'form_start');
        echo "
  <div class=\"card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">settings</i> ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Backup options", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
    </h3>
    <div class=\"card-block row\">
      <div class=\"card-text\">
        <div class=\"form-group row\">
          <label class=\"form-control-label\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ignore statistics tables", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</label>
          <div class=\"col-sm\">
            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["backupForm"] ?? null), "backup_options", []), "backup_all", []), 'errors');
        echo "
            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["backupForm"] ?? null), "backup_options", []), "backup_all", []), 'widget');
        echo "

            <small class=\"form-text\">
              ";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Drop existing tables during import.", [], "Admin.Advparameters.Help"), "html", null, true);
        echo " <br>
              ";
        // line 45
        echo twig_escape_filter($this->env, twig_replace_filter("%prefix%connections, %prefix%connections_page %prefix%connections_source, %prefix%guest, %prefix%statssearch", ["%prefix%" => ($context["dbPrefix"] ?? null)]), "html", null, true);
        echo "
            </small>
          </div>
        </div>

        <div class=\"form-group row\">
          ";
        // line 51
        $context["helpMessage"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("If enabled, the backup script will drop your tables prior to restoring data.", [], "Admin.Advparameters.Help");
        // line 52
        echo "          ";
        $context["helpMessage"] = ((($context["helpMessage"] ?? null) . " ") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("(ie. \"DROP TABLE IF EXISTS\")", [], "Admin.Advparameters.Help"));
        // line 53
        echo "
          ";
        // line 54
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Drop existing tables during import", [], "Admin.Advparameters.Feature"), ($context["helpMessage"] ?? null));
        echo "
          <div class=\"col-sm\">
            ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["backupForm"] ?? null), "backup_options", []), "backup_drop_tables", []), 'errors');
        echo "
            ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["backupForm"] ?? null), "backup_options", []), "backup_drop_tables", []), 'widget');
        echo "
          </div>
        </div>

        ";
        // line 61
        $this->displayBlock('backup_options_rest', $context, $blocks);
        // line 64
        echo "      </div>
    </div>
    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\">";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
      </div>
    </div>
  </div>
  ";
        // line 72
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["backupForm"] ?? null), 'form_end');
        echo "
";
    }

    // line 61
    public function block_backup_options_rest($context, array $blocks = [])
    {
        // line 62
        echo "          ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["backupForm"] ?? null), 'rest');
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/options.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 62,  134 => 61,  128 => 72,  121 => 68,  115 => 64,  113 => 61,  106 => 57,  102 => 56,  97 => 54,  94 => 53,  91 => 52,  89 => 51,  80 => 45,  76 => 44,  70 => 41,  66 => 40,  61 => 38,  53 => 33,  46 => 30,  40 => 29,  37 => 28,  35 => 27,  32 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/options.html.twig", "C:\\xampp\\htdocs\\QFi\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Configure\\AdvancedParameters\\Backup\\Blocks\\options.html.twig");
    }
}
