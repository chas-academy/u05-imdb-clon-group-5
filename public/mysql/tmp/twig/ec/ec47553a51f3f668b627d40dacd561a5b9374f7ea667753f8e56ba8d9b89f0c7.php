<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* table/maintenance/repair.twig */
class __TwigTemplate_3b8b4a4eec8b6561f294a53ffe5eeeb5ad5c53d115672f36dc4176673c60d2b2 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"container-fluid\">
  <h2>
    ";
        // line 3
        echo _gettext("Repair table");
        // line 4
        echo "    ";
        echo \PhpMyAdmin\Html\MySQLDocumentation::show("REPAIR_TABLE");
        echo "
  </h2>

  ";
        // line 7
        echo ($context["message"] ?? null);
        echo "

  ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["name"] => $context["table"]) {
            // line 10
            echo "    <div class=\"card mb-3\">
      <div class=\"card-header\">";
            // line 11
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</div>

      <ul class=\"list-group list-group-flush\">
        ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["table"]);
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 15
                echo "          <li class=\"list-group-item\">
            ";
                // line 16
                if ((twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "Op", [], "any", false, false, false, 16)) != "repair")) {
                    // line 17
                    echo "              <span class=\"badge badge-secondary\">";
                    echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "Op", [], "any", false, false, false, 17)), "html", null, true);
                    echo "</span>
            ";
                }
                // line 19
                echo "
            ";
                // line 20
                ob_start(function () { return ''; });
                // line 21
                if ((twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "Msg_type", [], "any", false, false, false, 21)) == "error")) {
                    // line 22
                    echo "badge-danger";
                } elseif ((twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source,                 // line 23
$context["row"], "Msg_type", [], "any", false, false, false, 23)) == "warning")) {
                    // line 24
                    echo "badge-warning";
                } elseif (((twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source,                 // line 25
$context["row"], "Msg_type", [], "any", false, false, false, 25)) == "info") || (twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "Msg_type", [], "any", false, false, false, 25)) == "note"))) {
                    // line 26
                    echo "badge-info";
                } else {
                    // line 28
                    echo "badge-secondary";
                }
                $context["badge_variation"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 31
                echo "            <span class=\"badge ";
                echo twig_escape_filter($this->env, ($context["badge_variation"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "Msg_type", [], "any", false, false, false, 31)), "html", null, true);
                echo "</span>

            ";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "Msg_text", [], "any", false, false, false, 33), "html", null, true);
                echo "
          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "      </ul>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['table'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "table/maintenance/repair.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 39,  122 => 36,  113 => 33,  105 => 31,  101 => 28,  98 => 26,  96 => 25,  94 => 24,  92 => 23,  90 => 22,  88 => 21,  86 => 20,  83 => 19,  77 => 17,  75 => 16,  72 => 15,  68 => 14,  62 => 11,  59 => 10,  55 => 9,  50 => 7,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "table/maintenance/repair.twig", "/home/vagrant/myprojects/imdb_05/public/mysql/templates/table/maintenance/repair.twig");
    }
}
