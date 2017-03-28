<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_0cbb4de55c5c49ec02909d1af96a9de69e93d8107f8a57c9c1cecf6e3a292305 extends Twig_Template
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
        $__internal_9d7223e98d02509366daf8c1a01207e5b5e955f49c5c57721d855757ca0a0d72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d7223e98d02509366daf8c1a01207e5b5e955f49c5c57721d855757ca0a0d72->enter($__internal_9d7223e98d02509366daf8c1a01207e5b5e955f49c5c57721d855757ca0a0d72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_2e136c8b291afc3ae8454c95f0f362d8179e84bf38f649d8eb775d1f8c20f774 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e136c8b291afc3ae8454c95f0f362d8179e84bf38f649d8eb775d1f8c20f774->enter($__internal_2e136c8b291afc3ae8454c95f0f362d8179e84bf38f649d8eb775d1f8c20f774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_9d7223e98d02509366daf8c1a01207e5b5e955f49c5c57721d855757ca0a0d72->leave($__internal_9d7223e98d02509366daf8c1a01207e5b5e955f49c5c57721d855757ca0a0d72_prof);

        
        $__internal_2e136c8b291afc3ae8454c95f0f362d8179e84bf38f649d8eb775d1f8c20f774->leave($__internal_2e136c8b291afc3ae8454c95f0f362d8179e84bf38f649d8eb775d1f8c20f774_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/home/m2eserv/ameur/Documents/IFI/api-platform/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
