<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_e93e244241aa74f7b1bb9c64640364470f0d5fc5547f4c97ee98c8ef2fa5906b extends Twig_Template
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
        $__internal_c0dfe065586491821847bac97437e315e69cb6f673eb5eb048803469b9034ee0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0dfe065586491821847bac97437e315e69cb6f673eb5eb048803469b9034ee0->enter($__internal_c0dfe065586491821847bac97437e315e69cb6f673eb5eb048803469b9034ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_d3170d836a7b025eabc4595546f183b47460c3bf37026e3e932187660a5b0d1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3170d836a7b025eabc4595546f183b47460c3bf37026e3e932187660a5b0d1d->enter($__internal_d3170d836a7b025eabc4595546f183b47460c3bf37026e3e932187660a5b0d1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_c0dfe065586491821847bac97437e315e69cb6f673eb5eb048803469b9034ee0->leave($__internal_c0dfe065586491821847bac97437e315e69cb6f673eb5eb048803469b9034ee0_prof);

        
        $__internal_d3170d836a7b025eabc4595546f183b47460c3bf37026e3e932187660a5b0d1d->leave($__internal_d3170d836a7b025eabc4595546f183b47460c3bf37026e3e932187660a5b0d1d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/m2eserv/ameur/Documents/IFI/api-platform/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
