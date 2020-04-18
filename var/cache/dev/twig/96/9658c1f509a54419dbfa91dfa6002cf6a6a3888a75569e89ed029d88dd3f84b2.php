<?php

/* @FileManager/manager.html.twig */
class __TwigTemplate_f94b0a7c3aebba87546ea3a6238298401a11a8842712c8d3219c251c50d745d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'actions' => array($this, 'block_actions'),
            'display' => array($this, 'block_display'),
            'tree' => array($this, 'block_tree'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FileManager/manager.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FileManager/manager.html.twig"));

        // line 1
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 2
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["formRename"] ?? $this->getContext($context, "formRename")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 3
        echo "<!doctype html>
<html lang=\"en\" id=\"dropzone\">
<head>

    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "    <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
</head>
<body>
";
        // line 25
        $this->displayBlock('body', $context, $blocks);
        // line 115
        $this->displayBlock('javascripts', $context, $blocks);
        // line 169
        echo "</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/filemanager/libs/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\"
              href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/filemanager/libs/components-font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\"
              href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/filemanager/libs/jstree/dist/themes/default/style.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\"
              href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/filemanager/libs/blueimp-file-upload/css/jquery.fileupload.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/filemanager/css/manager.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\"
              href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/filemanager/libs/jQuery-contextMenu/dist/jquery.contextMenu.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 22
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "File Manager";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 26
        echo "    <div class=\"container-fluid \">
        <div class=\"row top-bar\" id=\"top-bar\">
            ";
        // line 28
        $this->displayBlock('actions', $context, $blocks);
        // line 72
        echo "            ";
        $this->displayBlock('display', $context, $blocks);
        // line 90
        echo "        </div>
     <div class=\"row\">
            ";
        // line 92
        if ($this->getAttribute(($context["fileManager"] ?? $this->getContext($context, "fileManager")), "tree", array())) {
            // line 93
            echo "            <div class=\"col-xs-12  col-sm-4 col-md-3 col-lg-2\">
                ";
            // line 94
            $this->displayBlock('tree', $context, $blocks);
            // line 99
            echo "            </div>
            <div class=\"col-xs-12 col-sm-8 col-md-9 col-lg-10 no-tree-blk\">
                ";
        } else {
            // line 102
            echo "                <div class=\"col-lg-12\">
                    ";
        }
        // line 104
        echo "                    ";
        $this->displayBlock('content', $context, $blocks);
        // line 109
        echo "                </div>
            </div>
        </div>
        ";
        // line 112
        $this->loadTemplate("@FileManager/views/_modals.html.twig", "@FileManager/manager.html.twig", 112)->display($context);
        // line 113
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 28
    public function block_actions($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 29
        echo "                <a type=\"button\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("button.tree"), "html", null, true);
        echo "\"
                   href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("file_manager", twig_array_merge($this->getAttribute(($context["fileManager"] ?? $this->getContext($context, "fileManager")), "queryParameters", array()), array("tree" => ((($this->getAttribute(($context["fileManager"] ?? $this->getContext($context, "fileManager")), "tree", array()) == true)) ? (0) : (1))))), "html", null, true);
        echo "\"
                   class=\"btn btn-sm btn-default ";
        // line 31
        echo (($this->getAttribute(($context["fileManager"] ?? $this->getContext($context, "fileManager")), "tree", array())) ? ("active") : (""));
        echo "\">
                    <span class=\"fa fa-navicon\"></span>
                </a>
                ";
        // line 34
        if ($this->getAttribute(($context["fileManager"] ?? $this->getContext($context, "fileManager")), "parent", array())) {
            // line 35
            echo "                    <a class=\"btn btn-default btn-sm\"
                       title=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("button.parent"), "html", null, true);
            echo "\"
                       href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute(($context["fileManager"] ?? $this->getContext($context, "fileManager")), "parent", array()), "html", null, true);
            echo "\">
                        <span class=\"fa fa-level-up\"></span></a>
                ";
        }
        // line 40
        echo "                <button type=\"button\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("button.refresh"), "html", null, true);
        echo "\" class=\"btn btn-default btn-sm \"
                        onClick=\"window.location.reload()\">
                    <i class=\"glyphicon glyphicon-refresh\"></i>
                </button>

                <span class=\"btn btn-success btn-sm fileinput-button btn-action\">
            <i class=\"glyphicon glyphicon-file\"></i>
            <span>";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("button.add.files"), "html", null, true);
        echo "</span>
                <input id=\"fileupload\" type=\"file\"
                       data-url=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("file_manager_upload", $this->getAttribute(($context["fileManager"] ?? $this->getContext($context, "fileManager")), "queryParameters", array())), "html", null, true);
        echo "\"
                       name=\"files[]\" multiple=\"\"
                       accept=\"";
        // line 51
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["fileManager"] ?? null), "configuration", array(), "any", false, true), "accept", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute(($context["fileManager"] ?? $this->getContext($context, "fileManager")), "configuration", array()), "accept", array())) : ((($this->getAttribute(($context["fileManager"] ?? $this->getContext($context, "fileManager")), "type", array())) ? ($this->env->getExtension('FileManagerBundle\Twig\FileTypeExtension')->accept($this->getAttribute(($context["fileManager"] ?? $this->getContext($context, "fileManager")), "type", array()))) : ("")))), "html", null, true);
        echo "\">
            </span>
                <button type=\"button\" class=\"btn btn-primary btn-sm btn-action\" data-toggle=\"modal\" data-target=\"#addFolder\">
                    <i class=\"glyphicon glyphicon-folder-open\"></i>
                    <span>";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("button.add.folder"), "html", null, true);
        echo "</span>
                </button>
                ";
        // line 57
        if ($this->getAttribute(($context["fileManager"] ?? $this->getContext($context, "fileManager")), "parent", array())) {
            // line 58
            echo "                    <button type=\"button\"
                            class=\"btn btn-sm btn-danger js-delete-modal\"
                            data-trigger=\"click\"
                            data-container=\"body\"
                            data-toggle=\"modal\"
                            data-target=\"#js-confirm-delete\"
                            data-placement=\"left\"
                            data-html=\"true\"
                            data-href='";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("file_manager_delete", $this->getAttribute(($context["fileManager"] ?? $this->getContext($context, "fileManager")), "queryParameters", array())), "html", null, true);
            echo "'>
                        <i class=\"glyphicon glyphicon-remove\"></i>
                        <span>";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("button.delete.current"), "html", null, true);
            echo "</span>
                    </button>
                ";
        }
        // line 71
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 72
    public function block_display($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "display"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "display"));

        // line 73
        echo "                <div class=\"btn-group pull-right\">
                    ";
        // line 74
        if (($this->getAttribute(($context["fileManager"] ?? $this->getContext($context, "fileManager")), "view", array()) != "list")) {
            // line 75
            echo "                        ";
            echo $this->env->getExtension('FileManagerBundle\Twig\OrderExtension')->order($this->env, ($context["fileManager"] ?? $this->getContext($context, "fileManager")), "name");
            echo "
                        ";
            // line 76
            echo $this->env->getExtension('FileManagerBundle\Twig\OrderExtension')->order($this->env, ($context["fileManager"] ?? $this->getContext($context, "fileManager")), "date");
            echo "
                        ";
            // line 77
            echo $this->env->getExtension('FileManagerBundle\Twig\OrderExtension')->order($this->env, ($context["fileManager"] ?? $this->getContext($context, "fileManager")), "size");
            echo "
                        ";
            // line 78
            echo $this->env->getExtension('FileManagerBundle\Twig\OrderExtension')->order($this->env, ($context["fileManager"] ?? $this->getContext($context, "fileManager")), "dimension");
            echo "
                    ";
        }
        // line 80
        echo "                    <a type=\"button\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("file_manager", twig_array_merge($this->getAttribute(($context["fileManager"] ?? $this->getContext($context, "fileManager")), "queryParameters", array()), array("view" => "list"))), "html", null, true);
        echo "\"
                       class=\"btn btn-sm btn-default ";
        // line 81
        echo ((($this->getAttribute(($context["fileManager"] ?? $this->getContext($context, "fileManager")), "view", array()) == "list")) ? ("active") : (""));
        echo "\">
                        <span class=\"fa fa-th-list\"></span>
                    </a>
                    <a type=\"button\" href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("file_manager", twig_array_merge($this->getAttribute(($context["fileManager"] ?? $this->getContext($context, "fileManager")), "queryParameters", array()), array("view" => "thumbnail"))), "html", null, true);
        echo "\"
                       class=\"btn btn-sm btn-default ";
        // line 85
        echo ((($this->getAttribute(($context["fileManager"] ?? $this->getContext($context, "fileManager")), "view", array()) == "thumbnail")) ? ("active") : (""));
        echo "\">
                        <span class=\"fa fa-th\"></span>
                    </a>
                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 94
    public function block_tree($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tree"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tree"));

        // line 95
        echo "                    <div class=\"table-responsive\" style='width:350px;'>
                        <div id=\"tree\" style='width:350px;'></div>
                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 104
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 105
        echo "                        <form id=\"form-multiple-delete\" style='width:1000px;padding-left:150px;'>
                            ";
        // line 106
        $this->loadTemplate("@FileManager/views/_manager_view.html.twig", "@FileManager/manager.html.twig", 106)->display(array("fileManager" => ($context["fileManager"] ?? $this->getContext($context, "fileManager")), "fileArray" => ($context["fileArray"] ?? $this->getContext($context, "fileArray")), "formDelete" => ($context["formDelete"] ?? $this->getContext($context, "formDelete"))));
        // line 107
        echo "                        </form>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 115
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 116
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/filemanager/libs/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/filemanager/libs/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/filemanager/libs/jstree/dist/jstree.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/filemanager/libs/blueimp-file-upload/js/vendor/jquery.ui.widget.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/filemanager/libs/blueimp-file-upload/js/jquery.iframe-transport.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/filemanager/libs/blueimp-file-upload/js/jquery.fileupload.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/filemanager/libs/sticky-kit/jquery.sticky-kit.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/filemanager/libs/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/filemanager/libs/jQuery-contextMenu/dist/jquery.contextMenu.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        var treedata = ";
        // line 126
        echo ($context["treeData"] ?? $this->getContext($context, "treeData"));
        echo ";
        var tree = ";
        // line 127
        echo (($this->getAttribute(($context["fileManager"] ?? $this->getContext($context, "fileManager")), "tree", array())) ? ("true") : ("false"));
        echo "
        var moduleName = '";
        // line 128
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["fileManager"] ?? $this->getContext($context, "fileManager")), "module", array())) ? ($this->getAttribute(($context["fileManager"] ?? $this->getContext($context, "fileManager")), "module", array())) : (0)), "html", null, true);
        echo "';
        var successMessage = '";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("file.add.success"), "html", null, true);
        echo "';
        var url = \"";
        // line 130
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("file_manager", twig_array_merge($this->getAttribute(($context["fileManager"] ?? $this->getContext($context, "fileManager")), "queryParameters", array()), array("json" => true))), "js"), "html", null, true);
        echo "\"
        var urldelete = \"";
        // line 131
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("file_manager_delete", $this->getAttribute(($context["fileManager"] ?? $this->getContext($context, "fileManager")), "queryParameters", array())), "js"), "html", null, true);
        echo "\"
        var deleteMessage = \"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.delete"), "html", null, true);
        echo "\"
        var renameMessage = \"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.rename.file"), "html", null, true);
        echo "\"
        var downloadMessage = \"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.download"), "html", null, true);
        echo "\"
    </script>
    <script>
        // display alert
        function displayAlert(type, msg) {
            \$.notify({
                message: msg
            }, {
                type: type,
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

        // display session flash messages
        ";
        // line 161
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 162
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 163
                echo "        displayAlert('";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"]), "js"), "html", null, true);
                echo "')
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 165
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        echo "    </script>
    <script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/filemanager/js/manager.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@FileManager/manager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  545 => 167,  542 => 166,  536 => 165,  525 => 163,  520 => 162,  516 => 161,  486 => 134,  482 => 133,  478 => 132,  474 => 131,  470 => 130,  466 => 129,  462 => 128,  458 => 127,  454 => 126,  449 => 124,  445 => 123,  441 => 122,  437 => 121,  433 => 120,  429 => 119,  425 => 118,  421 => 117,  416 => 116,  407 => 115,  396 => 107,  394 => 106,  391 => 105,  382 => 104,  369 => 95,  360 => 94,  345 => 85,  341 => 84,  335 => 81,  330 => 80,  325 => 78,  321 => 77,  317 => 76,  312 => 75,  310 => 74,  307 => 73,  298 => 72,  288 => 71,  282 => 68,  277 => 66,  267 => 58,  265 => 57,  260 => 55,  253 => 51,  248 => 49,  243 => 47,  232 => 40,  226 => 37,  222 => 36,  219 => 35,  217 => 34,  211 => 31,  207 => 30,  202 => 29,  193 => 28,  182 => 113,  180 => 112,  175 => 109,  172 => 104,  168 => 102,  163 => 99,  161 => 94,  158 => 93,  156 => 92,  152 => 90,  149 => 72,  147 => 28,  143 => 26,  134 => 25,  116 => 22,  104 => 20,  99 => 18,  95 => 17,  90 => 15,  85 => 13,  79 => 11,  70 => 10,  59 => 169,  57 => 115,  55 => 25,  48 => 22,  46 => 10,  37 => 3,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% form_theme form 'bootstrap_3_layout.html.twig' %}
{% form_theme formRename 'bootstrap_3_layout.html.twig' %}
<!doctype html>
<html lang=\"en\" id=\"dropzone\">
<head>

    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/filemanager/libs/bootstrap/dist/css/bootstrap.min.css') }}\">
        <link rel=\"stylesheet\"
              href=\"{{ asset('bundles/filemanager/libs/components-font-awesome/css/font-awesome.min.css') }}\">
        <link rel=\"stylesheet\"
              href=\"{{ asset('bundles/filemanager/libs/jstree/dist/themes/default/style.min.css') }}\">
        <link rel=\"stylesheet\"
              href=\"{{ asset('bundles/filemanager/libs/blueimp-file-upload/css/jquery.fileupload.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/filemanager/css/manager.css') }}\">
        <link rel=\"stylesheet\"
              href=\"{{ asset('bundles/filemanager/libs/jQuery-contextMenu/dist/jquery.contextMenu.min.css') }}\">
    {% endblock %}
    <title>{% block title %}File Manager{% endblock %}</title>
</head>
<body>
{% block body %}
    <div class=\"container-fluid \">
        <div class=\"row top-bar\" id=\"top-bar\">
            {% block actions %}
                <a type=\"button\" title=\"{{ 'button.tree'|trans }}\"
                   href=\"{{ path('file_manager', fileManager.queryParameters|merge({'tree': fileManager.tree == true ? 0 : 1 })) }}\"
                   class=\"btn btn-sm btn-default {{ fileManager.tree ? 'active' }}\">
                    <span class=\"fa fa-navicon\"></span>
                </a>
                {% if fileManager.parent %}
                    <a class=\"btn btn-default btn-sm\"
                       title=\"{{ 'button.parent'|trans }}\"
                       href=\"{{ fileManager.parent }}\">
                        <span class=\"fa fa-level-up\"></span></a>
                {% endif %}
                <button type=\"button\" title=\"{{ 'button.refresh'|trans }}\" class=\"btn btn-default btn-sm \"
                        onClick=\"window.location.reload()\">
                    <i class=\"glyphicon glyphicon-refresh\"></i>
                </button>

                <span class=\"btn btn-success btn-sm fileinput-button btn-action\">
            <i class=\"glyphicon glyphicon-file\"></i>
            <span>{{ 'button.add.files'|trans }}</span>
                <input id=\"fileupload\" type=\"file\"
                       data-url=\"{{ path('file_manager_upload', fileManager.queryParameters) }}\"
                       name=\"files[]\" multiple=\"\"
                       accept=\"{{ fileManager.configuration.accept is defined ? fileManager.configuration.accept : (fileManager.type ? accept(fileManager.type)) }}\">
            </span>
                <button type=\"button\" class=\"btn btn-primary btn-sm btn-action\" data-toggle=\"modal\" data-target=\"#addFolder\">
                    <i class=\"glyphicon glyphicon-folder-open\"></i>
                    <span>{{ 'button.add.folder'|trans }}</span>
                </button>
                {% if fileManager.parent %}
                    <button type=\"button\"
                            class=\"btn btn-sm btn-danger js-delete-modal\"
                            data-trigger=\"click\"
                            data-container=\"body\"
                            data-toggle=\"modal\"
                            data-target=\"#js-confirm-delete\"
                            data-placement=\"left\"
                            data-html=\"true\"
                            data-href='{{ path('file_manager_delete', fileManager.queryParameters) }}'>
                        <i class=\"glyphicon glyphicon-remove\"></i>
                        <span>{{ 'button.delete.current'|trans }}</span>
                    </button>
                {% endif %}
            {% endblock %}
            {% block display %}
                <div class=\"btn-group pull-right\">
                    {% if fileManager.view != \"list\" %}
                        {{ order(fileManager, 'name') }}
                        {{ order(fileManager, 'date') }}
                        {{ order(fileManager, 'size') }}
                        {{ order(fileManager, 'dimension') }}
                    {% endif %}
                    <a type=\"button\" href=\"{{ path('file_manager', fileManager.queryParameters|merge({'view':\"list\"})) }}\"
                       class=\"btn btn-sm btn-default {{ fileManager.view == 'list' ? 'active' }}\">
                        <span class=\"fa fa-th-list\"></span>
                    </a>
                    <a type=\"button\" href=\"{{ path('file_manager', fileManager.queryParameters|merge({'view':'thumbnail'})) }}\"
                       class=\"btn btn-sm btn-default {{ fileManager.view == 'thumbnail' ? 'active' }}\">
                        <span class=\"fa fa-th\"></span>
                    </a>
                </div>
            {% endblock %}
        </div>
     <div class=\"row\">
            {% if fileManager.tree %}
            <div class=\"col-xs-12  col-sm-4 col-md-3 col-lg-2\">
                {% block tree %}
                    <div class=\"table-responsive\" style='width:350px;'>
                        <div id=\"tree\" style='width:350px;'></div>
                    </div>
                {% endblock %}
            </div>
            <div class=\"col-xs-12 col-sm-8 col-md-9 col-lg-10 no-tree-blk\">
                {% else %}
                <div class=\"col-lg-12\">
                    {% endif %}
                    {% block content %}
                        <form id=\"form-multiple-delete\" style='width:1000px;padding-left:150px;'>
                            {% include '@FileManager/views/_manager_view.html.twig' with {'fileManager' :fileManager,  'fileArray' : fileArray, 'formDelete' : formDelete} only %}
                        </form>
                    {% endblock %}
                </div>
            </div>
        </div>
        {% include '@FileManager/views/_modals.html.twig' %}
    </div>
{% endblock %}
{% block javascripts %}
    <script src=\"{{ asset('bundles/filemanager/libs/jquery/dist/jquery.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/filemanager/libs/bootstrap/dist/js/bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/filemanager/libs/jstree/dist/jstree.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/filemanager/libs/blueimp-file-upload/js/vendor/jquery.ui.widget.js') }}\"></script>
    <script src=\"{{ asset('bundles/filemanager/libs/blueimp-file-upload/js/jquery.iframe-transport.js') }}\"></script>
    <script src=\"{{ asset('bundles/filemanager/libs/blueimp-file-upload/js/jquery.fileupload.js') }}\"></script>
    <script src=\"{{ asset('bundles/filemanager/libs/sticky-kit/jquery.sticky-kit.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/filemanager/libs/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/filemanager/libs/jQuery-contextMenu/dist/jquery.contextMenu.min.js') }}\"></script>
    <script>
        var treedata = {{ treeData|raw }};
        var tree = {{ fileManager.tree ? 'true' : 'false' }}
        var moduleName = '{{ fileManager.module ? fileManager.module : 0 }}';
        var successMessage = '{{ 'file.add.success'|trans }}';
        var url = \"{{ path('file_manager', fileManager.queryParameters|merge({'json':true}))|e('js') }}\"
        var urldelete = \"{{ path('file_manager_delete', fileManager.queryParameters )|e('js') }}\"
        var deleteMessage = \"{{ 'title.delete'|trans }}\"
        var renameMessage = \"{{ 'title.rename.file'|trans }}\"
        var downloadMessage = \"{{ 'title.download'|trans }}\"
    </script>
    <script>
        // display alert
        function displayAlert(type, msg) {
            \$.notify({
                message: msg
            }, {
                type: type,
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

        // display session flash messages
        {% for type, messages in app.flashes %}
        {% for message in messages %}
        displayAlert('{{ type }}', '{{ message|trans|e('js') }}')
        {% endfor %}
        {% endfor %}
    </script>
    <script src=\"{{ asset('bundles/filemanager/js/manager.js') }}\"></script>
{% endblock %}
</body>
</html>", "@FileManager/manager.html.twig", "C:\\xampp\\htdocs\\symfony-easyadmin-heroku\\src\\filemanager-bundle\\Resources\\views\\manager.html.twig");
    }
}
