<?php

/* @FileManager/extension/_order.html.twig */
class __TwigTemplate_dfa46575f36d946cdf6ca1aa115d786b8a706ae3ff7d8b146eef0f6891a40266 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FileManager/extension/_order.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FileManager/extension/_order.html.twig"));

        // line 1
        echo "<a class=\"";
        echo twig_escape_filter($this->env, (( !($context["islist"] ?? $this->getContext($context, "islist"))) ? (("btn btn-sm btn-default" . ((($context["active"] ?? $this->getContext($context, "active"))) ? (" active") : ("")))) : ("")), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, ($context["href"] ?? $this->getContext($context, "href")), "html", null, true);
        echo "\">
    ";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(("table." . ($context["type"] ?? $this->getContext($context, "type")))), "html", null, true);
        echo "
    <span class=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
        echo " ";
        echo ((($context["islist"] ?? $this->getContext($context, "islist"))) ? ("pull-right") : (""));
        echo " fa fa-sort";
        echo twig_escape_filter($this->env, ($context["glyphicon"] ?? $this->getContext($context, "glyphicon")), "html", null, true);
        echo "\"></span>
</a>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FileManager/extension/_order.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 3,  32 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a class=\"{{ not islist ? ('btn btn-sm btn-default'~(active ? ' active'))  }}\" href=\"{{ href }}\">
    {{ ('table.'~type)|trans }}
    <span class=\"{{ active }} {{ islist ? 'pull-right'}} fa fa-sort{{ glyphicon }}\"></span>
</a>
", "@FileManager/extension/_order.html.twig", "C:\\xampp\\htdocs\\symfony-easyadmin-heroku\\src\\filemanager-bundle\\Resources\\views\\extension\\_order.html.twig");
    }
}
