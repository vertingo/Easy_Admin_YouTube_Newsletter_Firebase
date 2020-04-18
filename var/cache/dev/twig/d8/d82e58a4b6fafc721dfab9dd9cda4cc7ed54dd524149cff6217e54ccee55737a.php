<?php

/* @FileManager/views/_modals.html.twig */
class __TwigTemplate_209309d656f382e3459e93d2a56334ac56da2796e666c257bb4490399d8a3f18 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FileManager/views/_modals.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FileManager/views/_modals.html.twig"));

        // line 1
        echo "<div class=\"modal fade\" id=\"js-confirm-delete\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span
                            aria-hidden=\"true\">&times;</span></button>
                <h4 class=\"modal-title\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.delete"), "html", null, true);
        echo "</h4>
            </div>
            <div class=\"modal-body\">
                ";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("confirm.delete"), "html", null, true);
        echo "
            </div>
            <div class=\"modal-footer\">
                ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["formDelete"] ?? $this->getContext($context, "formDelete")), 'form_start', array("attr" => array("class" => "pull-right")));
        echo "
                ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["formDelete"] ?? $this->getContext($context, "formDelete")), 'widget');
        echo "
                ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["formDelete"] ?? $this->getContext($context, "formDelete")), 'form_end');
        echo "
                <button type=\"button\" class=\"btn btn-default pull-left\" title=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("button.cancel"), "html", null, true);
        echo "\"
                        data-dismiss=\"modal\"> ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("button.cancel"), "html", null, true);
        echo "</button>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade\" id=\"js-confirm-rename\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["formRename"] ?? $this->getContext($context, "formRename")), 'form_start');
        echo "
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span
                            aria-hidden=\"true\">&times;</span></button>
                <h4 class=\"modal-title\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.rename.file"), "html", null, true);
        echo "</h4>
            </div>
            <div class=\"modal-body\">
                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["formRename"] ?? $this->getContext($context, "formRename")), "name", array()), 'row');
        echo "
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default pull-left\"
                        data-dismiss=\"modal\">";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("button.cancel"), "html", null, true);
        echo "
                </button>
                ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["formRename"] ?? $this->getContext($context, "formRename")), "send", array()), 'row');
        echo "
            </div>
            ";
        // line 40
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["formRename"] ?? $this->getContext($context, "formRename")), 'form_end');
        echo "
        </div>
    </div>
</div>
<div class=\"modal fade\" id=\"addFolder\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span
                            aria-hidden=\"true\">&times;</span></button>
                <h4 class=\"modal-title\">";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.add.folder"), "html", null, true);
        echo "</h4>
            </div>
            <div class=\"modal-body\">
                ";
        // line 54
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'row');
        echo "
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default pull-left\"
                        data-dismiss=\"modal\">";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("button.cancel"), "html", null, true);
        echo "
                </button>
                ";
        // line 60
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "send", array()), 'row');
        echo "
            </div>
            ";
        // line 62
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FileManager/views/_modals.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 62,  137 => 60,  132 => 58,  125 => 54,  119 => 51,  112 => 47,  102 => 40,  97 => 38,  92 => 36,  85 => 32,  79 => 29,  72 => 25,  61 => 17,  57 => 16,  53 => 15,  49 => 14,  45 => 13,  39 => 10,  33 => 7,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modal fade\" id=\"js-confirm-delete\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span
                            aria-hidden=\"true\">&times;</span></button>
                <h4 class=\"modal-title\">{{ 'title.delete'|trans }}</h4>
            </div>
            <div class=\"modal-body\">
                {{ 'confirm.delete'|trans }}
            </div>
            <div class=\"modal-footer\">
                {{ form_start(formDelete, {\"attr\" : {'class':'pull-right'}}) }}
                {{ form_widget(formDelete) }}
                {{ form_end(formDelete) }}
                <button type=\"button\" class=\"btn btn-default pull-left\" title=\"{{ 'button.cancel'|trans }}\"
                        data-dismiss=\"modal\"> {{ 'button.cancel'|trans }}</button>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade\" id=\"js-confirm-rename\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            {{ form_start(formRename) }}
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span
                            aria-hidden=\"true\">&times;</span></button>
                <h4 class=\"modal-title\">{{ 'title.rename.file'|trans }}</h4>
            </div>
            <div class=\"modal-body\">
                {{ form_row(formRename.name) }}
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default pull-left\"
                        data-dismiss=\"modal\">{{ 'button.cancel'|trans }}
                </button>
                {{ form_row(formRename.send) }}
            </div>
            {{ form_end(formRename) }}
        </div>
    </div>
</div>
<div class=\"modal fade\" id=\"addFolder\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            {{ form_start(form) }}
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span
                            aria-hidden=\"true\">&times;</span></button>
                <h4 class=\"modal-title\">{{ 'title.add.folder'|trans }}</h4>
            </div>
            <div class=\"modal-body\">
                {{ form_row(form.name) }}
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default pull-left\"
                        data-dismiss=\"modal\">{{ 'button.cancel'|trans }}
                </button>
                {{ form_row(form.send) }}
            </div>
            {{ form_end(form) }}
        </div>
    </div>
</div>
", "@FileManager/views/_modals.html.twig", "C:\\xampp\\htdocs\\symfony-easyadmin-heroku\\src\\filemanager-bundle\\Resources\\views\\views\\_modals.html.twig");
    }
}
