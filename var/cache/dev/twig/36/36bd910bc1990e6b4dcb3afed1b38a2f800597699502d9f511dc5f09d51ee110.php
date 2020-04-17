<?php

/* BnbcUploadBundle:Form:fields.html.twig */
class __TwigTemplate_5184189de35b8acb442fecec79e1eecb5a99ca9a48754bbb45ec6cdc135f30dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'bnbc_ajax_file_widget' => array($this, 'block_bnbc_ajax_file_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BnbcUploadBundle:Form:fields.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BnbcUploadBundle:Form:fields.html.twig"));

        // line 1
        $this->displayBlock('bnbc_ajax_file_widget', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_bnbc_ajax_file_widget($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bnbc_ajax_file_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bnbc_ajax_file_widget"));

        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "
    <div id=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "_bnbc_ajax_file_widget\" class=\"bnbc-ajax-file-widget\">
        ";
        // line 5
        $this->displayBlock("hidden_widget", $context, $blocks);
        echo "
        
        ";
        // line 14
        echo "        
        ";
        // line 33
        echo "        

        ";
        // line 53
        echo "
        ";
        // line 54
        $context["macros"] = $this;
        // line 55
        echo "        ";
        echo $context["macros"]->getcreateHiddenInputFormData(($context["id"] ?? $this->getContext($context, "id")), $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "formData", array()), "");
        echo "

        <div id=\"";
        // line 57
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "_button_replace\" class=\"bnbc-ajax-file-button-replace\">
            ";
        // line 58
        $context["type"] = "file";
        // line 59
        echo "            ";
        $context["original_id"] = ($context["id"] ?? $this->getContext($context, "id"));
        // line 60
        echo "            ";
        $context["id"] = ("bnbc_ajax_file_" . ($context["original_id"] ?? $this->getContext($context, "original_id")));
        // line 61
        echo "            ";
        $context["full_name"] = ("bnbc_ajax_file_" . ($context["full_name"] ?? $this->getContext($context, "full_name")));
        // line 62
        echo "
            ";
        // line 63
        if ($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "multiple", array())) {
            // line 64
            echo "            ";
            $context["attr"] = array("multiple" => $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "multiple", array()));
            // line 65
            echo "            ";
        }
        // line 66
        echo "            ";
        $context["required"] = $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "required", array());
        // line 67
        echo "            <label class=\"bnbc-ajax-file-button-replace-label\">
                ";
        // line 68
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
                ";
        // line 69
        if ($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "label", array())) {
            // line 70
            echo "                <span class=\"bnbc-ajax-file-button-replace-label-text\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "label", array()), "html", null, true);
            echo "</span>
                ";
        }
        // line 72
        echo "            </label>
        </div>
        ";
        // line 74
        if ($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "dropZone", array())) {
            // line 75
            echo "        <div id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "_dropzone\" class=\"bnbc-ajax-file-dropzone\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "dropZoneText", array()), "html", null, true);
            echo "</div>
        ";
        }
        // line 77
        echo "
        <script type=\"text/javascript\">

            ";
        // line 80
        echo "            
            ";
        // line 88
        echo "  

            ";
        // line 90
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "_formData = []; 
            ";
        // line 91
        echo $context["macros"]->getpushFormData(($context["id"] ?? $this->getContext($context, "id")), $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "formData", array()), "");
        echo "     

            ";
        // line 94
        echo "            var ";
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "CreateList = function(){
                var list = \$('#";
        // line 95
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "_list');
                if(!list.length){
                    list = \$('<ul/>').attr('id', '";
        // line 97
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "_list').addClass('bnbc-ajax-file-list');
                    \$('#";
        // line 98
        echo twig_escape_filter($this->env, ($context["original_id"] ?? $this->getContext($context, "original_id")), "html", null, true);
        echo "_bnbc_ajax_file_widget').append(list);
                }
                return list;
            }

            ";
        // line 104
        echo "            var ";
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "CreateManualSubmit = function(){
                var submit = \$('#";
        // line 105
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "_manual_submit');
                if(!submit.length){
                    submit = \$('<a/>').attr('id', '";
        // line 107
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "_manual_submit').addClass('bnbc-ajax-file-manual-submit').text('";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Upload files", array(), "messages");
        echo "');
                    \$('#";
        // line 108
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "_list').after(submit);
                    submit.click(function(){
                        \$.each(";
        // line 110
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "_add, function (key, data) {
                            data.submit();
                        });
                    });
                }
                return submit;
            }

            ";
        // line 119
        echo "            ";
        if (($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "progressBar", array()) == true)) {
            // line 120
            echo "            var ";
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "CreateProgressBar = function(){
                var progress = \$('#";
            // line 121
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "_progress');
                if(!progress.length){
                    progress = \$('<div/>').attr('id', '";
            // line 123
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "_progress').addClass('";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "progressBarClass", array()), "html", null, true);
            echo "');
                    \$('#";
            // line 124
            echo twig_escape_filter($this->env, ($context["original_id"] ?? $this->getContext($context, "original_id")), "html", null, true);
            echo "_bnbc_ajax_file_widget').";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "progressBarPosition", array()), "html", null, true);
            echo "(progress);
                }
                return progress;
            }
            ";
        }
        // line 129
        echo "
            ";
        // line 131
        echo "            var ";
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "_add = [];

            ";
        // line 134
        echo "            if (typeof bnbc_ajax_file == 'undefined')
                bnbc_ajax_file = [];

            bnbc_ajax_file.push(function(){

                var id = '";
        // line 139
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "';
                var original_id = '";
        // line 140
        echo twig_escape_filter($this->env, ($context["original_id"] ?? $this->getContext($context, "original_id")), "html", null, true);
        echo "';

                ";
        // line 142
        echo "         
                if(!\$('#' + id).attr('value'))
                    \$('#' + original_id).val('');

                ";
        // line 147
        echo "                \$('#' + id).fileupload({
                    url: '";
        // line 148
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bnbc_upload_default_index");
        echo "',
                    dataType: 'json',
                    formData: ";
        // line 150
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "_formData,
                    paramName: 'bnbc_ajax_file_form[]',
                    ";
        // line 152
        if ($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "dropZone", array())) {
            // line 153
            echo "                    dropZone: ('#' + id + '_dropzone'),
                    ";
        }
        // line 155
        echo "                    autoUpload: ";
        if ($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "autoUpload", array())) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    ";
        // line 156
        if (($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "autoUpload", array()) == false)) {
            // line 157
            echo "                    add: function (e, data) {
                        var list = ";
            // line 158
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "CreateList();
                        ";
            // line 159
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "CreateManualSubmit();

                        var li = \$('<li/>').text(data.files[0].name);
                        list.append(li);
                        ";
            // line 163
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "_add.push(data);
                    },
                    ";
        }
        // line 166
        echo "                    progressall: function (e, data) {
                        var percent = parseInt(data.loaded / data.total * 100, 10);
                        ";
        // line 168
        if (($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "progressBar", array()) == true)) {
            // line 169
            echo "                        var progressBar = ";
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "CreateProgressBar();                        
                        progressBar.css(
                            'width',
                            percent + '%'
                        ).text(percent + '%');
                        ";
        }
        // line 175
        echo "
                        ";
        // line 176
        if ( !(null === $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "progressElement", array()))) {
            // line 177
            echo "                        \$('";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "progressElement", array()), "html", null, true);
            echo "').attr('data-progress', percent);
                        ";
        }
        // line 179
        echo "
                        ";
        // line 180
        if ( !(null === $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "progressText", array()))) {
            // line 181
            echo "                        \$('";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "progressText", array()), "html", null, true);
            echo "').text(percent + '%');
                        ";
        }
        // line 183
        echo "                    },
                    done: function (e, data) {
                        var list = ";
        // line 185
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "CreateList();

                        ";
        // line 187
        if (($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "multiple", array()) != true)) {
            // line 188
            echo "                            \$('#' + original_id).val('');
                            list.empty();
                        ";
        }
        // line 191
        echo "
                        \$.each(data.result.bnbc_ajax_file_form, function (index, file) {
                            if(file.error){
                                var li = \$('<li/>').html('<b>' + file.name + ':</b> ' + file.error).addClass('error');
                                list.append(li)
                            }
                            else {
                                var originalId = '#' + original_id;
                                \$(originalId).val(bnbcAjaxFileSetValue(\$(originalId).val(), file.name, ';'));
                                var li = list.find('li:contains(' + file.name + ')');
                                if(!li.length){
                                    li = \$('<li/>').text(file.name);
                                    list.append(li);
                                }
                                else
                                    li.addClass('active');
                            }
                        });
                        ";
        // line 209
        if ($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "callbackFunction", array())) {
            // line 210
            echo "                        ";
            echo twig_escape_filter($this->env, ($context["callbackFunction"] ?? $this->getContext($context, "callbackFunction")), "html", null, true);
            echo "(data.result.bnbc_ajax_file_form);
                        ";
        }
        // line 212
        echo "                    }
                });
            });
        </script>
    </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function getcreateHiddenInputFormData($__id__ = null, $__datas__ = null, $__name__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "id" => $__id__,
            "datas" => $__datas__,
            "name" => $__name__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "createHiddenInputFormData"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "createHiddenInputFormData"));

            echo "  
            ";
            // line 16
            if (twig_length_filter($this->env, ($context["datas"] ?? $this->getContext($context, "datas")))) {
                // line 17
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["datas"] ?? $this->getContext($context, "datas")));
                foreach ($context['_seq'] as $context["subname"] => $context["value"]) {
                    echo " 
                    ";
                    // line 19
                    echo "                    ";
                    if ( !(null === $context["value"])) {
                        echo "                      
                        ";
                        // line 20
                        if ((($context["name"] ?? $this->getContext($context, "name")) == "")) {
                            // line 21
                            echo "                        ";
                            $context["varName"] = $context["subname"];
                            // line 22
                            echo "                        ";
                        } else {
                            // line 23
                            echo "                        ";
                            $context["varName"] = (((($context["name"] ?? $this->getContext($context, "name")) . "[") . $context["subname"]) . "]");
                            // line 24
                            echo "                        ";
                        }
                        // line 25
                        echo "                        ";
                        if (twig_test_iterable($context["value"])) {
                            // line 26
                            echo "                            ";
                            echo $this->getAttribute($this, "createHiddenInputFormData", array(0 => ($context["id"] ?? $this->getContext($context, "id")), 1 => $context["value"], 2 => ($context["varName"] ?? $this->getContext($context, "varName"))), "method");
                            echo "
                        ";
                        } else {
                            // line 27
                            echo "                                                    
                            <input type=\"hidden\" value=\"";
                            // line 28
                            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                            echo "\" name=\"";
                            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
                            echo "_";
                            echo twig_escape_filter($this->env, ($context["varName"] ?? $this->getContext($context, "varName")), "html", null, true);
                            echo "\" id=\"";
                            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
                            echo "_";
                            echo twig_escape_filter($this->env, twig_replace_filter(twig_replace_filter(($context["varName"] ?? $this->getContext($context, "varName")), array("[" => "-")), array("]" => "-")), "html", null, true);
                            echo "\" />
                        ";
                        }
                        // line 30
                        echo "                    ";
                    }
                    echo " 
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['subname'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                echo "        
            ";
            }
            // line 32
            echo "        
        ";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 35
    public function getpushFormData($__id__ = null, $__datas__ = null, $__name__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "id" => $__id__,
            "datas" => $__datas__,
            "name" => $__name__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "pushFormData"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "pushFormData"));

            echo "       
            ";
            // line 36
            if (twig_length_filter($this->env, ($context["datas"] ?? $this->getContext($context, "datas")))) {
                // line 37
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["datas"] ?? $this->getContext($context, "datas")));
                foreach ($context['_seq'] as $context["subname"] => $context["value"]) {
                    echo "   
                    ";
                    // line 38
                    if ( !(null === $context["value"])) {
                        echo "                    
                        ";
                        // line 39
                        if ((($context["name"] ?? $this->getContext($context, "name")) == "")) {
                            // line 40
                            echo "                        ";
                            $context["varName"] = $context["subname"];
                            // line 41
                            echo "                        ";
                        } else {
                            // line 42
                            echo "                        ";
                            $context["varName"] = (((($context["name"] ?? $this->getContext($context, "name")) . "[") . $context["subname"]) . "]");
                            // line 43
                            echo "                        ";
                        }
                        // line 44
                        echo "                        ";
                        if (twig_test_iterable($context["value"])) {
                            // line 45
                            echo "                            ";
                            echo $this->getAttribute($this, "pushFormData", array(0 => ($context["id"] ?? $this->getContext($context, "id")), 1 => $context["value"], 2 => ($context["varName"] ?? $this->getContext($context, "varName"))), "method");
                            echo "
                        ";
                        } else {
                            // line 46
                            echo "                                                    
                            ";
                            // line 47
                            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
                            echo "_formData.push({'name': '";
                            echo twig_escape_filter($this->env, ($context["varName"] ?? $this->getContext($context, "varName")), "html", null, true);
                            echo "', value: '";
                            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                            echo "'});
                        ";
                        }
                        // line 49
                        echo "                    ";
                    }
                    // line 50
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['subname'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "        
            ";
            }
            // line 51
            echo "        
        ";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "BnbcUploadBundle:Form:fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  610 => 51,  601 => 50,  598 => 49,  589 => 47,  586 => 46,  580 => 45,  577 => 44,  574 => 43,  571 => 42,  568 => 41,  565 => 40,  563 => 39,  559 => 38,  552 => 37,  550 => 36,  528 => 35,  506 => 32,  502 => 31,  493 => 30,  480 => 28,  477 => 27,  471 => 26,  468 => 25,  465 => 24,  462 => 23,  459 => 22,  456 => 21,  454 => 20,  449 => 19,  442 => 17,  440 => 16,  418 => 15,  402 => 212,  396 => 210,  394 => 209,  374 => 191,  369 => 188,  367 => 187,  362 => 185,  358 => 183,  352 => 181,  350 => 180,  347 => 179,  341 => 177,  339 => 176,  336 => 175,  326 => 169,  324 => 168,  320 => 166,  314 => 163,  307 => 159,  303 => 158,  300 => 157,  298 => 156,  289 => 155,  285 => 153,  283 => 152,  278 => 150,  273 => 148,  270 => 147,  264 => 142,  259 => 140,  255 => 139,  248 => 134,  242 => 131,  239 => 129,  229 => 124,  223 => 123,  218 => 121,  213 => 120,  210 => 119,  199 => 110,  194 => 108,  188 => 107,  183 => 105,  178 => 104,  170 => 98,  166 => 97,  161 => 95,  156 => 94,  151 => 91,  147 => 90,  143 => 88,  140 => 80,  135 => 77,  127 => 75,  125 => 74,  121 => 72,  115 => 70,  113 => 69,  109 => 68,  106 => 67,  103 => 66,  100 => 65,  97 => 64,  95 => 63,  92 => 62,  89 => 61,  86 => 60,  83 => 59,  81 => 58,  77 => 57,  71 => 55,  69 => 54,  66 => 53,  62 => 33,  59 => 14,  54 => 5,  50 => 4,  47 => 3,  44 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block bnbc_ajax_file_widget %}
    {% spaceless %}

    <div id=\"{{ id }}_bnbc_ajax_file_widget\" class=\"bnbc-ajax-file-widget\">
        {{ block('hidden_widget') }}
        
        {# A SUPPRIMER QUAND BIEN TESTER
        {% for name, val in form.vars.formData %}
            {% if val %}
                <input type=\"hidden\" value=\"{{ val }}\" name=\"{{ id }}_{{ name }}\" id=\"{{ id }}_{{ name }}\" />
            {% endif %}
        {% endfor %}   
        #}
        
        {% macro createHiddenInputFormData(id, datas, name) %}  
            {% if datas|length %}
                {% for subname, value in datas %} 
                    {# Si valeur null on n'affiche pas le champs afin de prendre la valeur par défaut #}
                    {% if value is not null %}                      
                        {% if name == '' %}
                        {% set varName = subname %}
                        {% else %}
                        {% set varName = name ~ '[' ~ subname ~ ']' %}
                        {% endif %}
                        {% if value is iterable %}
                            {{ _self.createHiddenInputFormData(id, value, varName) }}
                        {% else %}                                                    
                            <input type=\"hidden\" value=\"{{ value }}\" name=\"{{ id }}_{{ varName }}\" id=\"{{ id }}_{{ varName|replace({'[': '-'})|replace({']': '-'}) }}\" />
                        {% endif %}
                    {% endif %} 
                {% endfor %}        
            {% endif %}        
        {% endmacro createHiddenInputFormData %}        

        {% macro pushFormData(id, datas, name) %}       
            {% if datas|length %}
                {% for subname, value in datas %}   
                    {% if value is not null %}                    
                        {% if name == '' %}
                        {% set varName = subname %}
                        {% else %}
                        {% set varName = name ~ '[' ~ subname ~ ']' %}
                        {% endif %}
                        {% if value is iterable %}
                            {{ _self.pushFormData(id, value, varName) }}
                        {% else %}                                                    
                            {{ id }}_formData.push({'name': '{{ varName }}', value: '{{ value }}'});
                        {% endif %}
                    {% endif %}
                {% endfor %}        
            {% endif %}        
        {% endmacro pushFormData %}

        {% import _self as macros %}
        {{ macros.createHiddenInputFormData(id, form.vars.formData, '') }}

        <div id=\"{{ id }}_button_replace\" class=\"bnbc-ajax-file-button-replace\">
            {% set type = 'file' %}
            {% set original_id = id %}
            {% set id = 'bnbc_ajax_file_' ~ original_id %}
            {% set full_name = 'bnbc_ajax_file_' ~ full_name %}

            {% if form.vars.multiple %}
            {%  set attr = {'multiple': form.vars.multiple} %}
            {% endif %}
            {% set required = form.vars.required %}
            <label class=\"bnbc-ajax-file-button-replace-label\">
                {{ block('form_widget_simple') }}
                {% if form.vars.label %}
                <span class=\"bnbc-ajax-file-button-replace-label-text\">{{ form.vars.label }}</span>
                {% endif %}
            </label>
        </div>
        {% if form.vars.dropZone %}
        <div id=\"{{ id }}_dropzone\" class=\"bnbc-ajax-file-dropzone\">{{ form.vars.dropZoneText }}</div>
        {% endif %}

        <script type=\"text/javascript\">

            {# Surcharge des options d'upload #}            
            {# A SUPPRIMER QUAND BIEN TESTER
            {{ id }}_formData = [];
            {% for name, value in form.vars.formData %}
                {% if value %}
                    {{ id }}_formData.push({'name': '{{ name }}', value: '{{ value }}'});
                {% endif %}
            {% endfor %}
            #}  

            {{ id }}_formData = []; 
            {{ macros.pushFormData(id, form.vars.formData, '') }}     

            {# Création de la liste des fichiers #}
            var {{ id }}CreateList = function(){
                var list = \$('#{{ id }}_list');
                if(!list.length){
                    list = \$('<ul/>').attr('id', '{{ id }}_list').addClass('bnbc-ajax-file-list');
                    \$('#{{ original_id }}_bnbc_ajax_file_widget').append(list);
                }
                return list;
            }

            {# Création d'un bouton d'upload #}
            var {{ id }}CreateManualSubmit = function(){
                var submit = \$('#{{ id }}_manual_submit');
                if(!submit.length){
                    submit = \$('<a/>').attr('id', '{{ id }}_manual_submit').addClass('bnbc-ajax-file-manual-submit').text('{% trans %}Upload files{% endtrans %}');
                    \$('#{{ id }}_list').after(submit);
                    submit.click(function(){
                        \$.each({{ id }}_add, function (key, data) {
                            data.submit();
                        });
                    });
                }
                return submit;
            }

            {# Création de la barre de progression #}
            {% if form.vars.progressBar == true %}
            var {{ id }}CreateProgressBar = function(){
                var progress = \$('#{{ id }}_progress');
                if(!progress.length){
                    progress = \$('<div/>').attr('id', '{{ id }}_progress').addClass('{{ form.vars.progressBarClass }}');
                    \$('#{{ original_id }}_bnbc_ajax_file_widget').{{ form.vars.progressBarPosition }}(progress);
                }
                return progress;
            }
            {% endif %}

            {# Tableau pour contenir les fichiers ajoutés via le bouton parcourir, utilisé quand l'auto-upload est défini à false #}
            var {{ id }}_add = [];

            {# Tableau qui va contenir tous les champs d'upload afin de les executer à la fin #}
            if (typeof bnbc_ajax_file == 'undefined')
                bnbc_ajax_file = [];

            bnbc_ajax_file.push(function(){

                var id = '{{ id }}';
                var original_id = '{{ original_id }}';

                {# Si jamais on refresh la page on vide le champs caché original qui pourrait contenir des fichiers non existant sauf si on est dans le cas d'une édition et ou le champs aurait déjà une valeur qu'il faut garder #}         
                if(!\$('#' + id).attr('value'))
                    \$('#' + original_id).val('');

                {# Call fileupload plugin #}
                \$('#' + id).fileupload({
                    url: '{{ path('bnbc_upload_default_index') }}',
                    dataType: 'json',
                    formData: {{ id }}_formData,
                    paramName: 'bnbc_ajax_file_form[]',
                    {% if form.vars.dropZone %}
                    dropZone: ('#' + id + '_dropzone'),
                    {% endif %}
                    autoUpload: {% if form.vars.autoUpload %}true{% else %}false{% endif %},
                    {% if form.vars.autoUpload == false %}
                    add: function (e, data) {
                        var list = {{ id }}CreateList();
                        {{ id }}CreateManualSubmit();

                        var li = \$('<li/>').text(data.files[0].name);
                        list.append(li);
                        {{ id }}_add.push(data);
                    },
                    {% endif %}
                    progressall: function (e, data) {
                        var percent = parseInt(data.loaded / data.total * 100, 10);
                        {% if form.vars.progressBar == true %}
                        var progressBar = {{ id }}CreateProgressBar();                        
                        progressBar.css(
                            'width',
                            percent + '%'
                        ).text(percent + '%');
                        {% endif %}

                        {% if form.vars.progressElement is not null %}
                        \$('{{ form.vars.progressElement }}').attr('data-progress', percent);
                        {% endif %}

                        {% if form.vars.progressText is not null %}
                        \$('{{ form.vars.progressText }}').text(percent + '%');
                        {% endif %}
                    },
                    done: function (e, data) {
                        var list = {{ id }}CreateList();

                        {% if form.vars.multiple != true %}
                            \$('#' + original_id).val('');
                            list.empty();
                        {% endif %}

                        \$.each(data.result.bnbc_ajax_file_form, function (index, file) {
                            if(file.error){
                                var li = \$('<li/>').html('<b>' + file.name + ':</b> ' + file.error).addClass('error');
                                list.append(li)
                            }
                            else {
                                var originalId = '#' + original_id;
                                \$(originalId).val(bnbcAjaxFileSetValue(\$(originalId).val(), file.name, ';'));
                                var li = list.find('li:contains(' + file.name + ')');
                                if(!li.length){
                                    li = \$('<li/>').text(file.name);
                                    list.append(li);
                                }
                                else
                                    li.addClass('active');
                            }
                        });
                        {% if form.vars.callbackFunction %}
                        {{callbackFunction}}(data.result.bnbc_ajax_file_form);
                        {% endif %}
                    }
                });
            });
        </script>
    </div>
    {% endspaceless %}
{% endblock %}", "BnbcUploadBundle:Form:fields.html.twig", "C:\\xampp\\htdocs\\symfony-easyadmin-heroku\\vendor\\bnbc\\upload-bundle\\Bnbc\\UploadBundle/Resources/views/Form/fields.html.twig");
    }
}
