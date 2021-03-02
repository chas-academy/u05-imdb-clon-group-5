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

/* indexes.twig */
class __TwigTemplate_119fd6790ad96e7f9a4d5d6364334c861ca29d35c386627841e71e84d84abd27 extends \Twig\Template
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
        echo "<fieldset class=\"index_info\">
  <legend id=\"index_header\">
    ";
        // line 3
        echo _gettext("Indexes");
        // line 4
        echo "    ";
        echo \PhpMyAdmin\Html\MySQLDocumentation::show("optimizing-database-structure");
        echo "
  </legend>

  ";
        // line 7
        if ( !twig_test_empty(($context["indexes"] ?? null))) {
            // line 8
            echo "    ";
            echo ($context["indexes_duplicates"] ?? null);
            echo "

    <div class=\"responsivetable jsresponsive\">
      <table class=\"pma-table\" id=\"table_index\">
        <thead>
          <tr>
            <th colspan=\"2\" class=\"print_ignore\">";
            // line 14
            echo _gettext("Action");
            echo "</th>
            <th>";
            // line 15
            echo _gettext("Keyname");
            echo "</th>
            <th>";
            // line 16
            echo _gettext("Type");
            echo "</th>
            <th>";
            // line 17
            echo _gettext("Unique");
            echo "</th>
            <th>";
            // line 18
            echo _gettext("Packed");
            echo "</th>
            <th>";
            // line 19
            echo _gettext("Column");
            echo "</th>
            <th>";
            // line 20
            echo _gettext("Cardinality");
            echo "</th>
            <th>";
            // line 21
            echo _gettext("Collation");
            echo "</th>
            <th>";
            // line 22
            echo _gettext("Null");
            echo "</th>
            <th>";
            // line 23
            echo _gettext("Comment");
            echo "</th>
          </tr>
        </thead>

        ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["indexes"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["index"]) {
                // line 28
                echo "          <tbody class=\"row_span\">
            ";
                // line 29
                $context["columns_count"] = twig_get_attribute($this->env, $this->source, $context["index"], "getColumnCount", [], "method", false, false, false, 29);
                // line 30
                echo "            <tr class=\"noclick\">
              <td rowspan=\"";
                // line 31
                echo twig_escape_filter($this->env, ($context["columns_count"] ?? null), "html", null, true);
                echo "\" class=\"edit_index print_ignore ajax\">
                <a class=\"ajax\" href=\"";
                // line 32
                echo PhpMyAdmin\Url::getFromRoute("/table/indexes");
                echo "\" data-post=\"";
                echo PhpMyAdmin\Url::getCommon(twig_array_merge(($context["url_params"] ?? null), ["index" => twig_get_attribute($this->env, $this->source, $context["index"], "getName", [], "method", false, false, false, 32)]), "");
                echo "\">
                  ";
                // line 33
                echo \PhpMyAdmin\Html\Generator::getIcon("b_edit", _gettext("Edit"));
                echo "
                </a>
              </td>
              <td rowspan=\"";
                // line 36
                echo twig_escape_filter($this->env, ($context["columns_count"] ?? null), "html", null, true);
                echo "\" class=\"print_ignore\">
                ";
                // line 37
                if ((twig_get_attribute($this->env, $this->source, $context["index"], "getName", [], "method", false, false, false, 37) == "PRIMARY")) {
                    // line 38
                    echo "                  ";
                    $context["index_params"] = ["sql_query" => (("ALTER TABLE " . PhpMyAdmin\Util::backquote(                    // line 39
($context["table"] ?? null))) . " DROP PRIMARY KEY;"), "message_to_show" => _gettext("The primary key has been dropped.")];
                    // line 42
                    echo "                ";
                } else {
                    // line 43
                    echo "                  ";
                    $context["index_params"] = ["sql_query" => (((("ALTER TABLE " . PhpMyAdmin\Util::backquote(                    // line 44
($context["table"] ?? null))) . " DROP INDEX ") . PhpMyAdmin\Util::backquote(twig_get_attribute($this->env, $this->source, $context["index"], "getName", [], "method", false, false, false, 44))) . ";"), "message_to_show" => sprintf(_gettext("Index %s has been dropped."), twig_get_attribute($this->env, $this->source,                     // line 45
$context["index"], "getName", [], "method", false, false, false, 45))];
                    // line 47
                    echo "                ";
                }
                // line 48
                echo "
                <input type=\"hidden\" class=\"drop_primary_key_index_msg\" value=\"";
                // line 49
                echo PhpMyAdmin\Sanitize::jsFormat(twig_get_attribute($this->env, $this->source, ($context["index_params"] ?? null), "sql_query", [], "any", false, false, false, 49), false);
                echo "\">
                ";
                // line 50
                echo PhpMyAdmin\Html\Generator::linkOrButton(PhpMyAdmin\Url::getFromRoute("/sql", twig_array_merge(                // line 51
($context["url_params"] ?? null), ($context["index_params"] ?? null))), \PhpMyAdmin\Html\Generator::getIcon("b_drop", _gettext("Drop")), ["class" => "drop_primary_key_index_anchor ajax"]);
                // line 54
                echo "
              </td>
              <th rowspan=\"";
                // line 56
                echo twig_escape_filter($this->env, ($context["columns_count"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["index"], "getName", [], "method", false, false, false, 56), "html", null, true);
                echo "</th>
              <td rowspan=\"";
                // line 57
                echo twig_escape_filter($this->env, ($context["columns_count"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["index"], "getType", [], "method", true, true, false, 57)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["index"], "getType", [], "method", false, false, false, 57), twig_get_attribute($this->env, $this->source, $context["index"], "getChoice", [], "method", false, false, false, 57))) : (twig_get_attribute($this->env, $this->source, $context["index"], "getChoice", [], "method", false, false, false, 57))), "html", null, true);
                echo "</td>
              <td rowspan=\"";
                // line 58
                echo twig_escape_filter($this->env, ($context["columns_count"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["index"], "isUnique", [], "method", false, false, false, 58)) ? (_gettext("Yes")) : (_gettext("No"))), "html", null, true);
                echo "</td>
              <td rowspan=\"";
                // line 59
                echo twig_escape_filter($this->env, ($context["columns_count"] ?? null), "html", null, true);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["index"], "isPacked", [], "method", false, false, false, 59);
                echo "</td>

              ";
                // line 61
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["index"], "getColumns", [], "method", false, false, false, 61));
                foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                    // line 62
                    echo "                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["column"], "getSeqInIndex", [], "method", false, false, false, 62) > 1)) {
                        // line 63
                        echo "                  <tr class=\"noclick\">
                ";
                    }
                    // line 65
                    echo "                <td>
                  ";
                    // line 66
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "getName", [], "method", false, false, false, 66), "html", null, true);
                    echo "
                  ";
                    // line 67
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["column"], "getSubPart", [], "method", false, false, false, 67))) {
                        // line 68
                        echo "                    (";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "getSubPart", [], "method", false, false, false, 68), "html", null, true);
                        echo ")
                  ";
                    }
                    // line 70
                    echo "                </td>
                <td>";
                    // line 71
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "getCardinality", [], "method", false, false, false, 71), "html", null, true);
                    echo "</td>
                <td>";
                    // line 72
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "getCollation", [], "method", false, false, false, 72), "html", null, true);
                    echo "</td>
                <td>";
                    // line 73
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "getNull", [0 => true], "method", false, false, false, 73), "html", null, true);
                    echo "</td>

                ";
                    // line 75
                    if ((twig_get_attribute($this->env, $this->source, $context["column"], "getSeqInIndex", [], "method", false, false, false, 75) == 1)) {
                        // line 76
                        echo "                  <td rowspan=\"";
                        echo twig_escape_filter($this->env, ($context["columns_count"] ?? null), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["index"], "getComments", [], "method", false, false, false, 76), "html", null, true);
                        echo "</td>
                ";
                    }
                    // line 78
                    echo "            </tr>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 80
                echo "          </tbody>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['index'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "      </table>
    </div>
  ";
        } else {
            // line 85
            echo "    <div class=\"no_indexes_defined\">";
            echo call_user_func_array($this->env->getFilter('notice')->getCallable(), [_gettext("No index defined!")]);
            echo "</div>
  ";
        }
        // line 87
        echo "</fieldset>
";
    }

    public function getTemplateName()
    {
        return "indexes.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 87,  264 => 85,  259 => 82,  252 => 80,  245 => 78,  237 => 76,  235 => 75,  230 => 73,  226 => 72,  222 => 71,  219 => 70,  213 => 68,  211 => 67,  207 => 66,  204 => 65,  200 => 63,  197 => 62,  193 => 61,  186 => 59,  180 => 58,  174 => 57,  168 => 56,  164 => 54,  162 => 51,  161 => 50,  157 => 49,  154 => 48,  151 => 47,  149 => 45,  148 => 44,  146 => 43,  143 => 42,  141 => 39,  139 => 38,  137 => 37,  133 => 36,  127 => 33,  121 => 32,  117 => 31,  114 => 30,  112 => 29,  109 => 28,  105 => 27,  98 => 23,  94 => 22,  90 => 21,  86 => 20,  82 => 19,  78 => 18,  74 => 17,  70 => 16,  66 => 15,  62 => 14,  52 => 8,  50 => 7,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "indexes.twig", "/home/vagrant/myprojects/shazam/public/mysql/templates/indexes.twig");
    }
}
