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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Backup/index.html.twig */
class __TwigTemplate_6e08aef46c3e63ff8330092d89106b235231b5796047d59a9d221abe2672a3c4 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'backup_download_file' => [$this, 'block_backup_download_file'],
            'backup_alerts' => [$this, 'block_backup_alerts'],
            'backup_listing' => [$this, 'block_backup_listing'],
            'backup_options' => [$this, 'block_backup_options'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 25
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/index.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 29
    public function block_content($context, array $blocks = [])
    {
        // line 30
        echo "  ";
        $this->displayBlock('backup_download_file', $context, $blocks);
        // line 35
        echo "
  ";
        // line 36
        $this->displayBlock('backup_alerts', $context, $blocks);
        // line 49
        echo "
  ";
        // line 50
        $this->displayBlock('backup_listing', $context, $blocks);
        // line 57
        echo "
  ";
        // line 58
        $this->displayBlock('backup_options', $context, $blocks);
    }

    // line 30
    public function block_backup_download_file($context, array $blocks = [])
    {
        // line 31
        echo "    ";
        if (($context["hasDownloadFile"] ?? null)) {
            // line 32
            echo "      ";
            $this->loadTemplate("@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/download_file.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/index.html.twig", 32)->display($context);
            // line 33
            echo "    ";
        }
        // line 34
        echo "  ";
    }

    // line 36
    public function block_backup_alerts($context, array $blocks = [])
    {
        // line 37
        echo "    <div class=\"row\">
      <div class=\"col\">
        ";
        // line 39
        $this->loadTemplate("@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/backup_warning.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/index.html.twig", 39)->display($context);
        // line 40
        echo "      </div>
    </div>

    <div class=\"row\">
      <div class=\"col\">
        ";
        // line 45
        $this->loadTemplate("@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/backup_info.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/index.html.twig", 45)->display($context);
        // line 46
        echo "      </div>
    </div>
  ";
    }

    // line 50
    public function block_backup_listing($context, array $blocks = [])
    {
        // line 51
        echo "    <div class=\"row\">
      <div class=\"col\">
        ";
        // line 53
        $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid_panel.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/index.html.twig", 53)->display(twig_array_merge($context, ["grid" => ($context["backupGrid"] ?? null)]));
        // line 54
        echo "      </div>
    </div>
  ";
    }

    // line 58
    public function block_backup_options($context, array $blocks = [])
    {
        // line 59
        echo "    <div class=\"row\">
      <div class=\"col\">
        ";
        // line 61
        $this->loadTemplate("@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/options.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/index.html.twig", 61)->display($context);
        // line 62
        echo "      </div>
    </div>
  ";
    }

    // line 67
    public function block_javascripts($context, array $blocks = [])
    {
        // line 68
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/pagination.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/backup.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 71,  146 => 70,  140 => 68,  137 => 67,  131 => 62,  129 => 61,  125 => 59,  122 => 58,  116 => 54,  114 => 53,  110 => 51,  107 => 50,  101 => 46,  99 => 45,  92 => 40,  90 => 39,  86 => 37,  83 => 36,  79 => 34,  76 => 33,  73 => 32,  70 => 31,  67 => 30,  63 => 58,  60 => 57,  58 => 50,  55 => 49,  53 => 36,  50 => 35,  47 => 30,  44 => 29,  34 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/index.html.twig", "C:\\xampp\\htdocs\\QFi\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Configure\\AdvancedParameters\\Backup\\index.html.twig");
    }
}
