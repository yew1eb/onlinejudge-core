
CC=gcc
GFLAGS=-Wall -g

BIN=judge

all:$(BIN)

.c.o:
	$(CC) $(GFLAG) -c $< -o $@

clean:
	@rm -f *.o $(BIN)

.PHONY:
	clean all
