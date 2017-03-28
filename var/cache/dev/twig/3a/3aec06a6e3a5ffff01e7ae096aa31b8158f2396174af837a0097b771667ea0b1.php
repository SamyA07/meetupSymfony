<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_74a5c5af01cddba92a0ac19d21c290d224776a01b14d02cd817a997e909fd70e extends Twig_Template
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
        $__internal_3dbd6a88034f2e1d043bbd539d8460b6a03acdb8df43b08b2a1906400fec7e9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dbd6a88034f2e1d043bbd539d8460b6a03acdb8df43b08b2a1906400fec7e9d->enter($__internal_3dbd6a88034f2e1d043bbd539d8460b6a03acdb8df43b08b2a1906400fec7e9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_ace68bc327fe9e2741f5ea6dea7fe123235cc0d390d60e76610ad5b039b3eed5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ace68bc327fe9e2741f5ea6dea7fe123235cc0d390d60e76610ad5b039b3eed5->enter($__internal_ace68bc327fe9e2741f5ea6dea7fe123235cc0d390d60e76610ad5b039b3eed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_3dbd6a88034f2e1d043bbd539d8460b6a03acdb8df43b08b2a1906400fec7e9d->leave($__internal_3dbd6a88034f2e1d043bbd539d8460b6a03acdb8df43b08b2a1906400fec7e9d_prof);

        
        $__internal_ace68bc327fe9e2741f5ea6dea7fe123235cc0d390d60e76610ad5b039b3eed5->leave($__internal_ace68bc327fe9e2741f5ea6dea7fe123235cc0d390d60e76610ad5b039b3eed5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/m2eserv/ameur/Documents/IFI/api-platform/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
