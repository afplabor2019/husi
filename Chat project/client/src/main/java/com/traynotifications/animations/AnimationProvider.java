package com.traynotifications.animations;

import java.util.ArrayList;
import java.util.Collections;
import java.util.List;
import java.util.function.Predicate;
import java.util.stream.Collectors;

public class AnimationProvider {

    private List<TrayAnimation> animationsList;

    public AnimationProvider(TrayAnimation... animations) {
        animationsList = new ArrayList<>();
        Collections.addAll(animationsList, animations);
    }

    public void addAll(TrayAnimation... animations) {
        Collections.addAll(animationsList, animations);
    }

    public TrayAnimation get(int index) {
        return animationsList.get(index);
    }

    public TrayAnimation findFirstWhere(Predicate<? super TrayAnimation> predicate) {
        return animationsList.stream().filter(predicate).findFirst().orElse(null);
    }

    public List<TrayAnimation> where(Predicate<? super TrayAnimation> predicate) {
        return animationsList.stream().filter(predicate).collect(Collectors.toList());
    }
}
