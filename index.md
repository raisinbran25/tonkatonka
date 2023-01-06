```{r}
getRandomNumber <- function() {
  sample(1:6, 1)
}
```

```{asis, echo = getRandomNumber() == 4}
According to https://xkcd.com/221/, we just generated
a **true** random number!
```