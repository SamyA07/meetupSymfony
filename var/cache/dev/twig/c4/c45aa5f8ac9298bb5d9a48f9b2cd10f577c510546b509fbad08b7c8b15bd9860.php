<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_379190c5cdf040bfb89282dcbcc509c22f6cdf7960001c4656191e5c84cc28c3 extends Twig_Template
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
        $__internal_5fec9f495f9f073e4d10bafdfed749c7a420e5e29dafc79b639a58af3055e57f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fec9f495f9f073e4d10bafdfed749c7a420e5e29dafc79b639a58af3055e57f->enter($__internal_5fec9f495f9f073e4d10bafdfed749c7a420e5e29dafc79b639a58af3055e57f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_e93d4dee16292a9d42e61057added55cb31445579e755f3c2893e7141f1ff836 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e93d4dee16292a9d42e61057added55cb31445579e755f3c2893e7141f1ff836->enter($__internal_e93d4dee16292a9d42e61057added55cb31445579e755f3c2893e7141f1ff836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_5fec9f495f9f073e4d10bafdfed749c7a420e5e29dafc79b639a58af3055e57f->leave($__internal_5fec9f495f9f073e4d10bafdfed749c7a420e5e29dafc79b639a58af3055e57f_prof);

        
        $__internal_e93d4dee16292a9d42e61057added55cb31445579e755f3c2893e7141f1ff836->leave($__internal_e93d4dee16292a9d42e61057added55cb31445579e755f3c2893e7141f1ff836_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/home/m2eserv/ameur/Documents/IFI/api-platform/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
