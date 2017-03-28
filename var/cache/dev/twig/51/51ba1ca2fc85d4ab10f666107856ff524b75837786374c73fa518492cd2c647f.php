<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_c9e473a0518340c5feb68f2005420e8992a530659a581b33b60e804859f410c1 extends Twig_Template
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
        $__internal_07a20ec4084da8a88c4b7b46138bdceee04c32fb7b5d3a21b6b1263025392234 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07a20ec4084da8a88c4b7b46138bdceee04c32fb7b5d3a21b6b1263025392234->enter($__internal_07a20ec4084da8a88c4b7b46138bdceee04c32fb7b5d3a21b6b1263025392234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_f3b7af2d93ba6518b7ffb56080bb4ef44d4aa34aafc4b55d295efa41e90ee6d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3b7af2d93ba6518b7ffb56080bb4ef44d4aa34aafc4b55d295efa41e90ee6d8->enter($__internal_f3b7af2d93ba6518b7ffb56080bb4ef44d4aa34aafc4b55d295efa41e90ee6d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_07a20ec4084da8a88c4b7b46138bdceee04c32fb7b5d3a21b6b1263025392234->leave($__internal_07a20ec4084da8a88c4b7b46138bdceee04c32fb7b5d3a21b6b1263025392234_prof);

        
        $__internal_f3b7af2d93ba6518b7ffb56080bb4ef44d4aa34aafc4b55d295efa41e90ee6d8->leave($__internal_f3b7af2d93ba6518b7ffb56080bb4ef44d4aa34aafc4b55d295efa41e90ee6d8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/m2eserv/ameur/Documents/IFI/api-platform/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
