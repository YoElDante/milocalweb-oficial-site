/**
 * Parcial 00 — Apertura del bundle JS de MiLocalWeb.
 *
 * Crea el IIFE y activa strict mode. Debe ser el primer archivo de
 * tools/build-js.php: el resto de los parciales comparten este scope y se
 * ejecutan en el orden declarado allí. El docblock siguiente documenta el
 * handler que continúa en 01-smooth-scroll.js.
 */
(function () {
  'use strict';

  /**
   * Scroll suave con offset para el header sticky.
   * Compensa la altura del navbar al navegar por anclas internas.
   */
