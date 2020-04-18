<?php

/* @FileManager/views/_list.html.twig */
class __TwigTemplate_7e53fbe62f25cd3b83725858c159b5c35c39049ddc53c4f1efe02b12d60db9e1 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FileManager/views/_list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FileManager/views/_list.html.twig"));

        // line 1
        echo "<div class=\"table-responsive list-blk\">
    <table class=\"table\">
        <colgroup>
            <col>
            <col>
            <col class=\"col-lg-8\">
            <col class=\"col-lg-1\">
            <col class=\"col-lg-1\">
            <col class=\"col-lg-1\">
            <col class=\"col-lg-1\">
        </colgroup>
        <thead class=\"thead-default\">
        <tr>
            <th><input type=\"checkbox\" id=\"select-all\" title=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("select-all"), "html", null, true);
        echo "\"></th>
            <th></th>
            <th>
                ";
        // line 17
        echo $this->env->getExtension('FileManagerBundle\Twig\OrderExtension')->order($this->env, ($context["fileManager"] ?? $this->getContext($context, "fileManager")), "name");
        echo "
            </th>
            <th class=\"hidden-xs\">
                ";
        // line 20
        echo $this->env->getExtension('FileManagerBundle\Twig\OrderExtension')->order($this->env, ($context["fileManager"] ?? $this->getContext($context, "fileManager")), "date");
        echo "
            </th>
            <th class=\"hidden-xs\">
                ";
        // line 23
        echo $this->env->getExtension('FileManagerBundle\Twig\OrderExtension')->order($this->env, ($context["fileManager"] ?? $this->getContext($context, "fileManager")), "size");
        echo "
            </th>
            <th class=\"hidden-xs\">
                ";
        // line 26
        echo $this->env->getExtension('FileManagerBundle\Twig\OrderExtension')->order($this->env, ($context["fileManager"] ?? $this->getContext($context, "fileManager")), "dimension");
        echo "
            </th>
            <th class=\"text-right\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("table.actions"), "html", null, true);
        echo "</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fileArray"] ?? $this->getContext($context, "fileArray")));
        foreach ($context['_seq'] as $context["_key"] => $context["fileEntity"]) {
            // line 33
            echo "            ";
            $context["file"] = $this->getAttribute($context["fileEntity"], "file", array());
            // line 34
            echo "            <tr class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["file"] ?? $this->getContext($context, "file")), "type", array()), "html", null, true);
            echo "\">
                <td><input type=\"checkbox\" class=\"checkbox\" name=\"delete[]\" value=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute(($context["file"] ?? $this->getContext($context, "file")), "fileName", array()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["file"] ?? $this->getContext($context, "file")), "fileName", array()), "html", null, true);
            echo "\"></td>
                <td>";
            // line 36
            echo (($this->getAttribute($context["fileEntity"], "preview", array())) ? ($this->getAttribute($this->getAttribute($context["fileEntity"], "preview", array()), "html", array())) : (""));
            echo "</td>
                <td data-value=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute(($context["file"] ?? $this->getContext($context, "file")), "fileName", array()), "html", null, true);
            echo "\" ";
            echo $this->getAttribute($context["fileEntity"], "attribut", array());
            echo ">
                    ";
            // line 38
            echo (($this->getAttribute($this->getAttribute($context["fileEntity"], "preview", array(), "any", false, true), "folder", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute($context["fileEntity"], "preview", array()), "folder", array())) : ($this->getAttribute(($context["file"] ?? $this->getContext($context, "file")), "fileName", array())));
            echo "
                </td>
                <td class=\"hidden-xs\">
                    <small>";
            // line 41
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["file"] ?? $this->getContext($context, "file")), "mTime", array()), "d/m/Y"), "html", null, true);
            echo "</small>
                </td>
                <td class=\"hidden-xs\">
                    <small>";
            // line 44
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["fileEntity"], "HTMLSize", array()));
            echo "</small>
                </td>
                <td class=\"hidden-xs\">
                    <small>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["fileEntity"], "HTMLDimension", array()), "html", null, true);
            echo "</small>
                </td>
                <td class=\"text-right\">
            <span data-toggle=\"tooltip\" title=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.delete"), "html", null, true);
            echo "\">
                <button type=\"button\"
                        class=\"btn btn-xs btn-danger js-delete-modal\"
                        data-trigger=\"click\"
                        data-container=\"body\"
                        data-toggle=\"modal\"
                        data-target=\"#js-confirm-delete\"
                        data-placement=\"left\"
                        data-html=\"true\"
                        data-href='";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("file_manager_delete", twig_array_merge($this->getAttribute(($context["fileManager"] ?? $this->getContext($context, "fileManager")), "queryParameters", array()), array("delete[]" => $this->getAttribute(($context["file"] ?? $this->getContext($context, "file")), "fileName", array())))), "html", null, true);
            echo "'>
                    <span class=\"fa fa-trash\"></span>
                </button>
            </span>
                    <span data-toggle=\"tooltip\" title=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.rename.file"), "html", null, true);
            echo "\">
                <button type=\"button\"
                        class=\"btn btn-xs btn-default js-rename-modal\"
                        data-trigger=\"click\"
                        data-container=\"body\"
                        data-toggle=\"modal\"
                        data-target=\"#js-confirm-rename\"
                        data-placement=\"left\"
                        data-html=\"true\"
                        data-name='";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute(($context["file"] ?? $this->getContext($context, "file")), "basename", array(0 => ("." . $this->getAttribute(($context["file"] ?? $this->getContext($context, "file")), "extension", array()))), "method"), "html", null, true);
            echo "'
                        data-extension='";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute(($context["file"] ?? $this->getContext($context, "file")), "extension", array()), "html", null, true);
            echo "'
                        data-href='";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("file_manager_rename", twig_array_merge($this->getAttribute(($context["fileManager"] ?? $this->getContext($context, "fileManager")), "queryParameters", array()), array("fileName" => $this->getAttribute(($context["file"] ?? $this->getContext($context, "file")), "fileName", array())))), "html", null, true);
            echo "'>
                <span class=\"fa fa-edit\"></span>
                </button>
                    </span>
                    ";
            // line 78
            if (($this->getAttribute(($context["file"] ?? $this->getContext($context, "file")), "type", array()) == "file")) {
                // line 79
                echo "                        <a data-placement=\"left\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.download"), "html", null, true);
                echo "\" class=\"btn btn-xs btn-default js-download\"
                           href=\"";
                // line 80
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("file_manager_file", twig_array_merge($this->getAttribute(($context["fileManager"] ?? $this->getContext($context, "fileManager")), "queryParameters", array()), array("fileName" => $this->getAttribute(($context["file"] ?? $this->getContext($context, "file")), "fileName", array())))), "html", null, true);
                echo "\" download>
                            <span class=\"fa fa-download\"></span>
                        </a>
                    ";
            }
            // line 84
            echo "                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fileEntity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "        </tbody>
    </table>
</div>
<div class=\"row\">
    <div class=\"col-lg-12 nopadding\">
        <a id=\"js-delete-multiple-modal\"
           class=\"btn btn-xs btn-danger disabled\"
           type=\"button\"
           data-trigger=\"click\"
           data-container=\"body\"
           data-toggle=\"modal\"
           data-target=\"#js-confirm-delete\"
           data-placement=\"left\"
           data-html=\"true\">
            <i class=\"fa fa-check-square-o\"></i> ";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("button.delete.selected"), "html", null, true);
        echo "
        </a>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FileManager/views/_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 101,  196 => 87,  188 => 84,  181 => 80,  176 => 79,  174 => 78,  167 => 74,  163 => 73,  159 => 72,  147 => 63,  140 => 59,  128 => 50,  122 => 47,  116 => 44,  110 => 41,  104 => 38,  98 => 37,  94 => 36,  88 => 35,  83 => 34,  80 => 33,  76 => 32,  69 => 28,  64 => 26,  58 => 23,  52 => 20,  46 => 17,  40 => 14,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"table-responsive list-blk\">
    <table class=\"table\">
        <colgroup>
            <col>
            <col>
            <col class=\"col-lg-8\">
            <col class=\"col-lg-1\">
            <col class=\"col-lg-1\">
            <col class=\"col-lg-1\">
            <col class=\"col-lg-1\">
        </colgroup>
        <thead class=\"thead-default\">
        <tr>
            <th><input type=\"checkbox\" id=\"select-all\" title=\"{{ 'select-all'|trans }}\"></th>
            <th></th>
            <th>
                {{ order(fileManager, 'name') }}
            </th>
            <th class=\"hidden-xs\">
                {{ order(fileManager, 'date') }}
            </th>
            <th class=\"hidden-xs\">
                {{ order(fileManager, 'size') }}
            </th>
            <th class=\"hidden-xs\">
                {{ order(fileManager, 'dimension') }}
            </th>
            <th class=\"text-right\">{{ 'table.actions'|trans }}</th>
        </tr>
        </thead>
        <tbody>
        {% for fileEntity in fileArray %}
            {% set file = fileEntity.file %}
            <tr class=\"{{ file.type }}\">
                <td><input type=\"checkbox\" class=\"checkbox\" name=\"delete[]\" value=\"{{ file.fileName }}\" title=\"{{ file.fileName }}\"></td>
                <td>{{ fileEntity.preview ? fileEntity.preview.html|raw }}</td>
                <td data-value=\"{{ file.fileName }}\" {{ fileEntity.attribut|raw }}>
                    {{ (fileEntity.preview.folder is defined ? fileEntity.preview.folder : file.fileName)|raw }}
                </td>
                <td class=\"hidden-xs\">
                    <small>{{ file.mTime|date('d/m/Y') }}</small>
                </td>
                <td class=\"hidden-xs\">
                    <small>{{ fileEntity.HTMLSize|trans|raw }}</small>
                </td>
                <td class=\"hidden-xs\">
                    <small>{{ fileEntity.HTMLDimension }}</small>
                </td>
                <td class=\"text-right\">
            <span data-toggle=\"tooltip\" title=\"{{ 'title.delete'|trans }}\">
                <button type=\"button\"
                        class=\"btn btn-xs btn-danger js-delete-modal\"
                        data-trigger=\"click\"
                        data-container=\"body\"
                        data-toggle=\"modal\"
                        data-target=\"#js-confirm-delete\"
                        data-placement=\"left\"
                        data-html=\"true\"
                        data-href='{{ path('file_manager_delete', fileManager.queryParameters|merge({'delete[]':file.fileName})) }}'>
                    <span class=\"fa fa-trash\"></span>
                </button>
            </span>
                    <span data-toggle=\"tooltip\" title=\"{{ 'title.rename.file'|trans }}\">
                <button type=\"button\"
                        class=\"btn btn-xs btn-default js-rename-modal\"
                        data-trigger=\"click\"
                        data-container=\"body\"
                        data-toggle=\"modal\"
                        data-target=\"#js-confirm-rename\"
                        data-placement=\"left\"
                        data-html=\"true\"
                        data-name='{{ file.basename('.'~file.extension) }}'
                        data-extension='{{ file.extension }}'
                        data-href='{{ path('file_manager_rename', fileManager.queryParameters|merge({'fileName':file.fileName})) }}'>
                <span class=\"fa fa-edit\"></span>
                </button>
                    </span>
                    {% if file.type == \"file\" %}
                        <a data-placement=\"left\" title=\"{{ 'title.download'|trans }}\" class=\"btn btn-xs btn-default js-download\"
                           href=\"{{ path('file_manager_file', fileManager.queryParameters|merge({'fileName':file.fileName})) }}\" download>
                            <span class=\"fa fa-download\"></span>
                        </a>
                    {% endif %}
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
</div>
<div class=\"row\">
    <div class=\"col-lg-12 nopadding\">
        <a id=\"js-delete-multiple-modal\"
           class=\"btn btn-xs btn-danger disabled\"
           type=\"button\"
           data-trigger=\"click\"
           data-container=\"body\"
           data-toggle=\"modal\"
           data-target=\"#js-confirm-delete\"
           data-placement=\"left\"
           data-html=\"true\">
            <i class=\"fa fa-check-square-o\"></i> {{ 'button.delete.selected'|trans }}
        </a>
    </div>
</div>
", "@FileManager/views/_list.html.twig", "C:\\xampp\\htdocs\\symfony-easyadmin-heroku\\src\\filemanager-bundle\\Resources\\views\\views\\_list.html.twig");
    }
}
