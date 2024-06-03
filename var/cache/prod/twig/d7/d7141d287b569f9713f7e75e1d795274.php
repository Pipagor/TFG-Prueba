<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* buscador/mostrar/razas.html.twig */
class __TwigTemplate_a3f96db6bcfc950223faef0153f7867f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "buscador/mostrar/razas.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        yield "        <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/bodygrid.css"), "html", null, true);
        yield "\">
";
        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "    <div class=\"grid-body\">
        <div class=\"L1\"></div>
        <div class=\"L2\"></div>
        <div class=\"DC\">
            <div class='grid-subclase'>
                <span class=\"V1\"> </span>
                <h1 class=\"N\">";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["raza"] ?? null), "nombre", [], "any", false, false, false, 12), "html", null, true);
        yield "</h1>
                <span class=\"V2\"> </span>
                <div class=\"R\">
                    <span><b>Velocidad: </b>";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["raza"] ?? null), "Velocidad", [], "any", false, false, false, 15), "html", null, true);
        yield "ft</span><br>
                    <span><b>Ataque desarmado: </b>";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["raza"] ?? null), "AtaqueDesarmado", [], "any", false, false, false, 16), "html", null, true);
        yield "</span><br>
                    ";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["raza"] ?? null), "Descripcion", [], "any", false, false, false, 17), "html", null, true);
        yield "
                </div>
                <div  class=\"I\" ><img src=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["raza"] ?? null), "img", [], "any", false, false, false, 19), "html", null, true);
        yield "\"/></div>
            </div>
        </div>
        <div class=\"TP\">
            <h1>Estadísticas de raza</h1>
            <table class=\"Progreso\">
                <tr>
                    <th>Estadística</th>
                    <th>Valor</th>
                </tr>
                <tr>
                    <td>Fuerza</td>
                    <td>";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["raza"] ?? null), "Fuerza", [], "any", false, false, false, 31), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <td>Destreza</td>
                    <td>";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["raza"] ?? null), "Destreza", [], "any", false, false, false, 35), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <td>Constitución</td>
                    <td>";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["raza"] ?? null), "Constitucion", [], "any", false, false, false, 39), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <td>Inteligencia</td>
                    <td>";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["raza"] ?? null), "Inteligencia", [], "any", false, false, false, 43), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <td>Sabiduría</td>
                    <td>";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["raza"] ?? null), "Sabiduria", [], "any", false, false, false, 47), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <td>Carisma</td>
                    <td>";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["raza"] ?? null), "Carisma", [], "any", false, false, false, 51), "html", null, true);
        yield "</td>
                </tr>
            </table>
            </div>
        <div class=\"RC\">
            <h1>Rasgos de raza</h1>
            <div>
                ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["rasgos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["habilidad"]) {
            // line 59
            yield "                    <div class=\"grid-rasgos\">
                        <span class=\"N\"><b>";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["habilidad"], "nombre", [], "any", false, false, false, 60), "html", null, true);
            yield "</b></span>
                        <span class=\"V1\"></span>
                        <span class=\"L\"><b><i>Nivel ";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["habilidad"], "OrigenNivel", [], "any", false, false, false, 62), "html", null, true);
            yield "</i></b></span>
                        <span class=\"D\">";
            // line 63
            $context["parraf"] = "";
            // line 64
            yield "                                        ";
            $context["buffer"] = 0;
            // line 65
            yield "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(0, Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["habilidad"], "descripcion", [], "any", false, false, false, 65))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 66
                yield "                                            ";
                if ((($context["buffer"] ?? null) > 0)) {
                    // line 67
                    yield "                                                ";
                    $context["buffer"] = (($context["buffer"] ?? null) - 1);
                    // line 68
                    yield "                                            ";
                } elseif ((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["habilidad"], "descripcion", [], "any", false, false, false, 68), $context["i"], 5) == "{|S|}")) {
                    // line 69
                    yield "                                                ";
                    $context["parraf"] = Twig\Extension\CoreExtension::join([($context["parraf"] ?? null), "
"]);
                    // line 70
                    yield "                                                ";
                    $context["buffer"] = 4;
                    // line 71
                    yield "                                            ";
                } elseif ((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["habilidad"], "descripcion", [], "any", false, false, false, 71), $context["i"], 5) == "{|B|}")) {
                    // line 72
                    yield "                                                ";
                    yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["parraf"] ?? null), "html", null, true));
                    yield "
                                                ";
                    // line 73
                    $context["parraf"] = "";
                    // line 74
                    yield "                                                <b>
                                                ";
                    // line 75
                    $context["buffer"] = 4;
                    // line 76
                    yield "                                            ";
                } elseif ((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["habilidad"], "descripcion", [], "any", false, false, false, 76), $context["i"], 5) == "{|I|}")) {
                    // line 77
                    yield "                                                ";
                    yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["parraf"] ?? null), "html", null, true));
                    yield "
                                                ";
                    // line 78
                    $context["parraf"] = "";
                    // line 79
                    yield "                                                <i>
                                                ";
                    // line 80
                    $context["buffer"] = 4;
                    // line 81
                    yield "                                            ";
                } elseif ((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["habilidad"], "descripcion", [], "any", false, false, false, 81), $context["i"], 6) == "{|/B|}")) {
                    // line 82
                    yield "                                                ";
                    yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["parraf"] ?? null), "html", null, true));
                    yield "
                                                ";
                    // line 83
                    $context["parraf"] = "";
                    // line 84
                    yield "                                                </b>
                                                ";
                    // line 85
                    $context["buffer"] = 5;
                    // line 86
                    yield "                                            ";
                } elseif ((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["habilidad"], "descripcion", [], "any", false, false, false, 86), $context["i"], 6) == "{|/I|}")) {
                    // line 87
                    yield "                                                ";
                    yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["parraf"] ?? null), "html", null, true));
                    yield "
                                                ";
                    // line 88
                    $context["parraf"] = "";
                    // line 89
                    yield "                                                </i>
                                                ";
                    // line 90
                    $context["buffer"] = 5;
                    // line 91
                    yield "                                            ";
                } else {
                    // line 92
                    yield "                                                ";
                    $context["parraf"] = Twig\Extension\CoreExtension::join([($context["parraf"] ?? null), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["habilidad"], "descripcion", [], "any", false, false, false, 92), $context["i"], 1)]);
                    // line 93
                    yield "                                            ";
                }
                // line 94
                yield "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            yield "                                        ";
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["parraf"] ?? null), "html", null, true));
            yield "
                        </span> 
                    </div><br>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['habilidad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        yield "            </div>
        </div>
        <div class=\"SU\">
            <h1>Subrazas</h1>
                <div class=\"listado\">
                    ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["subrazas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subraza"]) {
            // line 105
            yield "                        <a class=\"elemento\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subraza", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["subraza"], "id", [], "any", false, false, false, 105)]), "html", null, true);
            yield "\">
                            <img class=\"I\" src=\"";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subraza"], "img", [], "any", false, false, false, 106), "html", null, true);
            yield "\">
                            <h2 class=\"N\">";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subraza"], "Nombre", [], "any", false, false, false, 107), "html", null, true);
            yield "</h2>
                            <span class=\"E\"></span>
                            <i class=\"S\">";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subraza"], "Descripcion", [], "any", false, false, false, 109), "html", null, true);
            yield "</i>
                            <i class=\"A\">";
            // line 110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subraza"], "Autor", [], "any", false, false, false, 110), "html", null, true);
            yield "</i>
                            <span class=\"C\"></span>
                        </a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subraza'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        yield "                </div>
        </div>
    </div>
    
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "buscador/mostrar/razas.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  318 => 114,  308 => 110,  304 => 109,  299 => 107,  295 => 106,  290 => 105,  286 => 104,  279 => 99,  268 => 95,  262 => 94,  259 => 93,  256 => 92,  253 => 91,  251 => 90,  248 => 89,  246 => 88,  241 => 87,  238 => 86,  236 => 85,  233 => 84,  231 => 83,  226 => 82,  223 => 81,  221 => 80,  218 => 79,  216 => 78,  211 => 77,  208 => 76,  206 => 75,  203 => 74,  201 => 73,  196 => 72,  193 => 71,  190 => 70,  186 => 69,  183 => 68,  180 => 67,  177 => 66,  172 => 65,  169 => 64,  167 => 63,  163 => 62,  158 => 60,  155 => 59,  151 => 58,  141 => 51,  134 => 47,  127 => 43,  120 => 39,  113 => 35,  106 => 31,  91 => 19,  86 => 17,  82 => 16,  78 => 15,  72 => 12,  64 => 6,  60 => 5,  52 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "buscador/mostrar/razas.html.twig", "C:\\Users\\alopa\\OneDrive\\Escritorio\\xampp2\\htdocs\\Symfony\\TFG\\templates\\buscador\\mostrar\\razas.html.twig");
    }
}
