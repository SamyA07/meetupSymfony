<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_233743bf1949f65284ef9018d7f13e581881da25b654df5d36bb7d02f3def313 extends Twig_Template
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
        $__internal_3508d21f74a1b3c8bf4f905c4f057fd33c1616133e79afa1922eb217ec8734bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3508d21f74a1b3c8bf4f905c4f057fd33c1616133e79afa1922eb217ec8734bf->enter($__internal_3508d21f74a1b3c8bf4f905c4f057fd33c1616133e79afa1922eb217ec8734bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_388c096d33f7cd93fa8bdcf912f7bb1379624a50c7ffaa1eafed6619c24cb0c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_388c096d33f7cd93fa8bdcf912f7bb1379624a50c7ffaa1eafed6619c24cb0c4->enter($__internal_388c096d33f7cd93fa8bdcf912f7bb1379624a50c7ffaa1eafed6619c24cb0c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_3508d21f74a1b3c8bf4f905c4f057fd33c1616133e79afa1922eb217ec8734bf->leave($__internal_3508d21f74a1b3c8bf4f905c4f057fd33c1616133e79afa1922eb217ec8734bf_prof);

        
        $__internal_388c096d33f7cd93fa8bdcf912f7bb1379624a50c7ffaa1eafed6619c24cb0c4->leave($__internal_388c096d33f7cd93fa8bdcf912f7bb1379624a50c7ffaa1eafed6619c24cb0c4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/m2eserv/ameur/Documents/IFI/api-platform/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
