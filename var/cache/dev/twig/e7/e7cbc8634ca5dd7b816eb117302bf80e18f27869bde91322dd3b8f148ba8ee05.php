<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_23915e2a0d9b277758bbbc4910bd566573e79d443fb0376c2eeedae111bfe8a1 extends Twig_Template
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
        $__internal_fa4ce0311ef13c82b3877b9cf12acd199556734f9b1dfa47e6ca48d0ecc7342b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa4ce0311ef13c82b3877b9cf12acd199556734f9b1dfa47e6ca48d0ecc7342b->enter($__internal_fa4ce0311ef13c82b3877b9cf12acd199556734f9b1dfa47e6ca48d0ecc7342b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_ad743eb94d7e92688a1023b44ad707607b9fba7d9cd313acc81419d1939bf5e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad743eb94d7e92688a1023b44ad707607b9fba7d9cd313acc81419d1939bf5e5->enter($__internal_ad743eb94d7e92688a1023b44ad707607b9fba7d9cd313acc81419d1939bf5e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_fa4ce0311ef13c82b3877b9cf12acd199556734f9b1dfa47e6ca48d0ecc7342b->leave($__internal_fa4ce0311ef13c82b3877b9cf12acd199556734f9b1dfa47e6ca48d0ecc7342b_prof);

        
        $__internal_ad743eb94d7e92688a1023b44ad707607b9fba7d9cd313acc81419d1939bf5e5->leave($__internal_ad743eb94d7e92688a1023b44ad707607b9fba7d9cd313acc81419d1939bf5e5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/home/m2eserv/ameur/Documents/IFI/api-platform/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
