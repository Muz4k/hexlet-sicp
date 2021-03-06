<?php

return [
    'title' => "Алгоритм как процедура",
    'description' => [
        '1' =>
        "а. Реализуйте этот алгоритм как процедуру reduce-terms, которая принимает в качестве аргументов два списка термов n и d и возвращает список из nn и dd, которые представляют собой n и d, " .
        "приведенные к наименьшему знаменателю по вышеописанному алгоритму. Напишите, кроме того, процедуру reduce-poly, подобную add-poly, которая проверяет, чтобы два poly имели одну и ту же переменную. " .
        "Если это так, reduce-poly откусывает эту переменную и передает оставшуюся часть задачи в reduce-terms, а затем прикрепляет переменную обратно к двум спискам термов, которые получены из reduce-terms.",
        '2' =>
        "б. Определите процедуру, аналогичную reduce-terms, которая делает то, что делала для целых чисел исходная make-rat:",
        '3' =>
        "и определите reduce как обобщенную операцию, которая вызывает apply-generic и диспетчирует либо кreduce-poly (если аргументы — многочлены), либо к reduce-integers (для аргументов типа scheme-number). " .
        "Теперь Вы легко можете заставить пакет рациональной арифметики приводить дроби к наименьшему знаменателю, потребовав от make-rat звать reduce прежде, " .
        "чем сочетать данные числитель и знаменатель в процессе порождения рационального числа. Теперь система обрабатывает рациональные выражения и для целых чисел, и для многочленов. " .
        "Чтобы проверить программу, попробуйте пример, который приведен в начале этого расширенного упражнения:",
        '4' =>
        "Посмотрите, удалось ли Вам получить правильный ответ, правильно приведенный к наименьшему знаменателю.",
        '5' =>
        "Вычисление НОД находится в центре всякой системы, работающей с рациональными числами. Алгоритм, который мы использовали в тексте, хотя математически он естествен, работает очень медленно. " .
        "Медлительность эта проистекает отчасти из большого количества операций деления, а отчасти из огромного размера промежуточных коэффициентов, которые порождаются в ходе псевдоделения. " .
        "Одна из активно разрабатываемых областей в теории систем алгебраических манипуляций – построение более быстрых алгоритмов для вычисления НОД многочленов."
    ]
];
