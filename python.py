#!/usr/bin/env python
class F:
    def __init__(self):
        self.cache = {}
    def f(self, num):
        if self.cache.has_key(num):
            return self.cache[num]
        if num < 1:
            return 0
        res = self.f(num - 3) + self.f(num - 2) + self.f(num - 1)
        if num < 4:
            res += 1
        self.cache[num] = res
        return res

if __name__ == '__main__':
    f = F()
    print f.f(100)
