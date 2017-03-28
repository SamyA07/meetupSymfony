<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_e96a5aa1e2f7381797e8d17d187ed19e5e2bafc1b940f42578421aaf124175ff extends Twig_Template
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
        $__internal_e3373ca776ec9fdc593dc53f3cfdba45f4bdc4cc6ba19ab5c300e1e7aa46ac65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3373ca776ec9fdc593dc53f3cfdba45f4bdc4cc6ba19ab5c300e1e7aa46ac65->enter($__internal_e3373ca776ec9fdc593dc53f3cfdba45f4bdc4cc6ba19ab5c300e1e7aa46ac65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_9f323f14211e6cb717d07076fd395798d18793d4629cf9dd6412e70bb8d5c273 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f323f14211e6cb717d07076fd395798d18793d4629cf9dd6412e70bb8d5c273->enter($__internal_9f323f14211e6cb717d07076fd395798d18793d4629cf9dd6412e70bb8d5c273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_e3373ca776ec9fdc593dc53f3cfdba45f4bdc4cc6ba19ab5c300e1e7aa46ac65->leave($__internal_e3373ca776ec9fdc593dc53f3cfdba45f4bdc4cc6ba19ab5c300e1e7aa46ac65_prof);

        
        $__internal_9f323f14211e6cb717d07076fd395798d18793d4629cf9dd6412e70bb8d5c273->leave($__internal_9f323f14211e6cb717d07076fd395798d18793d4629cf9dd6412e70bb8d5c273_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/m2eserv/ameur/Documents/IFI/api-platform/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
