<?php

/* @FileManager/views/_manager_view.html.twig */
class __TwigTemplate_91e37b12b93eacd1a2b92c1ad30b15592db8f1c95a6e3f4af69b7528f4e4b576 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FileManager/views/_manager_view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FileManager/views/_manager_view.html.twig"));

        // line 1
        $this->loadTemplate((("@FileManager/views/_" . $this->getAttribute(($context["fileManager"] ?? $this->getContext($context, "fileManager")), "view", array())) . ".html.twig"), "@FileManager/views/_manager_view.html.twig", 1)->display(array("fileManager" => ($context["fileManager"] ?? $this->getContext($context, "fileManager")), "fileArray" => ($context["fileArray"] ?? $this->getContext($context, "fileArray")), "formDelete" => ($context["formDelete"] ?? $this->getContext($context, "formDelete"))));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FileManager/views/_manager_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@FileManager/views/_'~fileManager.view~'.html.twig' with {'fileManager' :fileManager,  'fileArray' : fileArray, 'formDelete' : formDelete} only %}", "@FileManager/views/_manager_view.html.twig", "C:\\xampp\\htdocs\\symfony-easyadmin-heroku\\src\\filemanager-bundle\\Resources\\views\\views\\_manager_view.html.twig");
    }
}
