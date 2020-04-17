<?php

/* @ArtgrisMedia/assets/include_js.html.twig */
class __TwigTemplate_051cbd9c54db895607a26be6bab0d97cf6fe8f364b70a0e61f75ab1ccbef5760 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ArtgrisMedia/assets/include_js.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ArtgrisMedia/assets/include_js.html.twig"));

        // line 1
        echo "<script>
    var url = '";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_ajax_icon");
        echo "';
    var addStr = '";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add"), "html", null, true);
        echo "';
    var successMessage = '";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("file.add.success"), "html", null, true);
        echo "';
</script>
<script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/artgrismedia/js/media.js"), "html", null, true);
        echo "\"></script>

<script>
    // display alert
    function displayAlert(type, msg) {
        \$.notify({
            message: msg
        }, {
            type: type,
            z_index: 10000,
            placement: {
                from: \"bottom\",
                align: \"left\"
            },
            template: '<div data-notify=\"container\" class=\"col-xs-5 col-md-4 col-lg-3 alert alert-{0}\" role=\"alert\">' +
            '<button type=\"button\" aria-hidden=\"true\" class=\"close\" data-notify=\"dismiss\">×</button>' +
            '<span data-notify=\"icon\"></span> ' +
            '<span data-notify=\"title\">{1}</span> ' +
            '<span data-notify=\"message\">{2}</span>' +
            '<div class=\"progress\" data-notify=\"progressbar\">' +
            '<div class=\"progress-bar progress-bar-{0}\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%;\"></div>' +
            '</div>' +
            '<a href=\"{3}\" target=\"{4}\" data-notify=\"url\"></a>' +
            '</div>'
        });
    }

    // Global functions
    // display error alert
    function displayError(msg) {
        displayAlert('danger', msg)
    }

    // display success alert
    function displaySuccess(msg) {
        displayAlert('success', msg)
    }
</script>
<script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/artgrisfilemanager/libs/blueimp-file-upload/js/jquery.iframe-transport.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/artgrisfilemanager/libs/blueimp-file-upload/js/jquery.fileupload.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/artgrisfilemanager/libs/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@ArtgrisMedia/assets/include_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 46,  86 => 45,  82 => 44,  41 => 6,  36 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script>
    var url = '{{ path('admin_ajax_icon') }}';
    var addStr = '{{ 'Add'|trans }}';
    var successMessage = '{{ 'file.add.success'|trans }}';
</script>
<script src=\"{{ asset('bundles/artgrismedia/js/media.js') }}\"></script>

<script>
    // display alert
    function displayAlert(type, msg) {
        \$.notify({
            message: msg
        }, {
            type: type,
            z_index: 10000,
            placement: {
                from: \"bottom\",
                align: \"left\"
            },
            template: '<div data-notify=\"container\" class=\"col-xs-5 col-md-4 col-lg-3 alert alert-{0}\" role=\"alert\">' +
            '<button type=\"button\" aria-hidden=\"true\" class=\"close\" data-notify=\"dismiss\">×</button>' +
            '<span data-notify=\"icon\"></span> ' +
            '<span data-notify=\"title\">{1}</span> ' +
            '<span data-notify=\"message\">{2}</span>' +
            '<div class=\"progress\" data-notify=\"progressbar\">' +
            '<div class=\"progress-bar progress-bar-{0}\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%;\"></div>' +
            '</div>' +
            '<a href=\"{3}\" target=\"{4}\" data-notify=\"url\"></a>' +
            '</div>'
        });
    }

    // Global functions
    // display error alert
    function displayError(msg) {
        displayAlert('danger', msg)
    }

    // display success alert
    function displaySuccess(msg) {
        displayAlert('success', msg)
    }
</script>
<script src=\"{{ asset('bundles/artgrisfilemanager/libs/blueimp-file-upload/js/jquery.iframe-transport.js') }}\"></script>
<script src=\"{{ asset('bundles/artgrisfilemanager/libs/blueimp-file-upload/js/jquery.fileupload.js') }}\"></script>
<script src=\"{{ asset('bundles/artgrisfilemanager/libs/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js') }}\"></script>
", "@ArtgrisMedia/assets/include_js.html.twig", "C:\\xampp\\htdocs\\symfony-easyadmin-heroku\\vendor\\artgris\\media-bundle\\Resources\\views\\assets\\include_js.html.twig");
    }
}
