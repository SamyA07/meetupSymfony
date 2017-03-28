<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_2b0d5d880a24cc82359c48a6920bd0f10fc52a63912a2883b554ff9c7d88f634 extends Twig_Template
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
        $__internal_d8f717f4f4aeeb3be7d1ea1836f14c0e094b81c6c341967ef942bd090ef9b809 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8f717f4f4aeeb3be7d1ea1836f14c0e094b81c6c341967ef942bd090ef9b809->enter($__internal_d8f717f4f4aeeb3be7d1ea1836f14c0e094b81c6c341967ef942bd090ef9b809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_55e19d145c1d7b9f51fcc2699bf790809afbf5c5441b332b51e30da9e0eb967d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55e19d145c1d7b9f51fcc2699bf790809afbf5c5441b332b51e30da9e0eb967d->enter($__internal_55e19d145c1d7b9f51fcc2699bf790809afbf5c5441b332b51e30da9e0eb967d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_d8f717f4f4aeeb3be7d1ea1836f14c0e094b81c6c341967ef942bd090ef9b809->leave($__internal_d8f717f4f4aeeb3be7d1ea1836f14c0e094b81c6c341967ef942bd090ef9b809_prof);

        
        $__internal_55e19d145c1d7b9f51fcc2699bf790809afbf5c5441b332b51e30da9e0eb967d->leave($__internal_55e19d145c1d7b9f51fcc2699bf790809afbf5c5441b332b51e30da9e0eb967d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/home/m2eserv/ameur/Documents/IFI/api-platform/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
